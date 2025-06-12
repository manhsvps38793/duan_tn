<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\product_variants;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;

class CartController extends Controller
{
    public function viewCart()
    {
        if (auth()->check()) {
            $cartItems = Cart::where('user_id', auth()->id())->with('productVariant.product.thumbnail')->get();
            $subtotal = $cartItems->sum(function ($item) {
                return $item->productVariant->product->price * $item->quantity;
            });
        } else {
            $sessionCart = session()->get('cart', []);
            $cartItems = collect($sessionCart)->map(function ($item) {
                $variant = product_variants::with('product.thumbnail')
                    ->find($item['product_variant_id']);
                if (!$variant) {
                    return null;
                }
                return (object) [
                    'productVariant' => $variant,
                    'quantity' => $item['quantity'],
                ];
            })->filter();  // loại bỏ null

            $subtotal = $cartItems->sum(function ($item) {
                return $item->productVariant->product->price * $item->quantity;
            });

        }

        $appliedVoucherCode = session()->get('applied_voucher');
        $voucherDiscount = 0;
        if ($appliedVoucherCode) {
            $voucher = Voucher::where('code', $appliedVoucherCode)
                ->where('expiration_date', '>=', now())
                ->where('start_date', '<=', now())
                ->where('quantity', '>', 0)
                ->first();
            if ($voucher) {
                if ($voucher->value_type == 'fixed') {
                    $voucherDiscount = $voucher->discount_amount;
                } elseif ($voucher->value_type == 'percent') {
                    $voucherDiscount = $subtotal * ($voucher->discount_amount / 100);
                }
            } else {
                session()->forget('applied_voucher');
            }
        }

        $shippingFee = 40000;
        $total = $subtotal - $voucherDiscount + $shippingFee;
        return view('Cart', compact('cartItems', 'subtotal', 'shippingFee', 'voucherDiscount', 'total'));
    }
    public function storeSessionCart(Request $request)
    {
        $productVariantId = $request->input('product_variant_id');
        $quantity = $request->input('quantity', 1);

        $cart = Session::get('cart', []);
        $found = false;
        foreach ($cart as &$item) {
            if ($item['product_variant_id'] == $productVariantId) {
                $item['quantity'] += $quantity;
                $found = true;
                break;
            }
        }
        if (!$found) {
            $cart[] = [
                'product_variant_id' => $productVariantId,
                'quantity' => $quantity,
            ];
        }
        Session::put('cart', $cart);
        return response()->json([
            'message' => 'Đã lưu vào session thành công',
            'cart' => $cart,
        ]);
    }
    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'product_variant_id' => 'required|integer|exists:product_variants,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $productVariantId = $validated['product_variant_id'];
        $variant = product_variants::find($productVariantId);
        if (!$variant || $variant->quantity < 1) {
            return response()->json([
                'message' => 'Sản phẩm đã hết hàng rồi :<'
            ], 422);
        }


        $quantity = $validated['quantity'];
        if (Auth::check()) {
            $userId = Auth::id();
            $sessionCart = collect(Session::get('cart', []))
                ->filter(fn($i) => !empty($i['product_variant_id']))
                ->all();
            foreach ($sessionCart as $item) {
                $this->upsertCartItem($userId, $item['product_variant_id'], $item['quantity']);
            }
            Session::forget('cart');
            $this->upsertCartItem($userId, $productVariantId, $quantity);
        } else {
            $cart = Session::get('cart', []);
            $exists = false;
            foreach ($cart as &$item) {
                if ($item['product_variant_id'] == $productVariantId) {
                    $item['quantity'] += $quantity;
                    $exists = true;
                    break;
                }
            }
            if (!$exists) {
                $cart[] = [
                    'product_variant_id' => $productVariantId,
                    'quantity' => $quantity
                ];
            }
            Session::put('cart', $cart);
        }

