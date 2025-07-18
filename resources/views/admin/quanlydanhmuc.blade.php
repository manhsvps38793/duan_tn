@extends('admin.app')

@section('admin.body')
    <style>
        /* CSS cho các trạng thái */
        .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
        }

        .status-active {
            background-color: #e6f7ee;
            color: #10b759;
            border: 1px solid #10b759;
        }

        .status-expired {
            background-color: #feeceb;
            color: #f04438;
            border: 1px solid #f04438;
        }

        .status-upcoming {
            background-color: #fff8e6;
            color: #f79009;
            border: 1px solid #f79009;
        }
    </style>
    <div class="apromotions-main-content">
        <div class="apromotions-header">
            <div class="apromotions-user-profile">
                <div class="apromotions-profile-avatar">QT</div>
            </div>
        </div>
        <h1 class="apromotions-page-title">Quản lý danh mục sản phẩm</h1>
        <div class="apromotions-actions-container">
            <button class="apromotions-btn apromotions-btn-primary"
                onclick="document.getElementById('createModal').style.display='flex'">
                Tạo khuyến mãi
            </button>
        </div>
        <table class="apromotions-promotion-table">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên</th>
                    <th>Đường dẫn</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    {{-- xử lý cột hành động --}}
                    {{-- @php
                        $now = now();
                        if ($now->lt($voucher->start_date)) {
                            $voucher->status = 'Chưa bắt đầu';
                        } elseif ($now->between($voucher->start_date, $voucher->expiration_date)) {
                            $voucher->status = 'Đang chạy';
                        } else {
                            $voucher->status = 'Đã kết thúc';
                        }
                    @endphp --}}


                    <tr>
                        <td>
                            <img src="{{ asset('img/categories/' . $category->image) }}" alt="Hình ảnh"
                                style="width: 70px; height: 70px; object-fit: cover; border-radius: 6px;">
                        </td>
                        <td>{{ $category->name }}</td>

                        <td class="status-cell">{{ $category->slug }}</td>
                        <td class="actions">
                            <button class="apromotions-btn apromotions-btn-primary btn-edit" data-id="{{ $category->id }}"
                                data-name="{{ $category->name }}" data-image="{{ $category->image }}">
                                <i class="fas fa-edit"></i> Sửa
                            </button>



                            <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST"
                                onsubmit="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="apromotions-btn apromotions-btn-danger delete-btn"
                                    data-id="1">
                                    <i class="fas fa-trash"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Phân trang --}}
        <div class="products-pagination" id="products-pagination">
            @for ($i = 1; $i <= $categories->lastPage(); $i++)
                <a href="{{ $categories->url($i) }}"
                    class="products-pagination-btn {{ $categories->currentPage() == $i ? 'adnews-active' : '' }}">
                    {{ $i }}
                </a>
            @endfor
        </div>

    </div>




    <!-- Popup Edit cho từng voucher -->
    <div class="apromotions-modal" id="editModal">
    <div class="apromotions-modal-content">
        <span class="apromotions-modal-close" onclick="document.getElementById('editModal').style.display='none'">×</span>
        <h2>Chỉnh sửa danh mục</h2>
        <form id="editForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="apromotions-form-group">
                <label>Tên danh mục</label>
                <input type="text" id="edit-name" name="name" required>
            </div>

            <div class="apromotions-form-group">
                <label>Hình ảnh mới (nếu có)</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <div class="apromotions-modal-actions">
                <button type="submit" class="apromotions-btn apromotions-btn-primary">Lưu</button>
                <button type="button" class="apromotions-btn apromotions-btn-secondary" onclick="document.getElementById('editModal').style.display='none'">Hủy</button>
            </div>
        </form>
    </div>
</div>




    <!-- Popup Create -->
    <div class="apromotions-modal" id="createModal">
        <div class="apromotions-modal-content">
            <span class="apromotions-modal-close"
                onclick="document.getElementById('createModal').style.display='none'">×</span>
            <h2>Tạo khuyến mãi mới</h2>
            <form method="POST" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data"
                onsubmit="return validateForm(this)">
                @csrf
                <div class="apromotions-form-group">
                    <label>Tên danh mục</label>
                    <input type="text" name="name" required>
                </div>
                <div class="apromotions-form-group">
                    <label>Hình ảnh</label>
                    <input type="file" name="image" accept="image/*" required />
                </div>

                <div class="apromotions-modal-actions">
                    <button type="submit" class="apromotions-btn apromotions-btn-primary">Tạo</button>
                    <button type="button" class="apromotions-btn apromotions-btn-secondary"
                        onclick="document.getElementById('createModal').style.display='none'">
                        Hủy
                    </button>
                </div>
            </form>
        </div>
    </div>



    <script>
    const editButtons = document.querySelectorAll('.btn-edit');
    const editModal = document.getElementById('editModal');
    const editForm = document.getElementById('editForm');
    // const editNameInput = document.getElementById('edit-name');

    editButtons.forEach(button => {
        button.addEventListener('click', function () {
            const id = this.dataset.id;
            const name = this.dataset.name;
            const image = this.dataset.image;

            // Gán dữ liệu vào form sửa
            editForm.action = `/admin/categories/${id}`;
            // editNameInput.value = name;
            document.getElementById('edit-name').value = name;


            editModal.style.display = 'flex';
        });
    });


        function closeEditModal() {
            editModal.style.display = 'none';
        }

        // Hàm validate dùng chung
        // function validateForm(form) {
        //     const code = form.code.value.trim();
        //     const discount = form.discount_amount.value;
        //     const type = form.value_type.value;
        //     const startDate = form.start_date.value;
        //     const endDate = form.expiration_date.value;
        //     const quantity = form.quantity.value;

        //     if (!code) {
        //         alert('Vui lòng nhập mã khuyến mãi');
        //         return false;
        //     }

        //     if (!discount || isNaN(discount) || parseFloat(discount) <= 0) {
        //         alert('Giá trị giảm giá phải là số dương');
        //         return false;
        //     }

        //     if (type === 'percentage' && parseFloat(discount) > 100) {
        //         alert('Giảm giá theo phần trăm không được vượt quá 100%');
        //         return false;
        //     }

        //     if (!startDate || !endDate) {
        //         alert('Vui lòng chọn ngày bắt đầu và kết thúc');
        //         return false;
        //     }

        //     if (new Date(endDate) < new Date(startDate)) {
        //         alert('Ngày kết thúc phải sau ngày bắt đầu');
        //         return false;
        //     }

        //     if (!quantity || parseInt(quantity) <= 0) {
        //         alert('Số lượng phải lớn hơn 0');
        //         return false;
        //     }

        //     return true;
        // }
    </script>
@endsection
