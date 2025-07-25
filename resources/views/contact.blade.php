@extends('app')

@section('body')
    <link rel="stylesheet" href="{{ asset('/css/contact.css') }}">
  <!-- Main Content -->
<div class="contact-body">
<main class="contact-main">
        <div class="contact-container">
            <div class="contact-section-title contact-animate">
                <h2>Liên Hệ</h2>
                <p>Chúng tôi luôn sẵn sàng hỗ trợ bạn. Hãy điền form bên dưới hoặc liên hệ trực tiếp với chúng tôi qua thông tin bên dưới.</p>
            </div>

            <!-- Contact Grid -->
            <div class="contact-grid">
                <!-- Contact Info -->
                <div class="contact-card contact-animate">
                    <h3>Thông Tin Liên Hệ</h3>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Địa Chỉ</h4>
                            <p>Tòa nhà ABC Tower, Số 123 Đường Nguyễn Văn Linh, Quận 7, TP. Hồ Chí Minh</p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Điện Thoại</h4>
                            <p><a href="tel:+842871234567">+84 28 7123 4567</a></p>
                            <p><a href="tel:+84987654321">+84 987 654 321</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p><a href="mailto:info@abccompany.vn">info@abccompany.vn</a></p>
                            <p><a href="mailto:support@abccompany.vn">support@abccompany.vn</a></p>
                        </div>
                    </div>
                </div>

                <!-- Business Hours -->
                <div class="contact-card contact-animate contact-delay-1">
                    <h3>Giờ Làm Việc</h3>

                    <table class="contact-hours-table">
                        <tr>
                            <td>Thứ Hai - Thứ Sáu</td>
                            <td>8:00 - 17:30</td>
                        </tr>
                        <tr>
                            <td>Thứ Bảy</td>
                            <td>8:00 - 12:00</td>
                        </tr>
                        <tr>
                            <td>Chủ Nhật</td>
                            <td>Nghỉ</td>
                        </tr>
                        <tr>
                            <td>Ngày Lễ</td>
                            <td>Nghỉ</td>
                        </tr>
                    </table>

                    <div class="contact-info-item" style="margin-top: 30px;">
                        <div class="contact-info-icon">
                            <i class="fas fa-globe-asia"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Website</h4>
                            <p><a href="https://www.abccompany.vn" target="_blank">www.abccompany.vn</a></p>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="contact-card contact-animate contact-delay-2">
                    <h3>Mạng Xã Hội</h3>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Facebook</h4>
                            <p><a href="https://www.facebook.com/tran.inh.khoi.930568" target="_blank">fb.com/DEV STORE SHOP</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Twitter</h4>
                            <p><a href="https://twitter.com/abccompany" target="_blank">@abccompany</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>Instagram</h4>
                            <p><a href="https://instagram.com/abccompany" target="_blank">@abccompany</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="contact-info-content">
                            <h4>LinkedIn</h4>
                            <p><a href="https://linkedin.com/company/abccompany" target="_blank">ABC Company</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-container contact-animate contact-delay-1">
                <h3>Gửi Thông Điệp Cho Chúng Tôi</h3>
                  <form id="contactForm" method="POST" action="{{ route('contact.send') }}">
                       @csrf
                    @if(session('success'))
                    <div class="alert alert-success" style="margin-bottom: 20px; color: green; font-weight: bold;">
                    {{ session('success') }}
                    </div>
                    @endif
                       <div class="contact-form-row">
                        <div class="contact-form-group">
                            <label for="name">Họ và Tên <span>*</span></label>
                            <input type="text" id="name" name="name" class="contact-form-control" required>
                        </div>

                        <div class="contact-form-group">
                            <label for="email">Email <span>*</span></label>
                            <input type="email" id="email" name="email" class="contact-form-control" required>
                        </div>
                    </div>

                    <div class="contact-form-row">
                        <div class="contact-form-group">
                            <label for="phone">Số Điện Thoại</label>
                            <input type="tel" id="phone" name="phone" class="contact-form-control">
                        </div>

                        <div class="contact-form-group">
                            <label for="subject">Chủ Đề</label>
                            <input type="text" id="subject" name="subject" class="contact-form-control">
                        </div>
                    </div>

                    <div class="contact-form-group">
                        <label for="message">Nội Dung <span>*</span></label>
                        <textarea id="message" name="message" class="contact-form-control" required></textarea>
                    </div>

                    <button type="submit" class="contact-submit-btn">Gửi Tin Nhắn <i class="fas fa-paper-plane"></i></button>
                </form>
            </div>

            <!-- Map Section -->
            <div class="contact-map-section contact-animate contact-delay-2">
                <h3 class="contact-section-subtitle">Vị Trí Của Chúng Tôi</h3>
                <div class="contact-map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.424758848881!2d106.7181263152608!3d10.771847261941992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f40a3b49e59%3A0xa1e14b0a8f6b2f6e!2sLandmark%2081!5e0!3m2!1svi!2s!4v1620000000000!5m2!1svi!2s" allowfullscreen="" loading="lazy"></iframe>
                    <div class="contact-map-overlay"></div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
