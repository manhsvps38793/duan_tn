@extends('app')

@section('body')
 <div class="tt-container">
    <form action="luutt" method="post" class="tt-container">
        <input type="hidden" name="iduser" value="">
        <h1 class="tt-heading-1">Thanh Toán</h1>
        <div class="tt-checkout-container">
            <section class="tt-checkout-form">
                <h2 class="tt-heading-2">Thông tin giao hàng</h2>

                <div class="tt-form-group">
                    <label for="fullname" class="tt-label">Họ và tên</label>
                    <input type="text" id="fullname" name="fullname" class="tt-input" required>
                </div>

                <div class="tt-form-row">
                    <div class="tt-form-group">
                        <label for="email" class="tt-label">Email</label>
                        <input type="email" id="email" name="email" class="tt-input" required>
                    </div>

                    <div class="tt-form-group">
                        <label for="phone" class="tt-label">Số điện thoại</label>
                        <input type="tel" id="phone" name="phone" class="tt-input" required>
                    </div>
                </div>

                <div class="tt-form-group">
                    <label for="address" class="tt-label">Địa chỉ</label>
                    <input type="text" id="address"  class="tt-input" required>
                </div>

                <div class="tt-form-row">
                    <div class="tt-form-group">
                        <label for="city" class="tt-label">Thành phố</label>
                        <select id="city"  class="tt-select" required>
                            <option value="">Chọn thành phố</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="TP. Hồ Chí Minh">TP. Hồ Chí Minh</option>
                            <option value="Đà Nẵng">Đà Nẵng</option>
                        </select>
                    </div>

                    <div class="tt-form-group">
                        <label for="district" class="tt-label">Quận/Huyện</label>
                        <select id="district"  class="tt-select" required>
                            <option value="">Chọn quận/huyện</option>
                            <option value="Hà Nội">Hà Nội</option>
                        </select>
                    </div>
                </div>

                <div class="tt-form-group">
                    <label for="note" class="tt-label">Ghi chú (tuỳ chọn)</label>
                    <textarea id="note" name="note" rows="3" class="tt-textarea"></textarea>
                </div>

                <h3 class="tt-heading-3">Phương thức thanh toán</h3>

                <div class="tt-payment-method">
                    <div class="tt-payment-option">
                        <input type="radio" id="cod" name="payment" class="tt-radio" value="COD" checked>
                        <label for="cod">Thanh toán khi nhận hàng (COD)</label>
                    </div>

                    <div class="tt-payment-option">
                        <input type="radio" id="banking" name="payment" class="tt-radio" value="Banking">
                        <label for="banking">Chuyển khoản ngân hàng</label>
                    </div>

                    <div class="tt-payment-option">
                        <input type="radio" id="momo" name="payment" class="tt-radio" value="Momo">
                        <label for="momo">Ví điện tử MoMo</label>
                    </div>
                </div>
            </section>

            <section class="tt-order-summary">
                <h2 class="tt-heading-2">Đơn hàng của bạn</h2>
                    <input type="hidden" name="idproduct" value="">
                    <input type="hidden" name="sl" value="">
                    <input type="hidden" name="kq" value="">

                    <div class="tt-product-item">
                        <img src="img/aokhoac.webp" alt="" class="tt-product-image">
                        <div class="tt-product-info">
                            <div class="tt-product-title">Áo Thun Local Brand Unisex Seasonal Tshirt TS295</div>
                            <div class="tt-product-variant">Size: M | Màu: Đen</div>
                            <div class="tt-product-variant">Số lượng: 4</div>
                            <div class="tt-product-price">258đ</div>
                        </div>
                    </div>
                <div class="tt-summary-row">
                    <span>Tạm tính:</span>
                    <span>258đ</span>
                </div>

                <div class="tt-summary-row">
                    <span>Phí vận chuyển:</span>
                    <span>30.000đ</span>
                </div>

                <div class="tt-summary-row tt-total-row">
                    <span>Tổng cộng:</span>
                    <span>258đ</span>
                </div>

                <button type="submit" class="tt-checkout-btn">HOÀN TẤT ĐƠN HÀNG</button>

                <div class="tt-terms">
                    <p>
                        Bằng cách nhấn "Hoàn tất đơn hàng", bạn đồng ý với
                        <a href="#" class="tt-terms-link">Điều khoản và Điều kiện</a> của chúng tôi.
                    </p>
                </div>
            </section>
        </div>
    </form>

@endsection
