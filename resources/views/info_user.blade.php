@extends('app')

@section('body')
    <div class="user-info-body">
        <div class="user-info-container">
            <div class="user-info-profile-content">
                <section class="user-info-profile-section">
                    <div class="user-info-section-header">
                        <h2 class="user-info-section-title"><i class="fas fa-user-circle"></i> Thông tin cá nhân</h2>
                        <button class="user-info-edit-btn" data-modal="personal"><i class="fas fa-edit"></i> Chỉnh sửa</button>
                    </div>
                    <div class="user-info-section-content">
                        <div class="user-info-grid">
                            <div class="user-info-row">
                                <span class="user-info-label"><i class="fas fa-user"></i> Họ và tên:</span>
                                <span class="user-info-value">{{ $user->name ?? 'Chưa cập nhật' }}</span>
                            </div>
                            <div class="user-info-row">
                                <span class="user-info-label"><i class="fas fa-envelope"></i> Email:</span>
                                <span class="user-info-value">{{ $user->email ?? 'Chưa cập nhật' }}</span>
                            </div>
                            <div class="user-info-row">
                                <span class="user-info-label"><i class="fas fa-phone"></i> Số điện thoại:</span>
                                <span class="user-info-value">0{{ $user->phone ?? 'Chưa cập nhật' }}</span>
                            </div>
                            <div class="user-info-row">
                                <span class="user-info-label"><i class="fas fa-lock"></i> Mật khẩu:</span>
                                <button class="user-info-password-btn" data-modal="password">Đổi mật khẩu</button>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="user-info-profile-section">
                    <div class="user-info-section-header">
                        <h2 class="user-info-section-title"><i class="fas fa-map-marker-alt"></i> Địa chỉ</h2>
                        <button class="user-info-edit-btn" data-modal="address"><i class="fas fa-plus"></i> Thêm địa
                            chỉ</button>
                    </div>
                    <div class="user-info-section-content">
                        @foreach ($addresses as $addresses)
                            <div class="user-info-address-list">
                                <div class="user-info-address-item" data-address-id="1">
                                    <span class="user-info-value">{{ $addresses->address ?? 'Chưa cập nhật' }} /
                                        {{ $addresses->ward ?? 'Chưa cập nhật' }} /
                                        {{ $addresses->district ?? 'Chưa cập nhật' }} <br>
                                        {{ $addresses->province ?? 'Chưa cập nhật' }}</span>
                                    <div class="user-info-address-actions">
                                        <button class="user-info-address-edit-btn" data-modal="address"><i
                                                class="fas fa-edit"></i> Sửa</button>
                                        <button class="user-info-address-delete-btn"><i class="fas fa-trash"></i>
                                            Xóa</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                                    <a class="user-info-order-detail-btn" href="order-details.html"><i
                                            class="fas fa-eye"></i> Xem chi tiết</a>
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
                                    <a class="user-info-order-detail-btn" href="order-details.html"><i
                                            class="fas fa-eye"></i> Xem chi tiết</a>
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
                                    <a class="user-info-order-detail-btn" href="order-details.html"><i
                                            class="fas fa-eye"></i> Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <!-- Edit Personal Info Modal -->
        <div class="user-info-modal" id="user-info-personal-modal">
            <div class="user-info-modal-content">
                <button class="user-info-close-btn" aria-label="Đóng">×</button>
                <h2 class="user-info-modal-title">Chỉnh sửa thông tin cá nhân</h2>
                <form action="{{ '/suainfo/' . $user->id }}" method="post" id="personal-form">
                    @csrf
                    <div class="user-info-form-group">
                        <div class="user-info-input-group">
                            <label for="personal-fullname" class="user-info-input-label">Họ và tên:</label>
                            <input type="text" id="personal-fullname" name="fullname"
                                placeholder="{{ $user->name ?? 'Chưa cập nhật' }}" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="personal-email" class="user-info-input-label">Email:</label>
                            <input type="email" id="personal-email" name="email"
                                placeholder="{{ $user->email ?? 'Chưa cập nhật' }}" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="personal-phone" class="user-info-input-label">Số điện thoại:</label>
                            <input type="tel" id="personal-phone" name="phone"
                                placeholder="0{{ $user->phone ?? 'Chưa cập nhật' }}" class="user-info-input">
                        </div>
                    </div>
                    <div class="user-info-form-actions">
                        <button type="button" class="user-info-cancel-btn" data-modal="personal">Hủy</button>
                        <button type="submit" class="user-info-save-btn">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Change Password Modal -->
        <div class="user-info-modal" id="user-info-password-modal">
            <div class="user-info-modal-content">
                <button class="user-info-close-btn" aria-label="Đóng">×</button>
                <h2 class="user-info-modal-title">Đổi mật khẩu</h2>
                <form action="{{ url('/mkinfo/' . $user->id) }}" method="POST" id="password-form">
                    @csrf

                    <div class="user-info-form-group">

                        {{-- Mật khẩu cũ --}}
                        <div class="user-info-input-group">
                            <label for="old-password" class="user-info-input-label">Mật khẩu cũ:</label>
                            <input type="password" id="old-password" name="old_password" placeholder="Nhập mật khẩu cũ"
                                class="user-info-input" required>
                            @error('old_password')
                                <div class="error-message" style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Mật khẩu mới --}}
                        <div class="user-info-input-group">
                            <label for="new-password" class="user-info-input-label">Mật khẩu mới:</label>
                            <input type="password" id="new-password" name="password" placeholder="Nhập mật khẩu mới"
                                class="user-info-input">
                            @error('password')
                                <div class="error-message" style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- Xác nhận mật khẩu mới --}}
                        <div class="user-info-input-group">
                            <label for="password_confirmation" class="user-info-input-label">Xác nhận mật khẩu
                                mới:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                placeholder="Nhập lại mật khẩu mới" class="user-info-input">
                        </div>

                    </div>

                    <div class="user-info-form-actions">
                        <button type="button" class="user-info-cancel-btn" data-modal="password">Hủy</button>
                        <button type="submit" class="user-info-save-btn">Lưu thay đổi</button>
                    </div>
                </form>

            </div>
        </div>

        <!-- Edit Address Modal -->
        <div class="user-info-modal" id="user-info-address-modal">
            <div class="user-info-modal-content">
                <button class="user-info-close-btn" aria-label="Đóng">×</button>
                <h2 class="user-info-modal-title">Thêm/Chỉnh sửa địa chỉ</h2>
                <form id="address-form">
                    <div class="user-info-form-group">
                        <div class="user-info-input-group">
                            <label for="address-street" class="user-info-input-label">Địa chỉ:</label>
                            <input type="text" id="address-street" name="address"
                                placeholder="Nhập số nhà, tên đường" class="user-info-input">
                            <input type="hidden" id="address-id" name="address_id">
                        </div>
                        <div class="user-info-input-group">
                            <label for="address-ward" class="user-info-input-label">Thôn/Phường:</label>
                            <input type="text" id="address-ward" name="ward" placeholder="Nhập thôn/phường"
                                class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="address-district" class="user-info-input-label">Huyện/Quận:</label>
                            <input type="text" id="address-district" name="district" placeholder="Nhập huyện/quận"
                                class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="address-province" class="user-info-input-label">Tỉnh/Thành phố:</label>
                            <input type="text" id="address-province" name="province"
                                placeholder="Nhập tỉnh/thành phố" class="user-info-input">
                        </div>
                    </div>
                    <div class="user-info-form-actions">
                        <button type="button" class="user-info-cancel-btn" data-modal="address">Hủy</button>
                        <button type="submit" class="user-info-save-btn">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Helper functions
            const showModal = (modalId) => {
                const modal = document.getElementById(`user-info-${modalId}-modal`);
                if (modal) {
                    modal.classList.add('show');
                    document.body.style.overflow = 'hidden';
                }
            };

            const hideModal = (modalId) => {
                const modal = document.getElementById(`user-info-${modalId}-modal`);
                if (modal) {
                    modal.classList.remove('show');
                    document.body.style.overflow = '';
                }
            };

            // Event listeners for opening modals
            document.querySelectorAll('[data-modal]').forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.dataset.modal;
                    showModal(modalId);
                });
            });

            // Event listeners for closing modals
            document.querySelectorAll('.user-info-close-btn, .user-info-cancel-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.dataset.modal || button.closest('.user-info-modal').id
                        .replace('user-info-', '').replace('-modal', '');
                    hideModal(modalId);
                });
            });

            // Close modal when clicking outside
            document.querySelectorAll('.user-info-modal').forEach(modal => {
                modal.addEventListener('click', (event) => {
                    if (event.target === modal) {
                        const modalId = modal.id.replace('user-info-', '').replace('-modal', '');
                        hideModal(modalId);
                    }
                });
            });
        });
    </script>
@endsection
