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
                        <button class="user-info-edit-btn" data-modal="add-address"><i class="fas fa-plus"></i> Thêm địa
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
                                        <button class="user-info-address-edit-btn" data-modal="edit-address"
                                            data-id="{{ $addresses->id }}" data-address="{{ $addresses->address }}"
                                            data-ward="{{ $addresses->ward }}" data-district="{{ $addresses->district }}"
                                            data-province="{{ $addresses->province }}"
                                            data-is_default="{{ $addresses->is_default }}">
                                            <i class="fas fa-edit"></i> Sửa
                                        </button>
                                        <a href="{{ '/xoaaddress/' . $addresses->id }}"
                                            class="user-info-address-delete-btn"><i class="fas fa-trash"></i>
                                            Xóa</a>
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
                            @foreach ($order as $order)
                                <div class="user-info-order-item">
                                    <div class="user-info-order-header">
                                        <span class="user-info-order-id">#{{ $order->id }}MAG</span>
                                        <span class="user-info-order-date">{{ $order->updated_at->format('d-m-Y') }}</span>
                                        @php
                                            $statusColors = [
                                                'Chờ xác nhận' => 'gray',
                                                'Đã xác nhận' => 'blue',
                                                'Đang giao hàng' => 'orange',
                                                'Thành công' => 'green',
                                                'Đã hủy' => 'red',
                                            ];

                                            $color = $statusColors[$order->status] ?? 'dark';
                                        @endphp
                                        <span class="user-info-order-status status-{{ $color }}">
                                            {{ $order->status }}
                                        </span>
                                    </div>
                                    <div class="user-info-order-details">
                                        <div class="user-info-order-products">
                                            {{ $order->orderDetails->pluck('productVariant.product.name')->join(', ') }}
                                        </div>
                                        <div class="user-info-order-total">
                                            {{ number_format($order->total_price, 0, ',', '.') }} đ
                                        </div>
                                    </div>
                                    <div class="user-info-order-actions">
                                        <a class="user-info-order-detail-btn" href="{{ '/info-ctdh/' . $order->id }}">
                                            <i class="fas fa-eye"></i> Xem chi tiết
                                        </a>
                                        @php
                                            $hideCancelButton = in_array($order->status, [
                                                'Đang giao hàng',
                                                'Thành công',
                                                'Đã hủy',
                                            ]);
                                        @endphp

                                        <a href="{{ '/huydon/' . $order->id }}"
                                            class="user-info-order-cancel-btn {{ $hideCancelButton ? 'an_huy' : '' }}">
                                            <i class="fas fa-times"></i> Hủy đơn hàng
                                        </a>
                                    </div>
                                </div>
                            @endforeach
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
                <form action="{{ '/mkinfo/' . $user->id }}" method="POST" id="password-form">
                    @csrf
                    <div class="user-info-form-group">
                        <div class="user-info-input-group">
                            <label for="old-password" class="user-info-input-label">Mật khẩu cũ:</label>
                            <input type="password" id="old-password" name="old_password" placeholder="Nhập mật khẩu cũ"
                                class="user-info-input" required>
                            @error('old_password')
                                <div class="error-message" style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="user-info-input-group">
                            <label for="new-password" class="user-info-input-label">Mật khẩu mới:</label>
                            <input type="password" id="new-password" name="password" placeholder="Nhập mật khẩu mới"
                                class="user-info-input">
                            @error('password')
                                <div class="error-message" style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
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

        <!-- Add Address Modal -->
        <div class="user-info-modal" id="user-info-add-address-modal">
            <div class="user-info-modal-content">
                <button class="user-info-close-btn" aria-label="Đóng">×</button>
                <h2 class="user-info-modal-title">Thêm địa chỉ</h2>
                <form action="{{ '/themaddress/' }}" method="POST" id="add-address-form">
                    @csrf
                    <div class="user-info-form-group">
                        <div class="user-info-input-group">
                            <label for="add-address-street" class="user-info-input-label">Địa chỉ:</label>
                            <input type="text" id="add-address-street" name="address"
                                placeholder="Nhập số nhà, tên đường" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="add-address-ward" class="user-info-input-label">Thôn/Phường:</label>
                            <input type="text" id="add-address-ward" name="ward" placeholder="Nhập thôn/phường"
                                class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="add-address-district" class="user-info-input-label">Huyện/Quận:</label>
                            <input type="text" id="add-address-district" name="district"
                                placeholder="Nhập huyện/quận" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="add-address-province" class="user-info-input-label">Tỉnh/Thành phố:</label>
                            <input type="text" id="add-address-province" name="province"
                                placeholder="Nhập tỉnh/thành phố" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label class="user-info-input-label">Loại địa chỉ:</label>
                            <select name="address_type" class="user-info-select edit-address-type">
                                <option value="1">Chính thức</option>
                                <option value="0">Phụ</option>
                            </select>
                        </div>
                    </div>
                    <div class="user-info-form-actions">
                        <button type="button" class="user-info-cancel-btn" data-modal="add-address">Hủy</button>
                        <button type="submit" class="user-info-save-btn">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Address Modal -->
        <div class="user-info-modal" id="user-info-edit-address-modal">
            <div class="user-info-modal-content">
                <button class="user-info-close-btn" aria-label="Đóng">×</button>
                <h2 class="user-info-modal-title">Chỉnh sửa địa chỉ</h2>
                <form action="{{ '/suaaddress/' }}" method="POST" id="edit-address-form">
                    @csrf
                    <div class="user-info-form-group">
                        <div class="user-info-input-group">
                            <label for="edit-address-street" class="user-info-input-label">Địa chỉ:</label>
                            <input type="text" id="edit-address-street" name="address"
                                placeholder="Nhập số nhà, tên đường" class="user-info-input">
                            <input type="hidden" id="edit-address-id" name="address_id">
                        </div>
                        <div class="user-info-input-group">
                            <label for="edit-address-ward" class="user-info-input-label">Thôn/Phường:</label>
                            <input type="text" id="edit-address-ward" name="ward" placeholder="Nhập thôn/phường"
                                class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="edit-address-district" class="user-info-input-label">Huyện/Quận:</label>
                            <input type="text" id="edit-address-district" name="district"
                                placeholder="Nhập huyện/quận" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <label for="edit-address-province" class="user-info-input-label">Tỉnh/Thành phố:</label>
                            <input type="text" id="edit-address-province" name="province"
                                placeholder="Nhập tỉnh/thành phố" class="user-info-input">
                        </div>
                        <div class="user-info-input-group">
                            <div class="user-info-input-group">
                                <label class="user-info-input-label">Loại địa chỉ:</label>
                                <select name="address_type" class="user-info-select edit-address-type">
                                    <option value="1">Chính thức</option>
                                    <option value="0">Phụ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="user-info-form-actions">
                        <button type="button" class="user-info-cancel-btn" data-modal="edit-address">Hủy</button>
                        <button type="submit" class="user-info-save-btn">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const body = document.body;

            const showModal = (modalId) => {
                const modal = document.getElementById(`user-info-${modalId}-modal`);
                if (modal) {
                    modal.classList.add('show');
                    body.style.overflow = 'hidden';
                }
            };

            const hideModal = (modalId) => {
                const modal = document.getElementById(`user-info-${modalId}-modal`);
                if (modal) {
                    modal.classList.remove('show');
                    body.style.overflow = '';
                }
            };

            // ✅ Mở modal chỉnh sửa thông tin cá nhân và mật khẩu
            document.querySelectorAll('.user-info-edit-btn[data-modal="personal"], .user-info-password-btn')
                .forEach(button => {
                    button.addEventListener('click', () => {
                        showModal(button.dataset.modal);
                    });
                });

            // ✅ Mở modal thêm địa chỉ mới
            const addAddressBtn = document.querySelector('.user-info-edit-btn[data-modal="add-address"]');
            if (addAddressBtn) {
                addAddressBtn.addEventListener('click', () => {
                    document.getElementById('add-address-street').value = '';
                    document.getElementById('add-address-ward').value = '';
                    document.getElementById('add-address-district').value = '';
                    document.getElementById('add-address-province').value = '';
                    showModal('add-address');
                });
            }

            // ✅ Mở modal sửa địa chỉ và đổ dữ liệu vào form
            document.querySelectorAll('.user-info-address-edit-btn').forEach(button => {
                button.addEventListener('click', () => {
                    document.getElementById('edit-address-id').value = button.dataset.id || '';
                    document.getElementById('edit-address-street').value = button.dataset.address ||
                        '';
                    document.getElementById('edit-address-ward').value = button.dataset.ward || '';
                    document.getElementById('edit-address-district').value = button.dataset
                        .district || '';
                    document.getElementById('edit-address-province').value = button.dataset
                        .province || '';

                    // ✅ Gán giá trị cho checkbox "Mặc định"
                    const isDefaultCheckbox = document.getElementById('edit-address-is_default');
                    if (isDefaultCheckbox) {
                        isDefaultCheckbox.checked = button.dataset.is_default == "1";
                    }

                    // ✅ Gán giá trị cho tất cả các select có class "edit-address-type"
                    document.querySelectorAll('.edit-address-type').forEach(select => {
                        select.value = button.dataset.is_default == "1" ? "1" : "0";
                    });

                    showModal('edit-address');
                });
            });

            // ✅ Đóng modal bằng nút "đóng" hoặc "hủy"
            document.querySelectorAll('.user-info-close-btn, .user-info-cancel-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const modalId = button.dataset.modal || button.closest('.user-info-modal').id
                        .replace('user-info-', '').replace('-modal', '');
                    hideModal(modalId);
                });
            });

            // ✅ Đóng modal khi click ra ngoài vùng modal
            document.querySelectorAll('.user-info-modal').forEach(modal => {
                modal.addEventListener('click', (event) => {
                    if (event.target === modal) {
                        const modalId = modal.id.replace('user-info-', '').replace('-modal', '');
                        hideModal(modalId);
                    }
                });
            });

            // ✅ Xóa địa chỉ (demo)
            document.querySelectorAll('.user-info-address-delete-btn').forEach(button => {
                button.addEventListener('click', () => {
                    const addressItem = button.closest('.user-info-address-item');
                    if (addressItem) {
                        addressItem.remove();
                        console.log('Address deleted');
                    }
                });
            });
        });
    </script>
@endsection
