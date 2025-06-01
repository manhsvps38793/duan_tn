  <footer>
        <div class="footer-container">
            <div class="footer-col footer-about">
                <h3>M A G</h3>
                <p>M A G là tạp chí thời trang cao cấp, cung cấp những tin tức mới nhất về xu hướng, phong cách và các sự kiện thời trang đình đám.</p>
                <div class="footer-social">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Liên kết nhanh</h3>
                <ul class="footer-links">
                    <li><a href="#">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Danh mục</h3>
                <ul class="footer-links">
                    <li><a href="#">Áo thun</a></li>
                    <li><a href="#">Áo Polo</a></li>
                    <li><a href="#">Áo sơ mi</a></li>
                    <li><a href="#">Áo khoác</a></li>
                    <li><a href="#">Quần</a></li>
                    <li><a href="#">Phụ kiện</a></li>
                </ul>
            </div>

            <div class="footer-col footer-contact">
                <h3>Liên hệ</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> 391 Đường Tô ký, Quận 12, TP.HCM</li>
                    <li><i class="fas fa-phone"></i> 0325132746</li>
                    <li><i class="fas fa-envelope"></i> manhsvps38793@gmail.com</li>
                    <li><i class="fas fa-clock"></i> Thứ 2 - Thứ 6: 9:00 - 18:00</li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2023 M A G. Tất cả quyền được bảo lưu.</p>
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