        return response()->json(['message' => 'Sản phẩm đã được thêm vào giỏ hàng thành công']);
    }
    private function upsertCartItem(int $userId, ?int $productVariantId, int $quantity): void
    {
        $cartItem = Cart::firstOrNew([
            'user_id' => $userId,
            'product_variant_id' => $productVariantId,
        ]);
        $cartItem->quantity = ($cartItem->exists ? $cartItem->quantity : 0) + $quantity;
        $cartItem->save();
    }
    public function applyVoucher(Request $request)
    {
        $vouCherCode = $request->input('voucher_code');

        $voucher = Voucher::where('code', $vouCherCode)->first();
        if (!$voucher) {
            session()->forget('applied_voucher');
            return redirect()->route('cart.view')->with('error', 'Mã giảm giá không tồn tại.');
        }

        if (Auth::check()) {
            $userId = Auth::id();
            $hasUsed = Order::where('user_id', $userId)
                ->where('voucher_id', $voucher->id)
                ->exists();
            if ($hasUsed) {
                return redirect()->route('cart.view')->with('error', 'Bạn đã sử dụng mã giảm giá này rồi.');
            }
        } else {
            return redirect()->route('cart.view')->with('error', 'Vui lòng đăng nhập để sử dụng Voucher.');

        }

        if ($voucher->expiration_date < now() || $voucher->start_date > now() || $voucher->quantity <= 0) {
            return redirect()->route('cart.view')->with('error', 'Mã giảm giá không hợp lệ hoặc đã hết hạn.');
        }


        $voucher = Voucher::where('code', $vouCherCode)
            ->where('expiration_date', '>=', now())
            ->where('start_date', '<=', now())
            ->where('quantity', '>', 0)
            ->first();

        if ($voucher) {
            session()->put('applied_voucher', $vouCherCode);
            return redirect()->route('cart.view')->with('success', 'Áp dụng mã giảm giá thành công!');
        } else {
            return redirect()->route('cart.view')->with('error', 'Mã giảm giá không hợp lệ hoặc đã hết hạn.');
        }
    }
    public function removeFromCart($variantId)
    {
        if (Auth::check()) {
            Cart::where('user_id', Auth::id())->where('product_variant_id', $variantId)->delete();
        } else {
            $cart = Session::get('cart', []);
            $cart = array_filter($cart, function ($item) use ($variantId) {
                return $item['product_variant_id'] != $variantId;
            });
            Session::put('cart', $cart);
        }
        return redirect()->back();
    }
    public function updateQuantity($variantId, Request $request)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        $quantity = $validated['quantity'];
        if (Auth::check()) {
            $cartItem = Cart::where('user_id', Auth::id())->where('product_variant_id', $variantId)->first();
            if ($cartItem) {
                $cartItem->quantity = $quantity;
                $cartItem->save();
            }
        } else {
            $cart = Session::get('cart', []);
            foreach ($cart as &$item) {
                if ($item['product_variant_id'] == $variantId) {
                    $item['quantity'] = $quantity;
                    break;
                }
            }
            Session::put('cart', $cart);
        }
        return redirect()->route('cart.view');
    }

    public function proceedToCheckout(Request $request)
    {
        if (Auth::check()) {
            $cartItems = Cart::where('user_id', operator: Auth::id())->get();

        } else {
            $cartItems = session()->get('cart', default: []);
        }

        //  $cartItems = Cart::where('user_id', Auth::id())->get();
        // $cartItems = session()->get('cart', []);

        if (empty($cartItems)) {
            return redirect()->route('cart.view')->with('error', 'Vui lòng thêm sản phẩm vào giỏ hàng.');
        }
        $cartDetails = collect($cartItems)->map(function ($item) {
            $variant = product_variants::with('product.thumbnail')->find($item['product_variant_id']);
            if ($variant) {
                return (object) [
                    'productVariant' => $variant,
                    'quantity' => $item['quantity'],
                    'subtotal' => $variant->product->price * $item['quantity'],
                ];
            }
            return null;
        })->filter()->all();

        $subtotal = collect($cartDetails)->sum('subtotal');
        $appliedVoucherCode = session()->get('applied_voucher');
        $voucherDiscount = 0;
        if ($appliedVoucherCode) {
            $voucher = Voucher::where('code', $appliedVoucherCode)
                ->where('expiration_date', '>=', now())
                ->where('start_date', '<=', now())
                ->where('quantity', '>', 0)
                ->first();
            if ($voucher) {
                if ($voucher->value_type == 'fixed') {
                    $voucherDiscount = $voucher->discount_amount;
                } elseif ($voucher->value_type == 'percent') {
                    $voucherDiscount = $subtotal * ($voucher->discount_amount / 100);
                }
            } else {
                session()->forget('applied_voucher');
            }
        }

        // Tính phí vận chuyển (giả sử cố định là 40,000 VND)
        $shippingFee = 40000;

        // Tính tổng cộng
        $total = $subtotal - $voucherDiscount + $shippingFee;

        // Bước 3: Lưu thông tin vào session và chuyển hướng
        session()->put('checkout_data', [
            'cartDetails' => $cartDetails,
            'subtotal' => $subtotal,
            'voucherDiscount' => $voucherDiscount,
            'shippingFee' => $shippingFee,
            'total' => $total,
        ]);

        // Chuyển hướng đến trang thanh toán
        return redirect()->route('payment.show');
    }
}
