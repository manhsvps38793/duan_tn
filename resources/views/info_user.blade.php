@extends('app')

@section('body')
    <div class="grid wide container">
        <div class="row" style="margin-top: 30px;">
            <div class="col l-3 m-6 c-12">
                <div class="item-aside">
                    <div class="account">
                        <div>
                            <div class="acc-avt">
                                <img src="" alt="">
                            </div>
                            <div class="acc-name">
                                <p>Phuong Nam</p>
                            </div>
                        </div>
                    </div>
                    <ul class="menu-pc">
                        <li id="li-tai-khoan">
                            <i class="fa-solid fa-circle-user"></i>
                            <span>Tài khoản</span>
                        </li>
                        <li id="li-yeu-thich">
                            <i class="fa-solid fa-heart"></i>
                            <span>Yêu thích</span>
                        </li>
                        <li id="li-don-hang">
                            <i class="fa-solid fa-truck-fast"></i>
                            <span>Đơn hàng</span>
                        </li>
                        <li id="li_doi_matkhau">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            <span>Đổi mật khẩu</span>
                        </li>
                        <hr>
                        <li>
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <span>Đăng xuất</span>
                        </li>
                    </ul>

                    <!--menu mobile -->
                    <!-- <ul class="menu-mobile">
                        <li id="li-tai-khoan"><i class="fa-solid fa-circle-user"></i>Tài khoản</li>
                        <li id="li-yeu-thich"><i class="fa-solid fa-heart"></i>Yêu thích</li>
                        <li id="li-don-hang"><i class="fa-solid fa-truck-fast"></i>Đơn hàng</li>
                        <li><i class="fa fa-key" aria-hidden="true"></i>Đổi mật khẩu</li>
                        <hr>
                        <li><i class="fa-solid fa-right-from-bracket"></i>Đăng xuất</li>
                    </ul> -->
                </div>
            </div>
            <div class="col l-9 m-6 c-12">
                <!-- thông tin tài khoản -->
                <div id="tai-khoan" class="account-info-container">
                    <h2>Thông tin tài khoản</h2>
                    <hr>
                    <form class="account-info-form">
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input type="text" value="Donal Khoi" readonly>
                        </div>
                        <div class="form-group">
                            <label>Số điện thoại</label>
                            <input type="text" value="0918740422" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" value="trandinhkhoi842005@gmail.com" readonly>
                        </div>
                        <div class="form-group">
                            <label>Quốc gia</label>
                            <input type="text" value="USA" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tỉnh / Thành phố</label>
                            <input type="text" value="California" readonly>
                        </div>
                        <div class="form-group">
                            <label>Quận / Huyện</label>
                            <input type="text" value="no data" readonly>
                        </div>
                        <div class="form-group">
                            <label>Xã / Thị trấn</label>
                            <input type="text" value="no data" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tòa nhà / Tên đường</label>
                            <input type="text" value="no data" readonly>
                        </div>
                        <button type="button" class="edit-button">
                            <i class="fa-solid fa-pen-to-square"></i> Thay đổi thông tin
                        </button>
                    </form>
                </div>

                <!-- sp yêu thích -->
                <div id="sp-yeuthich" class="row sp-yeuthich-container" style="display: none;">
                    <div class="col l-12 m-6 c-12">
                        <h2 class="section-title">Sản phẩm yêu thích</h2>
                        <hr style="margin-bottom: 20px;">
                    </div>
                    <div class="sp-yeuthich-item col l-4 m-6 c-6">
                        <div class="item-yt-img">
                            <div class="item-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <a href="detail.html"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <h2 class="item-yt-name">Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                        <p class="item-yt-price">120.000đ</p>
                    </div>
                    <div class="sp-yeuthich-item col l-4 m-6 c-6">
                        <div class="item-yt-img">
                            <div class="item-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <a href="detail.html"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <h2 class="item-yt-name">Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                        <p class="item-yt-price">120.000đ</p>
                    </div>
                    <div class="sp-yeuthich-item col l-4 m-6 c-6">
                        <div class="item-yt-img">
                            <div class="item-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <a href="detail.html"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <h2 class="item-yt-name">Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                        <p class="item-yt-price">120.000đ</p>
                    </div>
                    <div class="sp-yeuthich-item col l-4 m-6 c-6">
                        <div class="item-yt-img">
                            <div class="item-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <a href="detail.html"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <h2 class="item-yt-name">Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                        <p class="item-yt-price">120.000đ</p>
                    </div>
                    <div class="sp-yeuthich-item col l-4 m-6 c-6">
                        <div class="item-yt-img">
                            <div class="item-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <a href="detail.html"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <h2 class="item-yt-name">Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                        <p class="item-yt-price">120.000đ</p>
                    </div>
                    <div class="sp-yeuthich-item col l-4 m-6 c-6">
                        <div class="item-yt-img">
                            <div class="item-icon"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <a href="detail.html"><img src="img/aothun.webp" alt=""></a>
                        </div>
                        <h2 class="item-yt-name">Áo Thun Local Brand Uni M A G Summer Fresh Tshirt TS282</h2>
                        <p class="item-yt-price">120.000đ</p>
                    </div>
                </div>

                <!-- lịch sử đơn hàng -->
                <div id="ls-donhang" class="row lichsu-donhang" style="display: none;">
                    <div class="col l-12 m-6 c-12">
                        <div class="header-dh">
                            <ul class="list-status-pc">
                                <li class="active">Tất cả</li>
                                <li>Chờ xác nhận</li>
                                <li>Chờ lấy hàng</li>
                                <li>Đang vận chuyển</li>
                                <li>Đã giao</li>
                                <li>Đã hủy</li>
                            </ul>
                            <select class="list-status-mobile" name="" id="" style="display: none;">
                                <option value="">Tất cả</option>
                                <option value="">Chờ xác nhận</option>
                                <option value="">Chờ lấy hàng</option>
                                <option value="">Đang vận chuyển</option>
                                <option value="">Đã giao</option>
                                <option value="">Đã hủy</option>
                            </select>
                            <div class="search-dh">
                                <form action="" method="post">
                                    <input type="text" placeholder="Nhập mã đơn hoặc tên sản phẩm">
                                    <div class="icon-search">
                                        <i style="color: white;" class="fa-solid fa-magnifying-glass"></i>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="item-orders-box">
                            <div class="item-order">
                                <div class="item-order-top">
                                    <div class="id-order">
                                        <p>Mã đơn hàng: <span>#1311</span></p>
                                    </div>
                                    <div class="status-order">Chờ xác nhận</div>
                                </div>
                                <hr style="margin-top: 15px;">
                                <div class="item-order-product">
                                    <div class="product-img">
                                        <img src="img/polo.webp" alt="">
                                    </div>
                                    <div class="product-detail-order">
                                        <h3 class="product-name-order">Áo thun Baby Shark</h3>
                                        <p class="product-quantity">Số lượng: <span>1</span></p>
                                        <p class="product-size">Kích cỡ: <span>M</span></p>
                                        <p class="product-color">Màu: <span>Đen</span></p>
                                    </div>
                                    <div class="product-price">
                                        <p>120.000đ</p>
                                    </div>
                                </div>
                                <hr style="margin-top: 15px;">
                                <div class="operation">
                                    <div class="total-order">
                                        <p>Tổng tiền: <span class="span-total">120.000đ</span></p>
                                    </div>
                                    <div class="cancel-order">
                                        <a href="">Xem chi tiết </a>
                                        <button>Huỷ đơn hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- đổi mật khẩu -->
                <div id="doi_matkhau" class="row doi_pass" style="display: none;">
                    <div class="col l-12 m-6 c-12">
                        <h2 class="title-dmk">Đổi mật khẩu</h2>
                        <hr>
                    </div>
                        <form class="account-info-form">
                            <div class="col l-12 m-6 c-12">
                                <div class="form-group">
                                    <label>Nhập mật khẩu cũ</label>
                                    <input type="password" value="" >
                                </div>
                            </div>
                            <div class="col l-12 m-6 c-12">
                                <div class="form-group">
                                    <label>Nhập mật khẩu mới</label>
                                    <input type="password" value="" >
                                </div>
                            </div>
                            <div class="col l-12 m-6 c-12">
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu mới</label>
                                    <input type="password" value="" >
                                </div>
                            </div>
                            <div class="col l-12 m-6 c-12">
                                <button type="button" class="edit-button">
                                    <i class="fa-solid fa-pen-to-square"></i> Xác nhận
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- popup thay đổi thônh tin ng dùngdùng -->

    <div class="popup-overlay" id="popup-overlay"></div>
    <div class="popup-form" id="popup-form">
        <h3>Chỉnh sửa thông tin</h3>
        <form id="edit-user-form">
            <input type="text" id="edit-name" placeholder="Họ và tên" required>
            <input type="text" id="edit-phone" placeholder="Số điện thoại" required>
            <input type="email" id="edit-email" placeholder="Email" required>
            <input type="text" id="edit-country" placeholder="Quốc gia">
            <input type="text" id="edit-city" placeholder="Tỉnh / Thành phố">
            <input type="text" id="edit-district" placeholder="Quận / Huyện">
            <input type="text" id="edit-ward" placeholder="Xã / Thị trấn">
            <input type="text" id="edit-address" placeholder="Tòa nhà / Tên đường">
            <div class="popup-buttons">
                <button type="submit">Lưu</button>
                <button type="button" onclick="closePopup()">Hủy</button>
            </div>
        </form>
    </div>

    <div style="margin-bottom: 20px;"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
