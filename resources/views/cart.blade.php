@extends('app')

@section('body')
<link rel="stylesheet" href="{{asset('/css/cart.css')}}">
  <div class="gh-cart-root">
<main class="gh-cart-container">
        <div class="gh-cart-layout">
            <div class="gh-cart-items-container">
                <div class="gh-cart-items-header">
                    <h2 class="gh-cart-items-title">Sản phẩm</h2>
                    <span class="gh-cart-item-count">3 sản phẩm</span>
                </div>

                <div class="gh-cart-item">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Áo khoác" class="gh-cart-item-image">
                    <div class="gh-cart-item-details">
                        <h3 class="gh-cart-item-title">Áo Khoác Dạ Đen</h3>
                        <div class="gh-cart-item-variant">
                            <span class="gh-cart-item-color">Đen</span>
                            <span class="gh-cart-item-size">Size L</span>
                        </div>
                        <button class="gh-cart-remove-item">
                            <i class="fas fa-trash-alt"></i> Xóa
                        </button>
                    </div>
                    <div class="gh-cart-item-price">1.250.000đ</div>
                    <div class="gh-cart-quantity-control">
                        <button class="gh-cart-quantity-btn">-</button>
                        <input type="number" value="1" min="1" class="gh-cart-quantity-input">
                        <button class="gh-cart-quantity-btn">+</button>
                    </div>
                </div>

                <div class="gh-cart-item">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Áo khoác" class="gh-cart-item-image">
                    <div class="gh-cart-item-details">
                        <h3 class="gh-cart-item-title">Áo Khoác Dạ Đen</h3>
                        <div class="gh-cart-item-variant">
                            <span class="gh-cart-item-color">Đen</span>
                            <span class="gh-cart-item-size">Size L</span>
                        </div>
                        <button class="gh-cart-remove-item">
                            <i class="fas fa-trash-alt"></i> Xóa
                        </button>
                    </div>
                    <div class="gh-cart-item-price">1.250.000đ</div>
                    <div class="gh-cart-quantity-control">
                        <button class="gh-cart-quantity-btn">-</button>
                        <input type="number" value="1" min="1" class="gh-cart-quantity-input">
                        <button class="gh-cart-quantity-btn">+</button>
                    </div>
                </div>

                <div class="gh-cart-item">
                    <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80" alt="Áo khoác" class="gh-cart-item-image">
                    <div class="gh-cart-item-details">
                        <h3 class="gh-cart-item-title">Áo Khoác Dạ Đen</h3>
                        <div class="gh-cart-item-variant">
                            <span class="gh-cart-item-color">Đen</span>
                            <span class="gh-cart-item-size">Size L</span>
                        </div>
                        <button class="gh-cart-remove-item">
                            <i class="fas fa-trash-alt"></i> Xóa
                        </button>
                    </div>
                    <div class="gh-cart-item-price">1.250.000đ</div>
                    <div class="gh-cart-quantity-control">
                        <button class="gh-cart-quantity-btn">-</button>
                        <input type="number" value="1" min="1" class="gh-cart-quantity-input">
                        <button class="gh-cart-quantity-btn">+</button>
                    </div>
                </div>
            </div>

            <div class="gh-cart-summary">
                <h3 class="gh-cart-summary-title">Tóm tắt đơn hàng</h3>

                <div class="gh-cart-summary-row">
                    <span class="gh-cart-summary-label">Tạm tính</span>
                    <span class="gh-cart-summary-value">3.750.000đ</span>
                </div>

                <div class="gh-cart-summary-row">
                    <span class="gh-cart-summary-label">Giảm giá</span>
                    <span class="gh-cart-summary-value gh-cart-discount-value">-0đ</span>
                </div>

                <div class="gh-cart-summary-row">
                    <span class="gh-cart-summary-label">Phí vận chuyển</span>
                    <span class="gh-cart-summary-value">40.000đ</span>
                </div>

                <div class="gh-cart-voucher-box">
                    <div class="gh-cart-voucher-title">Mã giảm giá</div>
                    <div class="gh-cart-voucher-input">
                        <input type="text" placeholder="Nhập mã..." class="gh-cart-voucher-input-field">
                        <button class="gh-cart-apply-btn">Áp dụng</button>
                    </div>
                </div>

                <div class="gh-cart-summary-row gh-cart-total-row">
                    <span class="gh-cart-summary-label">Tổng cộng</span>
                    <span class="gh-cart-summary-value">3.790.000đ</span>
                </div>

                <button class="gh-cart-checkout-btn">
                    <i class="fas fa-lock"></i> Thanh toán an toàn
                </button>

                <a href="#" class="gh-cart-continue-shopping">
                    <i class="fas fa-arrow-left"></i> Tiếp tục mua sắm
                </a>
            </div>
        </div>
    </main>
    </div>
@endsection
