@extends('app')

@section('body')
    <link rel="stylesheet" href="{{asset('/css/cart.css')}}">
    <div class="gh-cart-root">
        <main class="gh-cart-container">
            <div class="gh-cart-layout">
                <div class="gh-cart-items-container">
                    @if($cartItems->isEmpty())
                        <h1>giỏ hàng rỗng</h1>
                    @else
                        <div class="gh-cart-items-header">
                            <h2 class="gh-cart-items-title">Sản phẩm</h2>
                            <span class="gh-cart-item-count">{{ $cartItems->count() }} sản phẩm</span>
                        </div>

                        @foreach ($cartItems as $item)
                            @php
                                $variant = $item->productVariant;
                                $product = $variant->product;
                                $color = $variant->color;
                                $size = $variant->size;
                                $img = $variant->product->thumbnail;
                                $stock = $variant->quantity;


                            @endphp
                            <div class="gh-cart-item">
                                <img src="{{  $img?->path }}" alt="" class="gh-cart-item-image">
                                <div class="gh-cart-item-details">
                                    <h3 class="gh-cart-item-title">{{ $product->name }}</h3>

                                    <div class="gh-cart-item-variant">
                                        <div class="gh-cart-item-all">
                                            <span class="gh-cart-item-color" style="background-color:{{ $color->hex_code }}"></span>
                                            <span>{{ $color->name ?? 'N/A' }}</span>
                                        </div>


                                        <span class="gh-cart-item-size">{{ $size->name ?? 'N/A' }}</span>
                                    </div>
                                    <a href="{{route('cart.remove', $variant->id)}}">
                                        <button class="gh-cart-remove-item">
                                            <i class="fas fa-trash-alt"></i> Xóa
                                        </button>
                                    </a>
                                </div>
                                <div class="gh-cart-item-price">
                                    {{ number_format($variant->price ?? $product->price ?? 0, 0, ',', '.') }}đ
                                </div>
                                <div class="gh-cart-quantity-control">
                                    <form action="{{ route('cart.update', $variant->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="quantity" value="{{ max(1, $item->quantity - 1) }}">
                                        <button type="submit" class="gh-cart-quantity-btn minus" {{ $item->quantity <= 1 ? 'disabled' : '' }}>−</button>                                    
                                    </form>
                                    <input type="number" value="{{ $item->quantity }}" min="1" max="{{ $stock }}"readonly class="gh-cart-quantity-input" readonly>
                                    <form action="{{ route('cart.update', $variant->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="quantity" value="{{ min($item->quantity + 1, $stock) }}">
                                        <button type="submit" class="gh-cart-quantity-btn plus"  {{ $item->quantity >= $stock ? 'disabled' : '' }}>+</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>

                <div class="gh-cart-summary">
                    <h3 class="gh-cart-summary-title">Tóm tắt đơn hàng</h3>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                    <div class="gh-cart-summary-row">
                        <span class="gh-cart-summary-label">Tạm tính</span>
                        <span class="gh-cart-summary-value">{{ number_format($subtotal, 0, ',', '.') }}đđ</span>
                    </div>

                    <div class="gh-cart-summary-row">
                        <span class="gh-cart-summary-label">Giảm giá</span>
                        <span
                            class="gh-cart-summary-value gh-cart-discount-value">-{{ number_format($voucherDiscount, 0, ',', '.') }}đ</span>
                    </div>

                    <div class="gh-cart-summary-row">
                        <span class="gh-cart-summary-label">Phí vận chuyển</span>
                        <span class="gh-cart-summary-value">{{ number_format($shippingFee, 0, ',', '.') }}đ</span>
                    </div>

                    <div class="gh-cart-voucher-box">
                        <div class="gh-cart-voucher-title">Mã giảm giá</div>
                        <form action="{{ route('cart.applyVoucher') }}" method="POST">
                            @csrf
                            <div class="gh-cart-voucher-input">
                                <input type="text" name="voucher_code" placeholder="Nhập mã..."
                                    class="gh-cart-voucher-input-field">
                                <button type="submit" class="gh-cart-apply-btn">Áp dụng</button>
                            </div>
                        </form>
                        @if($voucherDiscount > 0)
                            <div class="gh-cart-voucher-applied">
                                <span>Đã áp dụng: -{{ number_format($voucherDiscount, 0, ',', '.') }}đ</span>
                            </div>

                        @endif
                        @error('voucher_code')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror

                    </div>

                    <div class="gh-cart-summary-row gh-cart-total-row">
                        <span class="gh-cart-summary-label">Tổng cộng</span>
                        <span class="gh-cart-summary-value">{{ number_format($total, 0, ',', '.') }}đ</span>
                    </div>

                    <a href="{{route('payment.add')}}"><button class="gh-cart-checkout-btn">
                            <i class="fas fa-lock"></i> Thanh toán an toàn
                        </button></a>

                    <a href="#" class="gh-cart-continue-shopping">
                        <i class="fas fa-arrow-left"></i> Tiếp tục mua sắm
                    </a>
                </div>
            </div>
        </main>
    </div>

@endsection