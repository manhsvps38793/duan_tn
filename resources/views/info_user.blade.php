@extends('app')

@section('body')
 <div class="user-info-body">


    <div class="user-info-container">


        <div class="user-info-profile-content">
            <section class="user-info-profile-section">
                <div class="user-info-section-header">
                    <h2 class="user-info-section-title"><i class="fas fa-user-circle"></i> Thông tin cá nhân</h2>
                    <button class="user-info-edit-btn" data-section="personal"><i class="fas fa-edit"></i> Chỉnh sửa</button>
                </div>
                <div class="user-info-section-content">
                    <div class="user-info-grid">
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-user"></i> Họ và tên:</span>
                            <span class="user-info-value" id="user-info-fullname-value">Nguyễn Văn A</span>
                        </div>
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-envelope"></i> Email:</span>
                            <span class="user-info-value" id="user-info-email-value">nguyenvana@example.com</span>
                        </div>
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-phone"></i> Số điện thoại:</span>
                            <span class="user-info-value" id="user-info-phone-value">0987 654 321</span>
                        </div>
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-birthday-cake"></i> Ngày sinh:</span>
                            <span class="user-info-value" id="user-info-birthday-value">01/01/1990</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="user-info-profile-section">
                <div class="user-info-section-header">
                    <h2 class="user-info-section-title"><i class="fas fa-map-marker-alt"></i> Địa chỉ</h2>
                    <button class="user-info-edit-btn" data-section="address"><i class="fas fa-edit"></i> Chỉnh sửa</button>
                </div>
                <div class="user-info-section-content">
                    <div class="user-info-row">
                        <span class="user-info-label"><i class="fas fa-home"></i> Địa chỉ:</span>
                        <span class="user-info-value" id="user-info-address-value">123 Đường ABC, Phường XYZ, Quận 1, TP.Hồ Chí Minh</span>
                    </div>
                </div>
            </section>

            <section class="user-info-profile-section user-info-orders-section">
                <div class="user-info-section-header">
                    <h2 class="user-info-section-title"><i class="fas fa-shopping-bag"></i> Đơn hàng gần đây</h2>
                </div>
                <div class="user-info-section-content">
                    <div class="user-info-orders-list">
                        <div class="user-info-order-item">
                            <div class="user-info-order-header">
                                <span class="user-info-order-id">#DH12345</span>
                                <span class="user-info-order-date">15/05/2023</span>
                                <span class="user-info-order-status user-info-order-status-delivered">Đã giao</span>
                            </div>
                            <div class="user-info-order-details">
                                <div class="user-info-order-products">
                                    Áo thun nam (x1), Quần jean (x2)
                                </div>
                                <div class="user-info-order-total">
                                    1,250,000₫
                                </div>
                            </div>
                            <div class="user-info-order-actions">
                                <a style="text-decoration: none" class="user-info-order-detail-btn" href="info-ctdh"><i class="fas fa-eye"></i> Xem chi tiết</a>
                            </div>
                        </div>

                        <div class="user-info-order-item">
                            <div class="user-info-order-header">
                                <span class="user-info-order-id">#DH12344</span>
                                <span class="user-info-order-date">10/05/2023</span>
                                <span class="user-info-order-status user-info-order-status-shipping">Đang giao</span>
                            </div>
                            <div class="user-info-order-details">
                                <div class="user-info-order-products">
                                    Giày thể thao (x1), Tất (x3)
                                </div>
                                <div class="user-info-order-total">
                                    850,000₫
                                </div>
                            </div>
                            <div class="user-info-order-actions">
                                <a style="text-decoration: none" class="user-info-order-detail-btn" href="info-ctdh"><i class="fas fa-eye"></i> Xem chi tiết</a>
                            </div>
                        </div>

                        <div class="user-info-order-item">
                            <div class="user-info-order-header">
                                <span class="user-info-order-id">#DH12340</span>
                                <span class="user-info-order-date">05/05/2023</span>
                                <span class="user-info-order-status user-info-order-status-cancelled">Đã hủy</span>
                            </div>
                            <div class="user-info-order-details">
                                <div class="user-info-order-products">
                                    Ba lô du lịch (x1), Mũ lưỡi trai (x2)
                                </div>
                                <div class="user-info-order-total">
                                    620,000₫
                                </div>
                            </div>
                            <div class="user-info-order-actions">
                                <a style="text-decoration: none" class="user-info-order-detail-btn" href="info-ctdh"><i class="fas fa-eye"></i> Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="user-info-modal" id="user-info-edit-modal">
        <div class="user-info-modal-content">
            <button class="user-info-close-btn" aria-label="Close">&times;</button>
            <h2 class="user-info-modal-title">Chỉnh sửa thông tin</h2>
            <form id="user-info-edit-form">
                <div class="user-info-form-group" id="user-info-personal-fields" style="display: none;">
                    <div class="user-info-input-group">
                        <label for="user-info-edit-fullname" class="user-info-input-label">Họ và tên:</label>
                        <input type="text" id="user-info-edit-fullname" name="fullname" placeholder="Nhập họ và tên" class="user-info-input">
                    </div>
                    <div class="user-info-input-group">
                        <label for="user-info-edit-email" class="user-info-input-label">Email:</label>
                        <input type="email" id="user-info-edit-email" name="email" placeholder="Nhập địa chỉ email" class="user-info-input">
                    </div>
                    <div class="user-info-input-group">
                        <label for="user-info-edit-phone" class="user-info-input-label">Số điện thoại:</label>
                        <input type="tel" id="user-info-edit-phone" name="phone" placeholder="Nhập số điện thoại" class="user-info-input">
                    </div>
                    <div class="user-info-input-group">
                        <label for="user-info-edit-birthday" class="user-info-input-label">Ngày sinh:</label>
                        <input type="date" id="user-info-edit-birthday" name="birthday" class="user-info-input">
                    </div>
                </div>

                <div class="user-info-form-group" id="user-info-address-fields" style="display: none;">
                    <div class="user-info-input-group">
                        <label for="user-info-edit-address" class="user-info-input-label">Địa chỉ:</label>
                        <textarea id="user-info-edit-address" name="address" rows="3" placeholder="Nhập địa chỉ của bạn" class="user-info-textarea"></textarea>
                    </div>
                </div>

                <div class="user-info-form-actions">
                    <button type="button" class="user-info-cancel-btn">Hủy</button>
                    <button type="submit" class="user-info-save-btn">
                        <span class="user-info-btn-text">Lưu thay đổi</span>
                        <span class="user-info-spinner" style="display: none;"></span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Toast Notification -->
    <div class="user-info-toast" id="user-info-toast">
        <i class="fas fa-check-circle user-info-toast-icon"></i>
        <span class="user-info-toast-message">Cập nhật thông tin thành công!</span>
    </div>
 </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // DOM Elements
            const editButtons = document.querySelectorAll('.user-info-edit-btn');
            const modal = document.getElementById('user-info-edit-modal');
            const closeBtn = document.querySelector('.user-info-close-btn');
            const cancelBtn = document.querySelector('.user-info-cancel-btn');
            const editForm = document.getElementById('user-info-edit-form');
            const saveBtn = editForm.querySelector('.user-info-save-btn');
            const personalFields = document.getElementById('user-info-personal-fields');
            const addressFields = document.getElementById('user-info-address-fields');
            const toast = document.getElementById('user-info-toast');
            const orderDetailButtons = document.querySelectorAll('.user-info-order-detail-btn');
            const editAvatarBtn = document.querySelector('.user-info-edit-avatar-btn');

            // Show modal function
            function showModal() {
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';
            }

            // Hide modal function
            function hideModal() {
                modal.classList.remove('show');
                document.body.style.overflow = '';
            }

            // Show toast notification
            function showToast(message, type = 'success') {
                const toastMessage = toast.querySelector('.user-info-toast-message');

                toastMessage.textContent = message;
                toast.className = 'user-info-toast';
                toast.classList.add(type, 'show');

                // Change icon based on type
                const toastIcon = toast.querySelector('.user-info-toast-icon');
                if (type === 'success') {
                    toastIcon.className = 'fas fa-check-circle user-info-toast-icon';
                } else if (type === 'error') {
                    toastIcon.className = 'fas fa-exclamation-circle user-info-toast-icon';
                }

                // Hide after 3 seconds
                setTimeout(() => {
                    toast.classList.remove('show');
                }, 3000);
            }

            // Edit buttons click handler
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const section = this.getAttribute('data-section');

                    // Hide all fields first
                    personalFields.style.display = 'none';
                    addressFields.style.display = 'none';

                    // Show relevant fields
                    if (section === 'personal') {
                        personalFields.style.display = 'block';
                        document.querySelector('.user-info-modal-title').textContent = 'Chỉnh sửa thông tin cá nhân';

                        // Fill current values
                        document.getElementById('user-info-edit-fullname').value =
                            document.getElementById('user-info-fullname-value').textContent;
                        document.getElementById('user-info-edit-email').value =
                            document.getElementById('user-info-email-value').textContent;
                        document.getElementById('user-info-edit-phone').value =
                            document.getElementById('user-info-phone-value').textContent.replace(/\s/g, '');

                        // Format birthdate (dd/mm/yyyy to yyyy-mm-dd)
                        const birthdate = document.getElementById('user-info-birthday-value').textContent;
                        if (birthdate) {
                            const [day, month, year] = birthdate.split('/');
                            if (day && month && year) {
                                document.getElementById('user-info-edit-birthday').value =
                                    `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;
                            }
                        }
                    } else if (section === 'address') {
                        addressFields.style.display = 'block';
                        document.querySelector('.user-info-modal-title').textContent = 'Chỉnh sửa địa chỉ';
                        document.getElementById('user-info-edit-address').value =
                            document.getElementById('user-info-address-value').textContent;
                    }

                    showModal();
                });
            });

            // Close modal handlers
            closeBtn.addEventListener('click', hideModal);
            cancelBtn.addEventListener('click', hideModal);

            // Close modal when clicking outside
            window.addEventListener('click', function(event) {
                if (event.target === modal) {
                    hideModal();
                }
            });

            // Form submission handler
            editForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Show loading state
                const btnText = saveBtn.querySelector('.user-info-btn-text');
                const spinner = saveBtn.querySelector('.user-info-spinner');
                btnText.textContent = 'Đang lưu...';
                spinner.style.display = 'inline-block';
                saveBtn.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    // Check which section we're editing
                    if (personalFields.style.display === 'block') {
                        // Update personal info
                        document.getElementById('user-info-fullname-value').textContent =
                            document.getElementById('user-info-edit-fullname').value;
                        document.getElementById('user-info-email-value').textContent =
                            document.getElementById('user-info-edit-email').value;
                        document.getElementById('user-info-phone-value').textContent =
                            document.getElementById('user-info-edit-phone').value.replace(/(\d{3})(\d{3})(\d{3})/, '$1 $2 $3');

                        // Format birthdate (yyyy-mm-dd to dd/mm/yyyy)
                        const birthdate = document.getElementById('user-info-edit-birthday').value;
                        if (birthdate) {
                            const [year, month, day] = birthdate.split('-');
                            document.getElementById('user-info-birthday-value').textContent =
                                `${day}/${month}/${year}`;
                        }
                    } else if (addressFields.style.display === 'block') {
                        // Update address
                        document.getElementById('user-info-address-value').textContent =
                            document.getElementById('user-info-edit-address').value;
                    }

                    // Hide modal and show success message
                    hideModal();
                    showToast('Cập nhật thông tin thành công!', 'success');

                    // Reset button state
                    btnText.textContent = 'Lưu thay đổi';
                    spinner.style.display = 'none';
                    saveBtn.disabled = false;
                }, 1500);
            });

            // Order detail buttons
            orderDetailButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const orderId = this.closest('.user-info-order-item').querySelector('.user-info-order-id').textContent;
                    showToast(`Đang mở chi tiết đơn hàng ${orderId}`, 'success');
                });
            });

            // Edit avatar button
            editAvatarBtn.addEventListener('click', function() {
                showToast('Tính năng thay đổi avatar sẽ sớm ra mắt!', 'success');
            });
        });
    </script>
@endsection
