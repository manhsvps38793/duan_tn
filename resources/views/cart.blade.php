@extends('app')

@section('body')
  <div style="margin-top: 20px;"></div>
    <div class="gh-container">
        <div class="gh-header">Giỏ hàng của bạn</div>
        <table class="gh-table">
            <thead>
                <tr>
                    <th>Thông tin sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <td>
                                <div class="gh-product-info">
                                    <img src="img/aokhoac.webp" alt="Áo thun" class="gh-product-img">
                                    <div class="gh-product-text">
                                       Áo Thun Local Brand Unisex Seasonal Tshirt TS295<br>
                                        Đỏ / M<br>
                                        <a href="Xoa"><span class="gh-remove">Xóa</span></a>
                                    </div>
                                </div>
                            </td>
                            <td class="gh-price">123đ</td>
                            <td class="gh-sl"><p>2</p></td>
                            <td class="gh-price">195.000đ</td>
                        </tr>
                    <tr>
                        <td colspan="4">Giỏ hàng trống</td>
                    </tr>
            </tbody>

        </table>
        <div class="gh-checkout-container">
            <a href="{{asset('/payment')}}" class="gh-checkout-btn">Thanh toán</a>
        </div>
    </div>
<div style="margin: 0px 0 30px 0px;"></div>
@endsection
