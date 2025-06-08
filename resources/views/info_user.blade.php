
@extends('app')

@section('body')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
                            <span class="user-info-value" id="user-info-fullname-value">{{ $user->name }}</span>
                        </div>
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-envelope"></i> Email:</span>
                            <span class="user-info-value" id="user-info-email-value">{{ $user->email }}</span>
                        </div>
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-phone"></i> Số điện thoại:</span>
                            <span class="user-info-value" id="user-info-phone-value">{{ $user->phone ?? 'Chưa cập nhật' }}</span>
                        </div>
                        <div class="user-info-row">
                            <span class="user-info-label"><i class="fas fa-birthday-cake"></i> Ngày sinh:</span>
                            <span class="user-info-value" id="user-info-birthday-value">{{ $user->birthday ? \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') : 'Chưa cập nhật' }}</span>
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
                        <span class="user-info-value" id="user-info-address-value">{{ $user->address ?? 'Chưa cập nhật' }}</span>
                    </div>
                </div>
            </section>

            <section class="user-info-profile-section user-info-orders-section">
                <div class="user-info-section-header">
                    <h2 class="user-info-section-title"><i class="fas fa-shopping-bag"></i> Đơn hàng gần đây</h2>
                </div>
                <div class="user-info-section-content">
                    <div class="user-info-orders-list">
                        @forelse ($orders as $order)
                            <div class="user-info-order-item">
                                <div class="user-info-order-header">
                                    <span class="user-info-order-id">#DH{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</span>
                                    <span class="user-info-order-date">{{ \Carbon\Carbon::parse($order->created_at)->format('d/m/Y') }}</span>
                                    <span class="user-info-order-status user-info-order-status-{{ $order->status }}">
                                        {{ $order->status == 'delivered' ? 'Đã giao' : ($order->status == 'pending' ? 'Đang giao' : 'Đã hủy') }}
                                    </span>
                                </div>
                                <div class="user-info-order-details">
                                    <div class="user-info-order-products">
                                        {{ $order->items->map(fn($item) => "{$item->product_name} (x{$item->quantity})")->implode(', ') }}
                                    </div>
                                    <div class="user-info-order-total">
                                        {{ number_format($order->total_price, 0, ',', '.') }}₫
                                    </div>
                                </div>
                                <div class="user-info-order-actions">
                                    <a style="text-decoration: none" class="user-info-order-detail-btn" href="{{ route('user.order.details', $order->id) }}"><i class="fas fa-eye"></i> Xem chi tiết</a>
                                </div>
                            </div>
                        @empty
                            <p>Không có đơn hàng nào.</p>
                        @endforelse
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

                // Show relevant fields and fill values
                if (section === 'personal') {
                    personalFields.style.display = 'block';
                    document.querySelector('.user-info-modal-title').textContent = 'Chỉnh sửa thông tin cá nhân';

                    // Fill current values
                    document.getElementById('user-info-edit-fullname').value =
                        document.getElementById('user-info-fullname-value').textContent;
                    document.getElementById('user-info-edit-email').value =
                        document.getElementById('user-info-email-value').textContent;
                    document.getElementById('user-info-edit-phone').value =
                        document.getElementById('user-info-phone-value').textContent === 'Chưa cập nhật' ?
                        '' : document.getElementById('user-info-phone-value').textContent.replace(/\s/g, '');

                    // Format birthdate (dd/mm/yyyy to yyyy-mm-dd)
                    const birthdate = document.getElementById('user-info-birthday-value').textContent;
                    if (birthdate && birthdate !== 'Chưa cập nhật') {
                        const [day, month, year] = birthdate.split('/');
                        if (day && month && year) {
                            const formattedDate = `${year}-${month.padStart(2, '0')}-${day.padStart(2, '0')}`;
                            document.getElementById('user-info-edit-birthday').value = formattedDate;
                        }
                    } else {
                        document.getElementById('user-info-edit-birthday').value = '';
                    }
                } else if (section === 'address') {
                    addressFields.style.display = 'block';
                    document.querySelector('.user-info-modal-title').textContent = 'Chỉnh sửa địa chỉ';
                    document.getElementById('user-info-edit-address').value =
                        document.getElementById('user-info-address-value').textContent === 'Chưa cập nhật' ?
                        '' : document.getElementById('user-info-address-value').textContent;
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

            // Collect form data
            const formData = new FormData();
            if (personalFields.style.display === 'block') {
                formData.append('fullname', document.getElementById('user-info-edit-fullname').value);
                formData.append('email', document.getElementById('user-info-edit-email').value);
                formData.append('phone', document.getElementById('user-info-edit-phone').value);
                const birthday = document.getElementById('user-info-edit-birthday').value;
                if (birthday) {
                    formData.append('birthday', birthday);
                } else {
                    formData.append('birthday', '');
                }
            } else if (addressFields.style.display === 'block') {
                formData.append('address', document.getElementById('user-info-edit-address').value);
            }

            console.log('FormData:', Array.from(formData.entries()));

            // Send AJAX request to update user info
            fetch('/user/update-info', {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Accept': 'application/json',
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Reset button state
                btnText.textContent = 'Lưu thay đổi';
                spinner.style.display = 'none';
                saveBtn.disabled = false;

                console.log('Response:', data);

                if (data.success) {
                    // Update UI
                    if (personalFields.style.display === 'block') {
                        document.getElementById('user-info-fullname-value').textContent =
                            document.getElementById('user-info-edit-fullname').value;
                        document.getElementById('user-info-email-value').textContent =
                            document.getElementById('user-info-edit-email').value;
                        document.getElementById('user-info-phone-value').textContent =
                            document.getElementById('user-info-edit-phone').value ?
                            document.getElementById('user-info-edit-phone').value.replace(/(\d{3})(\d{3})(\d{3})/, '$1 $2 $3') : 'Chưa cập nhật';

                        const birthdate = document.getElementById('user-info-edit-birthday').value;
                        if (birthdate) {
                            const [year, month, day] = birthdate.split('-');
                            document.getElementById('user-info-birthday-value').textContent =
                                `${day}/${month}/${year}`;
                        } else {
                            document.getElementById('user-info-birthday-value').textContent = 'Chưa cập nhật';
                        }
                    } else if (addressFields.style.display === 'block') {
                        document.getElementById('user-info-address-value').textContent =
                            document.getElementById('user-info-edit-address').value || 'Chưa cập nhật';
                    }

                    // Hide modal and show success message
                    hideModal();
                    showToast(data.message, 'success');
                } else {
                    showToast(data.message || 'Cập nhật thất bại!', 'error');
                }
            })
            .catch(error => {
                // Reset button state
                btnText.textContent = 'Lưu thay đổi';
                spinner.style.display = 'none';
                saveBtn.disabled = false;
                console.error('Error:', error);
                showToast('Đã có lỗi xảy ra khi cập nhật thông tin!', 'error');
            });
        });

        // Order detail buttons
        orderDetailButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const orderId = this.closest('.user-info-order-item').querySelector('.user-info-order-id').textContent;
                window.location.href = this.getAttribute('href');
            });
        });
    });
</script>
@endsection
