<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\product_variants;
use App\Models\Voucher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    protected $vnp_TmnCode;
    protected $vnp_HashSecret;
    protected $vnp_Url;
    protected $vnp_Returnurl;
    protected $vnp_apiUrl;
    protected $apiUrl;
    public function __construct()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->vnp_TmnCode = "AJT0AAYH"; // Mã định danh merchant
        $this->vnp_HashSecret = "50394OTCASPHF09AVM4EDBEQINVFJCDO"; // Secret key
        $this->vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $this->vnp_Returnurl = "http://127.0.0.1:8000/payment/result";
        $this->vnp_apiUrl = "http://sandbox.vnpayment.vn/merchant_webapi/merchant.html";
        $this->apiUrl = "https://sandbox.vnpayment.vn/merchant_webapi/api/transaction";
    }


    public function showPayment()
    {
        $checkoutData = session()->get('checkout_data');
        if (empty($checkoutData) || empty($checkoutData['cartDetails'])) {
            return redirect()->route('cart.view')->with('error', 'Giỏ hàng rỗng. Vui lòng thêm sản phẩm để thanh toán.');
        }


        $address = Auth::check() ? Auth::user()->addresses()->where('is_default', true)->first() : null;
        return view('payment', [
            'cartDetails' => $checkoutData['cartDetails'] ?? [],
            'subtotal' => $checkoutData['subtotal'] ?? 0,
            'voucherDiscount' => $checkoutData['voucherDiscount'] ?? 0,
            'shippingFee' => $checkoutData['shippingFee'] ?? 0,
            'total' => $checkoutData['total'] ?? 0,
            'address' => $address,
        ]);
    }
    public function paymentStore(Request $request)
    {
        $rules = [
            'address' => 'required',
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'payment' => 'required',
        ];


        if (!Auth::check()) {
            $rules['city'] = 'required';
            $rules['district'] = 'required';
            $rules['ward'] = 'required';
        }
        $request->validate($rules);


        $checkoutData = session()->get('checkout_data');
        if (empty($checkoutData) || empty($checkoutData['cartDetails'])) {
            return redirect()->route('cart.view')->with('error', 'Giỏ hàng rỗng. Vui lòng thêm sản phẩm để thanh toán.');
        }
        $cartDetails = $checkoutData['cartDetails'];
        $subtotal = $checkoutData['subtotal'];
        $voucherDiscount = $checkoutData['voucherDiscount'];
        $shippingFee = $checkoutData['shippingFee'];
        $total = $checkoutData['total'];
        $voucherCode = session()->get('applied_voucher');
        $voucherId = null;
        if ($voucherCode) {
            $voucher = Voucher::where('code', $voucherCode)
                ->where('expiration_date', '>=', now())
                ->where('start_date', '<=', now())
                ->where('quantity', '>', 0)
                ->first();
            if ($voucher) {
                $voucherId = $voucher->id;
                $voucher->decrement('quantity');
            }
        }






        $order = new Order();
        $order->user_id = Auth::id() ?? null;
        $order->voucher_id = $voucherId; // Set based on your logic, e.g., from $checkoutData
        $order->total_price = $total; // Use total_price instead of total_money
        $order->status = 'pending';
        $order->payment_methods = $request->payment;




        $order->save();

        foreach ($cartDetails as $item) {

            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $order->id;
            $orderDetail->product_variant_id = $item->productVariant->id; // Use product_variant_id
            $orderDetail->unit_price = $item->productVariant->product->price;
            $orderDetail->quantity = $item->quantity;
            $orderDetail->save();
        }


        if ($request->payment == 'Banking') {
            // Chuẩn bị dữ liệu thanh toán VNPAY
            $vnp_TxnRef = $order->id;
            $vnp_Amount = $total * 100; // VNPAY yêu cầu số tiền tính bằng VND x 100
            $vnp_Locale = 'vn'; // Mặc định là tiếng Việt
            $vnp_BankCode = $request->bankCode ?? ''; // Nếu có chọn ngân hàng
            $vnp_IpAddr = $request->ip();

            $inputData = [
                "vnp_Version" => "2.1.0",
                "vnp_TmnCode" => $this->vnp_TmnCode,
                "vnp_Amount" => $vnp_Amount,
                "vnp_Command" => "pay",
                "vnp_CreateDate" => date('YmdHis'),
                "vnp_CurrCode" => "VND",
                "vnp_IpAddr" => $vnp_IpAddr,
                "vnp_Locale" => $vnp_Locale,
                "vnp_OrderInfo" => "Thanh toan GD: " . $vnp_TxnRef,
                "vnp_OrderType" => "other",
                "vnp_ReturnUrl" => $this->vnp_Returnurl,
                "vnp_TxnRef" => $vnp_TxnRef,
                "vnp_ExpireDate" => date('YmdHis', strtotime('+15 minutes')),
            ];

            if ($vnp_BankCode) {
                $inputData['vnp_BankCode'] = $vnp_BankCode;
            }

            ksort($inputData);
            $query = "";
            $i = 0;
            $hashdata = "";
            foreach ($inputData as $key => $value) {
                if ($i == 1) {
                    $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                } else {
                    $hashdata .= urlencode($key) . "=" . urlencode($value);
                    $i = 1;
                }
                $query .= urlencode($key) . "=" . urlencode($value) . '&';
            }

            $vnp_Url = $this->vnp_Url . "?" . $query;
            if (isset($this->vnp_HashSecret)) {
                $vnpSecureHash = hash_hmac('sha512', $hashdata, $this->vnp_HashSecret);
                $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
            }
            header('Location: ' . $vnp_Url);
            die();
        } elseif ($request->payment == 'Momo') {

        } else {
            foreach ($cartDetails as $item) {
                $variant = product_variants::find($item->productVariant->id);
                if ($variant) {
                    $variant->quantity = max(0, $variant->quantity - $item->quantity);
                    $variant->save();
                }
            }


            if (Auth::check()) {
                Cart::where('user_id', Auth::id())->delete();
            }
            session()->forget(['cart', 'checkout_data', 'applied_voucher']);
            return view('payment.success');
        }

    }
    public function result(Request $request)
    {
        $vnp_SecureHash = $_GET['vnp_SecureHash'];
        $inputData = [];
        $inputData = array();
        foreach ($_GET as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }

        unset($inputData['vnp_SecureHash']);
        ksort($inputData);

        $hashData = '';
        $i = 0;

        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashData = $hashData . '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashData = $hashData . urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
        }
        $secureHash = hash_hmac('sha512', $hashData, $this->vnp_HashSecret);


        if ($secureHash == $vnp_SecureHash) {
            if ($_GET['vnp_ResponseCode'] == '00') {
                $orderId = $request->vnp_TxnRef;
                $order = Order::find($orderId);
                if ($order) {
                    $order->status = 'done';
                    $order->save();
                    foreach ($order->orderDetails as $detail) {
                        $variant = product_variants::find($detail->product_variant_id);
                        if ($variant) {
                            $variant->quantity = max(0, $variant->quantity - $detail->quantity);
                            $variant->save();
                        }
                    }
                    if (Auth::check()) {
                        Cart::where('user_id', Auth::id())->delete();
                    }
                    session()->forget(['cart', 'checkout_data', 'applied_voucher']);
                    return view('payment.success');
                } else {
                    return view('payment.error');
                }
            } else {
                return view('payment.fail');
            }
        } else {
            return view('payment.error');
        }
    }
}
