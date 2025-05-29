@extends('app')

@section('body')
    <link rel="stylesheet" href="{{ asset('css/tintuc.css') }}">
    <div class="container">
        <div class="main-content">
            <h1 class="section-title">Tin tức thời trang</h1>

            <div class="news-item">
                <img src="img/h1.jpg" alt="news">
                <div class="news-text">
                    <h3>Xu Hướng Thời Trang Hè 2025: Mát Mẻ, Trẻ Trung & Phá Cách</h3>
                    <span>May 2, 2025</span> <br>
                    <p>Thời trang đến từ chúng tối là những gì tuyệt vời và hoàn hảo nhất. Chúng tôi muốn tới tay <br> khách
                        hàng sành điệu và có gu thời trang hãy tiếp cận và tìm hiểu thêm các sản phẩm ...</p>

                </div>
            </div>

            <div class="news-item">
                <img src="img/h1.jpg" alt="news">
                <div class="news-text">
                    <h3>Top 5 Thương Hiệu Thời Trang Được Giới Trẻ Yêu Thích Nhất Hiện Nay</h3>
                    <span>May 2, 2025</span><br>
                    <p>Thời trang đến từ chúng tối là những gì tuyệt vời và hoàn hảo nhất. Chúng tôi muốn tới tay <br> khách
                        hàng sành điệu và có gu thời trang hãy tiếp cận và tìm hiểu thêm các sản phẩm ...</p>
                </div>
            </div>

            <div class="news-item">
                <img src="img/h1.jpg" alt="news">
                <div class="news-text">
                    <h3>Bí Quyết Mix Đồ Với Áo Sơ Mi Trắng Cho Mọi Phong Cách</h3>
                    <span>May 2, 2025</span> <br>
                    <p>Thời trang đến từ chúng tối là những gì tuyệt vời và hoàn hảo nhất. Chúng tôi muốn tới tay <br> khách
                        hàng sành điệu và có gu thời trang hãy tiếp cận và tìm hiểu thêm các sản phẩm ...</p>

                </div>
            </div>

            <div class="news-item">
                <img src="img/h1.jpg" alt="news">
                <div class="news-text">
                    <h3>Cách Chọn Quần Áo Phù Hợp Với Dáng Người – Mẹo Nhỏ Nhưng Hiệu Quả</h3>
                    <span>May 2, 2025</span> <br>
                    <p>Thời trang đến từ chúng tối là những gì tuyệt vời và hoàn hảo nhất. Chúng tôi muốn tới tay <br> khách
                        hàng sành điệu và có gu thời trang hãy tiếp cận và tìm hiểu thêm các sản phẩm ...</p>

                </div>
            </div>
        </div>

        <div class="sidebar">
            <h2>CHUYÊN MỤC</h2>
            <ul class="categories">
                <li>Bộ sưu tập mới</li>
                <li>Phong cách & Mix đồ</li>
                <li>Khuyến mãi</li>
                <li>Sự kiện thời trang</li>
                <li>Tin tức thương hiệu</li>
            </ul>

            <h2>BÀI VIẾT MỚI</h2>
            <ul class="recent-posts">
                <li>
                    <img src="img/h1.jpg" alt="thumb">
                    <div>
                        <p>Xu Hướng Thời Trang Hè 2025: Mát Mẻ, Trẻ Trung & Phá Cách</p>
                        <span>May 10, 2025</span>
                    </div>
                </li>
                <li>
                    <img src="img/h1.jpg" alt="thumb">
                    <div>
                        <p>Top 5 Thương Hiệu Thời Trang Được Giới Trẻ Yêu Thích Nhất Hiện Nay</p>
                        <span>May 2, 2025</span>
                    </div>
                </li>
                <li>
                    <img src="img/h1.jpg" alt="thumb">
                    <div>
                        <p>Bí Quyết Mix Đồ Với Áo Sơ Mi Trắng Cho Mọi Phong Cách</p>
                        <span>April 26, 2025</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
