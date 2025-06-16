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
                    <button class="user-info-edit-btn" data-section="address"><i class="fas fa-plus"></i> Thêm địa chỉ</button>
                </div>
                <div class="user-info-section-content">
                    <div class="user-info-address-list" id="user-info-address-list">
                        <div class="user-info-address-item" data-address-id="1">
                            <span class="user-info-value">123 Đường ABC, Phường XYZ, Quận 1, TP.Hồ Chí Minh</span>
                            <div class="user-info-address-actions">
                                <button class="user-info-address-edit-btn" data-address-id="1"><i class="fas fa-edit"></i> Sửa</button>
                                <button class="user-info-address-delete-btn" data-address-id="1"><i class="fas fa-trash"></i> Xóa</button>
                            </div>
                        </div>
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
            <button class="user-info-close-btn" aria-label="Close">×</button>
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
                        <input type="hidden" id="user-info-edit-address-id" name="address_id">
                    </div>
                </div>

                <div class="user-info-form-actions">
                    <button type="button" class="user-info-cancel-btn">Hủy</button>
                    <button type="button" class="user-info-add-address-btn" id="user-info-add-address-btn">Thêm địa chỉ mới</button>
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
            const addAddressBtn = document.getElementById('user-info-add-address-btn');
            const personalFields = document.getElementById('user-info-personal-fields');
            const addressFields = document.getElementById('user-info-address-fields');
            const addressEditButtons = document.querySelectorAll('.user-info-address-edit-btn');

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

            // Edit buttons click handler (for section headers)
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
                        addAddressBtn.style.display = 'none';
                    } else if (section === 'address') {
                        addressFields.style.display = 'block';
                        document.querySelector('.user-info-modal-title').textContent = 'Thêm địa chỉ mới';
                        addAddressBtn.style.display = 'none';
                    }

                    showModal();
                });
            });

            // Address edit buttons click handler
            addressEditButtons.forEach(button => {
                button.addEventListener('click', function() {
                    personalFields.style.display = 'none';
                    addressFields.style.display = 'block';
                    document.querySelector('.user-info-modal-title').textContent = 'Chỉnh sửa địa chỉ';
                    addAddressBtn.style.display = 'inline-flex';
                    showModal();
                });
            });

            // Add new address button
            addAddressBtn.addEventListener('click', function() {
                addressFields.style.display = 'block';
                document.querySelector('.user-info-modal-title').textContent = 'Thêm địa chỉ mới';
                addAddressBtn.style.display = 'none';
                showModal();
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
        });
    </script>
@endsection
