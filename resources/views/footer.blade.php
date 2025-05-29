 <footer class="footer">
        <div class="grid wide container">
            <div class="row">
                <div class="col l-3 m-3 c-12 ">
                    <div class="box-footer">
                        <div class="box-footer_logo"><a href="/index.html">M A G</a></div>
                        <p>M A G
                            Giấy chứng nhận đăng ký HKD số 17A80041952 do Phòng Tài chính - Kế hoạch, Uỷ ban nhân dân thành phố HCM cấp ngày 19/10/2004
                            Địa chỉ: Số 391/Tô ký, Phường Trung Mỹ Tây, Thành phố HCM, Tỉnh HCM, Việt Nam <br>
                            Email: manhsvps38793@gmail.com <br>
                            Điện thoại: 0325132746
                        </p>
                    </div>
                </div>
                <div class="col l-3 m-3 c-12 ">
                    <div class="box-footer">
                            <h3>Theo dõi</h3>
                            <p>
                                Theo dõi M A G qua các nền tảng để nhận khuyến mãi nhé
                            </p>
                            <div class="grid wide container">
                                <div class="row icon-center">
                                    <div class="col l-2 c-2">
                                        <div class="footer-icon"><img src="img/facebook.svg" alt=""></div>
                                    </div>
                                    <div class="col l-2 c-2">
                                        <div class="footer-icon"><img src="img/instagram.svg" alt=""></div>
                                    </div>
                                    <div class="col l-2 c-2">
                                        <div class="footer-icon"><img src="img/lazadaico.webp" alt=""></div>
                                    </div>
                                    <div class="col l-2 c-2">
                                        <div class="footer-icon"><img src="img/shopeeico.webp" alt=""></div>
                                    </div>
                                    <div class="col l-2 c-2">
                                        <div class="footer-icon"><img src="img/tiktok.svg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col l-3 m-3 c-12 ">
                    <div class="box-footer">
                        <h3>Về chúng tôi</h3>
                        <ul>

                            <li><a href="/index.html">Trang chủ</a></li>
                            <li><a href="/pruduct.html">Tất cả sản phẩm</a></li>
                            <li><a href="/form.html">Bảng Size</a></li>
                            <li><a href="">Kiểm tra đơn hàng</a></li>
                            <li><a href="">Hệ Thống Cửa Hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col l-3 m-3 c-12 ">
                    <div class="box-footer">
                        <h3>Chính sách</h3>
                        <ul>
                            <li><a href="">Chính sách mua hàng</a></li>
                            <li><a href="">Chính sách bảo mật</a></li>
                            <li><a href="">Phương thức thanh toán</a></li>
                            <li><a href="">Chính sách giao nhận, vận chuyển, kiểm hàng</a></li>
                            <li><a href="">Chính sách đổi trả</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const searchButton = document.querySelector(".Search");
        const searchInputMobile = document.querySelector(".search-input-mobile");

        searchButton.addEventListener("click", function () {
            searchInputMobile.classList.toggle("active");
        });
    });
</script>

    <!-- Thêm jQuery và lightSlider -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>

    <!-- Khởi tạo lightSlider -->
    <script>
    $(document).ready(function() {
        $('.product-list').lightSlider({
            item: 5, // Mặc định trên desktop
            loop: true,
            slideMargin: 20,
            controls: true,
            auto: true,
            responsive : [
                {
                    breakpoint: 992, // Tablet
                    settings: {
                        item: 2,
                        slideMargin: 15,
                    }
                },
                {
                    breakpoint: 576, // Mobile
                    settings: {
                        item: 2, // Chỉ hiển thị 1 item trên mobile
                        slideMove: 1,
                        slideMargin: 10,
                        adaptiveHeight: true, // Chiều cao tự động
                        enableDrag: false, // Tắt kéo trên mobile để tránh xung đột với scroll trang
                        controls: true,
                        pager: true
                    }
                }
            ]
        });
    });
    </script>
    <script>
    $(document).ready(function() {
        $('.product-list-sale').lightSlider({
            item: 3, // Mặc định trên desktop
            loop: true,
            slideMargin: 20,
            controls: true,
            auto: true,
            responsive : [
                {
                    breakpoint: 992, // Tablet
                    settings: {
                        item: 2,
                        slideMargin: 15,
                    }
                },
                {
                    breakpoint: 576, // Mobile
                    settings: {
                        item: 2, // Chỉ hiển thị 1 item trên mobile
                        slideMove: 1,
                        slideMargin: 10,
                        adaptiveHeight: true, // Chiều cao tự động
                        enableDrag: false, // Tắt kéo trên mobile để tránh xung đột với scroll trang
                        controls: true,
                        pager: true
                    }
                }
            ]
        });
    });
    </script>

    <!-- countdown -->
     <script>
    // Lấy các phần tử hiển thị giờ, phút, giây
    const hourEl = document.querySelector('.time-hour');
    const minuteEl = document.querySelector('.time-minute');
    const secondEl = document.querySelector('.time-second');
    const saleSection = document.querySelector('.product-sale');

    // Lấy tổng thời gian đếm ngược từ DOM
    let hours = parseInt(hourEl.textContent);
    let minutes = parseInt(minuteEl.textContent);
    let seconds = parseInt(secondEl.textContent);

    // Tính tổng thời gian đếm ngược (tính bằng giây)
    let totalSeconds = hours * 3600 + minutes * 60 + seconds;

    // Hàm cập nhật thời gian hiển thị
    function updateCountdown() {
        if (totalSeconds <= 0) {
            clearInterval(countdown);
            saleSection.style.display = 'none';
            return;
        }

        totalSeconds--;

        const h = Math.floor(totalSeconds / 3600);
        const m = Math.floor((totalSeconds % 3600) / 60);
        const s = totalSeconds % 60;

        hourEl.textContent = h.toString().padStart(2, '0');
        minuteEl.textContent = m.toString().padStart(2, '0');
        secondEl.textContent = s.toString().padStart(2, '0');
    }

    // Gọi hàm mỗi giây
    const countdown = setInterval(updateCountdown, 1000);
    </script>

    </body>
    </html>
    <script src="{{asset('/js/main.js')}}"></script>