<script>
    // search mobile
    document.addEventListener("DOMContentLoaded", function () {
        const searchButton = document.querySelector(".Search");
        const searchInputMobile = document.querySelector(".search-input-mobile");

        searchButton.addEventListener("click", function () {
            searchInputMobile.classList.toggle("active");
        });
    });

    // popup sửa tt tk
    const editBtn = document.querySelector('.edit-button');
    const popup = document.getElementById('popup-form');
    const overlay = document.getElementById('popup-overlay');

    const form = document.querySelector('.account-info-form');
    const fields = form.querySelectorAll('input');

    // Hiển thị popup và điền dữ liệu
    editBtn.addEventListener('click', () => {
        document.getElementById('edit-name').value = fields[0].value;
        document.getElementById('edit-phone').value = fields[1].value;
        document.getElementById('edit-email').value = fields[2].value;
        document.getElementById('edit-country').value = fields[3].value;
        document.getElementById('edit-city').value = fields[4].value;
        document.getElementById('edit-district').value = fields[5].value;
        document.getElementById('edit-ward').value = fields[6].value;
        document.getElementById('edit-address').value = fields[7].value;

        popup.style.display = 'block';
        overlay.style.display = 'block';
    });

    function closePopup() {
        popup.style.display = 'none';
        overlay.style.display = 'none';
    }

    // Lưu thông tin người dùng
    document.getElementById('edit-user-form').addEventListener('submit', function (e) {
        e.preventDefault();

        fields[0].value = document.getElementById('edit-name').value;
        fields[1].value = document.getElementById('edit-phone').value;
        fields[2].value = document.getElementById('edit-email').value;
        fields[3].value = document.getElementById('edit-country').value;
        fields[4].value = document.getElementById('edit-city').value;
        fields[5].value = document.getElementById('edit-district').value;
        fields[6].value = document.getElementById('edit-ward').value;
        fields[7].value = document.getElementById('edit-address').value;

        closePopup();
        alert('Cập nhật thông tin thành công!');
    });

    //ẩn hiện các trang

    document.getElementById("li-tai-khoan").addEventListener("click", function () {
        document.getElementById("tai-khoan").style.display = "block";
        document.getElementById("sp-yeuthich").style.display = "none";
        document.getElementById("ls-donhang").style.display = "none";
        document.getElementById("doi_matkhau").style.display = "none";

    });
    document.getElementById("li-yeu-thich").addEventListener("click", function () {
        document.getElementById("tai-khoan").style.display = "none";
        document.getElementById("sp-yeuthich").style.display = "flex";
        document.getElementById("ls-donhang").style.display = "none";
        document.getElementById("doi_matkhau").style.display = "none";

    });
    document.getElementById("li-don-hang").addEventListener("click", function () {
        document.getElementById("ls-donhang").style.display = "block";
        document.getElementById("sp-yeuthich").style.display = "none";
        document.getElementById("tai-khoan").style.display = "none";
        document.getElementById("doi_matkhau").style.display = "none";

    });
     document.getElementById("li_doi_matkhau").addEventListener("click", function () {
        document.getElementById("doi_matkhau").style.display = "block";
        document.getElementById("sp-yeuthich").style.display = "none";
        document.getElementById("tai-khoan").style.display = "none";
        document.getElementById("ls-donhang").style.display = "none";
    });



    // border bottom khi nhấn vào các trạng thái đơn hàng
    const tabs = document.querySelectorAll('.header-dh ul li');

    tabs.forEach(tab => {
        tab.addEventListener('click', function () {
            tabs.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
        });
    });



</script>
@endsection
