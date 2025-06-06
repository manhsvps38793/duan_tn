@extends('app')

@section('body')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/tintuc.css') }}">
<section id="featured" class="news-featured-section">
        <div class="news-container">
            <h2 class="news-section-title">Bài viết nổi bật</h2>

            <div class="news-featured-grid">
                <!-- Article 1 -->
                    <a style="text-decoration: none" class="news-article-card" href="newdetail">
                    <span class="news-article-badge">Mới nhất</span>
                    <div class="news-article-image">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Fashion trend 2023">
                    </div>
                    <div class="news-article-content">
                        <span class="news-article-category">Xu hướng</span>
                        <h3 class="news-article-title">5 xu hướng thời trang sẽ thống trị năm 2023</h3>
                        <p class="news-article-excerpt">Khám phá những xu hướng nổi bật từ các tuần lễ thời trang quốc tế và cách kết hợp chúng vào tủ đồ của bạn...</p>
                        <div class="news-article-meta">
                            <div class="news-meta-item">
                                <i class="far fa-user"></i>
                                <span>Minh Anh</span>
                            </div>
                            <div class="news-meta-item">
                                <i class="far fa-calendar"></i>
                                <span>15/10/2023</span>
                            </div>
                        </div>
                    </div>
                    </a>

                <!-- Article 2 -->
                       <a style="text-decoration: none" class="news-article-card" href="newdetail">
                    <span class="news-article-badge">Mới nhất</span>
                    <div class="news-article-image">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Fashion trend 2023">
                    </div>
                    <div class="news-article-content">
                        <span class="news-article-category">Xu hướng</span>
                        <h3 class="news-article-title">5 xu hướng thời trang sẽ thống trị năm 2023</h3>
                        <p class="news-article-excerpt">Khám phá những xu hướng nổi bật từ các tuần lễ thời trang quốc tế và cách kết hợp chúng vào tủ đồ của bạn...</p>
                        <div class="news-article-meta">
                            <div class="news-meta-item">
                                <i class="far fa-user"></i>
                                <span>Minh Anh</span>
                            </div>
                            <div class="news-meta-item">
                                <i class="far fa-calendar"></i>
                                <span>15/10/2023</span>
                            </div>
                        </div>
                    </div>
                    </a>

                <!-- Article 3 -->
                     <a style="text-decoration: none" class="news-article-card" href="newdetail">
                    <span class="news-article-badge">Mới nhất</span>
                    <div class="news-article-image">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Fashion trend 2023">
                    </div>
                    <div class="news-article-content">
                        <span class="news-article-category">Xu hướng</span>
                        <h3 class="news-article-title">5 xu hướng thời trang sẽ thống trị năm 2023</h3>
                        <p class="news-article-excerpt">Khám phá những xu hướng nổi bật từ các tuần lễ thời trang quốc tế và cách kết hợp chúng vào tủ đồ của bạn...</p>
                        <div class="news-article-meta">
                            <div class="news-meta-item">
                                <i class="far fa-user"></i>
                                <span>Minh Anh</span>
                            </div>
                            <div class="news-meta-item">
                                <i class="far fa-calendar"></i>
                                <span>15/10/2023</span>
                            </div>
                        </div>
                    </div>
                    </a>
            </div>
        </div>
    </section>

    <!-- More Articles Section -->
    <section class="news-more-articles-section">
        <div class="news-container">
            <h2 class="news-section-title">Bài viết mới nhất</h2>

            <div class="news-articles-grid">
               <!-- Article 1 -->
                    <a style="text-decoration: none" class="news-article-card" href="newdetail">
                    <span class="news-article-badge">Mới nhất</span>
                    <div class="news-article-image">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Fashion trend 2023">
                    </div>
                    <div class="news-article-content">
                        <span class="news-article-category">Xu hướng</span>
                        <h3 class="news-article-title">5 xu hướng thời trang sẽ thống trị năm 2023</h3>
                        <p class="news-article-excerpt">Khám phá những xu hướng nổi bật từ các tuần lễ thời trang quốc tế và cách kết hợp chúng vào tủ đồ của bạn...</p>
                        <div class="news-article-meta">
                            <div class="news-meta-item">
                                <i class="far fa-user"></i>
                                <span>Minh Anh</span>
                            </div>
                            <div class="news-meta-item">
                                <i class="far fa-calendar"></i>
                                <span>15/10/2023</span>
                            </div>
                        </div>
                    </div>
                    </a>

                <!-- Article 2 -->
                       <a style="text-decoration: none" class="news-article-card" href="newdetail">
                    <span class="news-article-badge">Mới nhất</span>
                    <div class="news-article-image">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Fashion trend 2023">
                    </div>
                    <div class="news-article-content">
                        <span class="news-article-category">Xu hướng</span>
                        <h3 class="news-article-title">5 xu hướng thời trang sẽ thống trị năm 2023</h3>
                        <p class="news-article-excerpt">Khám phá những xu hướng nổi bật từ các tuần lễ thời trang quốc tế và cách kết hợp chúng vào tủ đồ của bạn...</p>
                        <div class="news-article-meta">
                            <div class="news-meta-item">
                                <i class="far fa-user"></i>
                                <span>Minh Anh</span>
                            </div>
                            <div class="news-meta-item">
                                <i class="far fa-calendar"></i>
                                <span>15/10/2023</span>
                            </div>
                        </div>
                    </div>
                    </a>

                <!-- Article 3 -->
                     <a style="text-decoration: none" class="news-article-card" href="newdetail">
                    <span class="news-article-badge">Mới nhất</span>
                    <div class="news-article-image">
                        <img src="https://images.unsplash.com/photo-1539109136881-3be0616acf4b?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Fashion trend 2023">
                    </div>
                    <div class="news-article-content">
                        <span class="news-article-category">Xu hướng</span>
                        <h3 class="news-article-title">5 xu hướng thời trang sẽ thống trị năm 2023</h3>
                        <p class="news-article-excerpt">Khám phá những xu hướng nổi bật từ các tuần lễ thời trang quốc tế và cách kết hợp chúng vào tủ đồ của bạn...</p>
                        <div class="news-article-meta">
                            <div class="news-meta-item">
                                <i class="far fa-user"></i>
                                <span>Minh Anh</span>
                            </div>
                            <div class="news-meta-item">
                                <i class="far fa-calendar"></i>
                                <span>15/10/2023</span>
                            </div>
                        </div>
                    </div>
                    </a>
            </div>
        </div>
    </section>

    <!-- Trending Section -->
    <section id="trending" class="news-trending-section">
        <div class="news-container">
            <h2 class="news-section-title">Đang thịnh hành</h2>

            <div class="news-trending-container">
                <div class="news-trending-main">
                    <div class="news-trending-image">
                        <img src="https://images.unsplash.com/photo-1492707892479-7bc8d5a4ee93?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Fashion week">
                    </div>
                    <div class="news-trending-content">
                        <span class="news-trending-category">Tuần lễ thời trang</span>
                        <h3 class="news-trending-title">Tổng hợp những bộ sưu tập ấn tượng nhất tại Paris Fashion Week 2023</h3>
                        <p class="news-trending-excerpt">Những khoảnh khắc đáng nhớ và các thiết kế đột phá từ kinh đô thời trang thế giới.</p>
                        <a href="#" class="news-btn news-btn-primary">Xem chi tiết</a>
                    </div>
                </div>

                <div class="news-trending-list">
                    <div class="news-trend-item">
                        <div class="news-trend-number">1</div>
                        <div class="news-trend-info">
                            <h4>Phong cách Y2K</h4>
                            <p>Sự trở lại của thời trang những năm 2000</p>
                        </div>
                    </div>
                    <div class="news-trend-item">
                        <div class="news-trend-number">2</div>
                        <div class="news-trend-info">
                            <h4>Quần cargo</h4>
                            <p>Xu hướng streetwear được ưa chuộng</p>
                        </div>
                    </div>
                    <div class="news-trend-item">
                        <div class="news-trend-number">3</div>
                        <div class="news-trend-info">
                            <h4>Màu sắc tươi sáng</h4>
                            <p>Xu hướng màu sắc cho mùa hè 2023</p>
                        </div>
                    </div>
                    <div class="news-trend-item">
                        <div class="news-trend-number">4</div>
                        <div class="news-trend-info">
                            <h4>Phụ kiện cỡ lớn</h4>
                            <p>Từ hoa tai đến vòng cổ oversize</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stores Section -->
    <section class="news-stores-section">
        <div class="news-container">
            <h2 class="news-section-title">Hệ thống cửa hàng</h2>

            <div class="news-stores-container">
                <!-- Store 1 -->
                <div class="news-store-card">
                    <div class="news-store-image">
                        <img src="https://images.unsplash.com/photo-1555529669-e69e7aa0ba9a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Hà Nội store">
                    </div>
                    <div class="news-store-content">
                        <h3 class="news-store-title">Hà Nội - Tràng Tiền Plaza</h3>
                        <p class="news-store-address">Tầng 3, Tràng Tiền Plaza, 24 Hai Bà Trưng, Hoàn Kiếm, Hà Nội</p>
                        <div class="news-store-hours">
                            <i class="far fa-clock"></i>
                            <span>9:00 - 22:00 (Thứ 2 - Chủ nhật)</span>
                        </div>
                        <div class="news-store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>024 3826 8888</span>
                        </div>
                    </div>
                </div>

                <!-- Store 2 -->
                <div class="news-store-card">
                    <div class="news-store-image">
                        <img src="https://images.unsplash.com/photo-1581539250439-c96689b516dd?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Hồ Chí Minh store">
                    </div>
                    <div class="news-store-content">
                        <h3 class="news-store-title">TP.HCM - Vincom Đồng Khởi</h3>
                        <p class="news-store-address">Tầng 2, Vincom Center, 72 Lê Thánh Tôn, Bến Nghé, Quận 1, TP.HCM</p>
                        <div class="news-store-hours">
                            <i class="far fa-clock"></i>
                            <span>9:30 - 22:00 (Thứ 2 - Chủ nhật)</span>
                        </div>
                        <div class="news-store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>028 3822 9999</span>
                        </div>
                    </div>
                </div>

                <!-- Store 3 -->
                <div class="news-store-card">
                    <div class="news-store-image">
                        <img src="https://images.unsplash.com/photo-1556740738-b6a63e27c4df?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Đà Nẵng store">
                    </div>
                    <div class="news-store-content">
                        <h3 class="news-store-title">Đà Nẵng - Vincom Đà Nẵng</h3>
                        <p class="news-store-address">Tầng 3, Vincom Plaza, 910A Ngô Quyền, Sơn Trà, Đà Nẵng</p>
                        <div class="news-store-hours">
                            <i class="far fa-clock"></i>
                            <span>9:00 - 21:30 (Thứ 2 - Chủ nhật)</span>
                        </div>
                        <div class="news-store-contact">
                            <i class="fas fa-phone-alt"></i>
                            <span>0236 368 6868</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
