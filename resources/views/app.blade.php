<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/info.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/thanhtoan.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/detail.css') }}">


    {{-- <link rel="stylesheet" href="{{ asset('/css/tintuc.css') }}"> --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css">
   <link
        href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oxanium:wght@200..800&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>
<body>

    @include('header')

    <div>
        @yield('body')
    </div>

    @include('footer')

    <script src="{{asset('/js/slider.js')}}"></script>




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
            auto: false,
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
    {{-- danh muc --}}
    <script>
    $(document).ready(function() {
        $('.list-cat').lightSlider({
            item: 5, // Mặc định trên desktop
            loop: true,
            slideMargin: 20,
            controls: true,
            auto: false,
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
        $('.product-list-bestseller').lightSlider({
            item: 5, // Mặc định trên desktop
            loop: true,
            slideMargin: 20,
            controls: true,
            auto: false,
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
        $('.product-list-recommend').lightSlider({
            item: 5, // Mặc định trên desktop
            loop: true,
            slideMargin: 20,
            controls: true,
            auto: false,
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
            speed: 1000,             // Thời gian trượt giữa các slide (ms)
            pause: 5000,
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
    <script src="{{asset('/js/main.js')}}"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll('.list-tabs ul li');
        const sections = {
            'tab-product-new': document.querySelector('.list-product-new'),
            'tab-product-bestseller': document.querySelector('.list-product-bestseller'),
            'tab-product-recommend': document.querySelector('.list-product-recommend')
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                // Bỏ active khỏi tất cả tab
                tabs.forEach(t => t.classList.remove('active'));

                // Thêm active vào tab được chọn
                this.classList.add('active');

                // Ẩn tất cả các section
                Object.values(sections).forEach(section => {
                    section.style.display = 'none';
                });

                // Hiện section tương ứng
                if (this.classList.contains('tab-product-new')) {
                    sections['tab-product-new'].style.display = 'block';
                } else if (this.classList.contains('tab-product-bestseller')) {
                    sections['tab-product-bestseller'].style.display = 'block';
                } else if (this.classList.contains('tab-product-recommend')) {
                    sections['tab-product-recommend'].style.display = 'block';
                }
            });
        });

        // Kích hoạt tab đầu tiên mặc định
        tabs[0].classList.add('active');
    });


</script>

</body>
</html>
