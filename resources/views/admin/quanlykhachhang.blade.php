@extends('admin.app')

@section('admin.body')
        <div class="acustomermanagement-main-content">
            <div class="acustomermanagement-header">
                <div class="acustomermanagement-search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Tìm kiếm khách hàng..." id="acustomermanagement-searchInput" />
                </div>
                <div class="acustomermanagement-user-profile">
                    <div class="acustomermanagement-notification-bell">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="acustomermanagement-profile-avatar">QT</div>
                </div>
            </div>
            <h1 class="acustomermanagement-page-title">Quản lý khách hàng</h1>
            <p class="acustomermanagement-page-subtitle">
                Xem và quản lý thông tin khách hàng
            </p>
            <div class="acustomermanagement-filter-bar">
                <select class="acustomermanagement-filter-select" id="acustomermanagement-statusFilter">
                    <option value="">Tất cả trạng thái</option>
                    <option value="active">Hoạt động</option>
                    <option value="inactive">Không hoạt động</option>
                </select>
                <button class="acustomermanagement-btn acustomermanagement-btn-primary"
                    id="acustomermanagement-addCustomerBtn">
                    Thêm khách hàng
                </button>
            </div>
            <div class="acustomermanagement-data-card">
                <table class="acustomermanagement-data-table" id="acustomermanagement-customerTable">
                    <thead>
                        <tr>
                            <th data-label="Mã khách hàng">Mã khách hàng</th>
                            <th data-label="Tên">Tên</th>
                            <th data-label="Email">Email</th>
                            <th data-label="Số điện thoại">Số điện thoại</th>
                            <th data-label="Tổng chi tiêu">Tổng chi tiêu</th>
                            <th data-label="Trạng thái">Trạng thái</th>
                            <th data-label="Ngày đăng ký">Ngày đăng ký</th>
                            <th data-label="Hành động">Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="acustomermanagement-customerTableBody">
                        <tr>
                            <td data-label="Mã khách hàng">KH001</td>
                            <td data-label="Tên">Nguyễn Văn A</td>
                            <td data-label="Email">vana@example.com</td>
                            <td data-label="Số điện thoại">0901234567</td>
                            <td data-label="Tổng chi tiêu">2.500.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-active">Hoạt
                                    động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2025-01-15</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                123 Đường Láng, Đống Đa, Hà Nội
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data">
                                    <div class="acustomermanagement-order-item">
                                        DH001|2025-01-20|1.500.000đ|Hoàn thành
                                    </div>
                                    <div class="acustomermanagement-order-item">
                                        DH002|2025-02-05|1.000.000đ|Đang giao
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH002</td>
                            <td data-label="Tên">Trần Thị B</td>
                            <td data-label="Email">thib@example.com</td>
                            <td data-label="Số điện thoại">0912345678</td>
                            <td data-label="Tổng chi tiêu">1.800.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-active">Hoạt
                                    động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2025-02-10</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                456 Lê Văn Sỹ, Quận 3, TP.HCM
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data">
                                    <div class="acustomermanagement-order-item">
                                        DH003|2025-02-15|1.800.000đ|Hoàn thành
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH003</td>
                            <td data-label="Tên">Lê Văn C</td>
                            <td data-label="Email">vanc@example.com</td>
                            <td data-label="Số điện thoại">0923456789</td>
                            <td data-label="Tổng chi tiêu">3.200.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-inactive">Không
                                    hoạt động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2024-12-20</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                789 Trần Hưng Đạo, Hải Phòng
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data"></div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH004</td>
                            <td data-label="Tên">Phạm Thị D</td>
                            <td data-label="Email">thid@example.com</td>
                            <td data-label="Số điện thoại">0934567890</td>
                            <td data-label="Tổng chi tiêu">900.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-active">Hoạt
                                    động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2025-03-05</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                101 Nguyễn Trãi, Đà Nẵng
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data">
                                    <div class="acustomermanagement-order-item">
                                        DH004|2025-03-10|900.000đ|Hoàn thành
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH005</td>
                            <td data-label="Tên">Hoàng Văn E</td>
                            <td data-label="Email">vane@example.com</td>
                            <td data-label="Số điện thoại">0945678901</td>
                            <td data-label="Tổng chi tiêu">4.000.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-active">Hoạt
                                    động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2025-01-30</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                234 Lý Thái Tổ, Cần Thơ
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data">
                                    <div class="acustomermanagement-order-item">
                                        DH005|2025-02-01|2.000.000đ|Hoàn thành
                                    </div>
                                    <div class="acustomermanagement-order-item">
                                        DH006|2025-02-20|2.000.000đ|Hoàn thành
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH006</td>
                            <td data-label="Tên">Ngô Thị F</td>
                            <td data-label="Email">thif@example.com</td>
                            <td data-label="Số điện thoại">0956789012</td>
                            <td data-label="Tổng chi tiêu">1.200.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-inactive">Không
                                    hoạt động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2024-11-15</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                567 Hai Bà Trưng, Nha Trang
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data"></div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH007</td>
                            <td data-label="Tên">Đỗ Văn G</td>
                            <td data-label="Email">vang@example.com</td>
                            <td data-label="Số điện thoại">0967890123</td>
                            <td data-label="Tổng chi tiêu">2.800.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-active">Hoạt
                                    động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2025-04-10</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                890 Phạm Văn Đồng, Huế
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data">
                                    <div class="acustomermanagement-order-item">
                                        DH007|2025-04-15|2.800.000đ|Hoàn thành
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-label="Mã khách hàng">KH008</td>
                            <td data-label="Tên">Vũ Thị H</td>
                            <td data-label="Email">thih@example.com</td>
                            <td data-label="Số điện thoại">0978901234</td>
                            <td data-label="Tổng chi tiêu">600.000đ</td>
                            <td data-label="Trạng thái">
                                <span class="acustomermanagement-status-badge acustomermanagement-status-active">Hoạt
                                    động</span>
                            </td>
                            <td data-label="Ngày đăng ký">2025-05-20</td>
                            <td data-label="Hành động">
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-primary acustomermanagement-edit-btn"
                                    data-tooltip="Chỉnh sửa khách hàng">
                                    Chỉnh sửa
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-secondary acustomermanagement-view-btn"
                                    data-tooltip="Xem chi tiết khách hàng">
                                    Xem
                                </button>
                                <button
                                    class="acustomermanagement-btn acustomermanagement-btn-danger acustomermanagement-delete-btn"
                                    data-tooltip="Xóa khách hàng">
                                    Xóa
                                </button>
                            </td>
                            <td style="display: none" data-label="Địa chỉ">
                                112 Nguyễn Huệ, Vũng Tàu
                            </td>
                            <td style="display: none" data-label="Lịch sử mua hàng">
                                <div class="acustomermanagement-order-data">
                                    <div class="acustomermanagement-order-item">
                                        DH008|2025-05-25|600.000đ|Đang giao
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="acustomermanagement-pagination">
                <div class="acustomermanagement-pagination-controls" id="acustomermanagement-paginationControls"></div>
            </div>
        </div>
    </div>
    <div class="acustomermanagement-modal" id="acustomermanagement-editCustomerModal">
        <div class="acustomermanagement-modal-content">
            <div class="acustomermanagement-modal-header">
                <h2 class="acustomermanagement-modal-title" id="acustomermanagement-editModalTitle">
                    Thêm khách hàng
                </h2>
                <span class="acustomermanagement-modal-close" id="acustomermanagement-editModalClose">×</span>
            </div>
            <div class="acustomermanagement-modal-body">
                <div>
                    <label for="acustomermanagement-customerCode">Mã khách hàng</label>
                    <input type="text" id="acustomermanagement-customerCode"
                        placeholder="Nhập mã khách hàng (VD: KH001)" />
                </div>
                <div>
                    <label for="acustomermanagement-customerName">Tên khách hàng</label>
                    <input type="text" id="acustomermanagement-customerName" placeholder="Nhập tên khách hàng" />
                </div>
                <div>
                    <label for="acustomermanagement-customerEmail">Email</label>
                    <input type="email" id="acustomermanagement-customerEmail" placeholder="Nhập email" />
                </div>
                <div>
                    <label for="acustomermanagement-customerPhone">Số điện thoại</label>
                    <input type="text" id="acustomermanagement-customerPhone" placeholder="Nhập số điện thoại" />
                </div>
                <div>
                    <label for="acustomermanagement-customerAddress">Địa chỉ</label>
                    <input type="text" id="acustomermanagement-customerAddress" placeholder="Nhập địa chỉ" />
                </div>
                <div>
                    <label for="acustomermanagement-customerStatus">Trạng thái</label>
                    <select id="acustomermanagement-customerStatus">
                        <option value="active">Hoạt động</option>
                        <option value="inactive">Không hoạt động</option>
                    </select>
                </div>
            </div>
            <div class="acustomermanagement-modal-footer">
                <button class="acustomermanagement-btn acustomermanagement-btn-primary"
                    id="acustomermanagement-saveCustomerBtn">
                    Lưu
                </button>
                <button class="acustomermanagement-btn acustomermanagement-btn-secondary"
                    id="acustomermanagement-cancelCustomerBtn">
                    Hủy
                </button>
            </div>
        </div>
    </div>
    <div class="acustomermanagement-modal" id="acustomermanagement-viewCustomerModal">
        <div class="acustomermanagement-modal-content">
            <div class="acustomermanagement-modal-header">
                <h2 class="acustomermanagement-modal-title">Chi tiết khách hàng</h2>
                <span class="acustomermanagement-modal-close" id="acustomermanagement-viewModalClose">×</span>
            </div>
            <div class="acustomermanagement-modal-body">
                <p>
                    <strong>Mã khách hàng:</strong>
                    <span id="acustomermanagement-viewCustomerCode"></span>
                </p>
                <p>
                    <strong>Tên:</strong>
                    <span id="acustomermanagement-viewCustomerName"></span>
                </p>
                <p>
                    <strong>Email:</strong>
                    <span id="acustomermanagement-viewCustomerEmail"></span>
                </p>
                <p>
                    <strong>Số điện thoại:</strong>
                    <span id="acustomermanagement-viewCustomerPhone"></span>
                </p>
                <p>
                    <strong>Địa chỉ:</strong>
                    <span id="acustomermanagement-viewCustomerAddress"></span>
                </p>
                <p>
                    <strong>Tổng chi tiêu:</strong>
                    <span id="acustomermanagement-viewCustomerSpending"></span>
                </p>
                <p>
                    <strong>Trạng thái:</strong>
                    <span id="acustomermanagement-viewCustomerStatus"></span>
                </p>
                <p>
                    <strong>Ngày đăng ký:</strong>
                    <span id="acustomermanagement-viewCustomerRegistered"></span>
                </p>
                <div class="acustomermanagement-order-history">
                    <h3>Lịch sử mua hàng</h3>
                    <table class="acustomermanagement-order-table">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Trạng thái</th>
                            </tr>
                        </thead>
                        <tbody id="acustomermanagement-orderHistoryBody"></tbody>
                    </table>
                </div>
            </div>
            <div class="acustomermanagement-modal-footer">
                <button class="acustomermanagement-btn acustomermanagement-btn-secondary"
                    id="acustomermanagement-closeViewBtn">
                    Đóng
                </button>
            </div>
        </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sidebar interaction
            const acustomermanagementSidebarItems = document.querySelectorAll(
                ".acustomermanagement-sidebar-item"
            );
            acustomermanagementSidebarItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    acustomermanagementSidebarItems.forEach((i) =>
                        i.classList.remove("acustomermanagement-active")
                    );
                    this.classList.add("acustomermanagement-active");
                });
            });

            // Edit modal handling
            const acustomermanagementEditModal = document.getElementById(
                "acustomermanagement-editCustomerModal"
            );
            const acustomermanagementEditModalTitle = document.getElementById(
                "acustomermanagement-editModalTitle"
            );
            const acustomermanagementCustomerCodeInput = document.getElementById(
                "acustomermanagement-customerCode"
            );
            const acustomermanagementCustomerNameInput = document.getElementById(
                "acustomermanagement-customerName"
            );
            const acustomermanagementCustomerEmailInput = document.getElementById(
                "acustomermanagement-customerEmail"
            );
            const acustomermanagementCustomerPhoneInput = document.getElementById(
                "acustomermanagement-customerPhone"
            );
            const acustomermanagementCustomerAddressInput = document.getElementById(
                "acustomermanagement-customerAddress"
            );
            const acustomermanagementCustomerStatusSelect = document.getElementById(
                "acustomermanagement-customerStatus"
            );
            const acustomermanagementSaveCustomerBtn = document.getElementById(
                "acustomermanagement-saveCustomerBtn"
            );
            const acustomermanagementCancelCustomerBtn = document.getElementById(
                "acustomermanagement-cancelCustomerBtn"
            );
            const acustomermanagementEditModalClose = document.getElementById(
                "acustomermanagement-editModalClose"
            );
            const acustomermanagementAddCustomerBtn = document.getElementById(
                "acustomermanagement-addCustomerBtn"
            );

            function acustomermanagementOpenEditModal(mode, row = null) {
                acustomermanagementEditModalTitle.textContent =
                    mode === "edit" ? "Chỉnh sửa khách hàng" : "Thêm khách hàng";
                if (row) {
                    acustomermanagementCustomerCodeInput.value =
                        row.cells[0].textContent;
                    acustomermanagementCustomerNameInput.value =
                        row.cells[1].textContent;
                    acustomermanagementCustomerEmailInput.value =
                        row.cells[2].textContent;
                    acustomermanagementCustomerPhoneInput.value =
                        row.cells[3].textContent;
                    acustomermanagementCustomerAddressInput.value =
                        row.cells[8].textContent;
                    acustomermanagementCustomerStatusSelect.value = row.cells[5]
                        .querySelector(".acustomermanagement-status-badge")
                        .classList.contains("acustomermanagement-status-active") ?
                        "active" :
                        "inactive";
                } else {
                    acustomermanagementCustomerCodeInput.value = "";
                    acustomermanagementCustomerNameInput.value = "";
                    acustomermanagementCustomerEmailInput.value = "";
                    acustomermanagementCustomerPhoneInput.value = "";
                    acustomermanagementCustomerAddressInput.value = "";
                    acustomermanagementCustomerStatusSelect.value = "active";
                }
                acustomermanagementEditModal.style.display = "flex";
            }

            function acustomermanagementCloseEditModal() {
                acustomermanagementEditModal.style.display = "none";
            }

            acustomermanagementAddCustomerBtn.addEventListener("click", () =>
                acustomermanagementOpenEditModal("add")
            );
            acustomermanagementCancelCustomerBtn.addEventListener(
                "click",
                acustomermanagementCloseEditModal
            );
            acustomermanagementEditModalClose.addEventListener(
                "click",
                acustomermanagementCloseEditModal
            );
            acustomermanagementSaveCustomerBtn.addEventListener("click", () => {
                alert("Chức năng lưu chỉ là demo, không lưu thực tế.");
                acustomermanagementCloseEditModal();
            });

            // View modal handling
            const acustomermanagementViewModal = document.getElementById(
                "acustomermanagement-viewCustomerModal"
            );
            const acustomermanagementViewCustomerCode = document.getElementById(
                "acustomermanagement-viewCustomerCode"
            );
            const acustomermanagementViewCustomerName = document.getElementById(
                "acustomermanagement-viewCustomerName"
            );
            const acustomermanagementViewCustomerEmail = document.getElementById(
                "acustomermanagement-viewCustomerEmail"
            );
            const acustomermanagementViewCustomerPhone = document.getElementById(
                "acustomermanagement-viewCustomerPhone"
            );
            const acustomermanagementViewCustomerAddress = document.getElementById(
                "acustomermanagement-viewCustomerAddress"
            );
            const acustomermanagementViewCustomerSpending = document.getElementById(
                "acustomermanagement-viewCustomerSpending"
            );
            const acustomermanagementViewCustomerStatus = document.getElementById(
                "acustomermanagement-viewCustomerStatus"
            );
            const acustomermanagementViewCustomerRegistered =
                document.getElementById("acustomermanagement-viewCustomerRegistered");
            const acustomermanagementOrderHistoryBody = document.getElementById(
                "acustomermanagement-orderHistoryBody"
            );
            const acustomermanagementCloseViewBtn = document.getElementById(
                "acustomermanagement-closeViewBtn"
            );
            const acustomermanagementViewModalClose = document.getElementById(
                "acustomermanagement-viewModalClose"
            );

            function acustomermanagementOpenViewModal(row) {
                acustomermanagementViewCustomerCode.textContent =
                    row.cells[0].textContent;
                acustomermanagementViewCustomerName.textContent =
                    row.cells[1].textContent;
                acustomermanagementViewCustomerEmail.textContent =
                    row.cells[2].textContent;
                acustomermanagementViewCustomerPhone.textContent =
                    row.cells[3].textContent;
                acustomermanagementViewCustomerAddress.textContent =
                    row.cells[8].textContent;
                acustomermanagementViewCustomerSpending.textContent =
                    row.cells[4].textContent;
                acustomermanagementViewCustomerStatus.textContent =
                    row.cells[5].textContent;
                acustomermanagementViewCustomerRegistered.textContent =
                    row.cells[6].textContent;

                const orderData = row.cells[9].querySelector(
                    ".acustomermanagement-order-data"
                );
                const orders = orderData ?
                    Array.from(
                        orderData.querySelectorAll(".acustomermanagement-order-item")
                    ).map((item) => {
                        const [id, date, total, status] = item.textContent.split("|");
                        return {
                            id,
                            date,
                            total,
                            status
                        };
                    }) :
                    [];

                acustomermanagementOrderHistoryBody.innerHTML =
                    orders.length > 0 ?
                    orders
                    .map(
                        (order) => `
                    <tr>
                        <td>${order.id}</td>
                        <td>${order.date}</td>
                        <td>${order.total}</td>
                        <td>${order.status}</td>
                    </tr>
                `
                    )
                    .join("") :
                    '<tr><td colspan="4">Không có đơn hàng nào</td></tr>';

                acustomermanagementViewModal.style.display = "flex";
            }

            function acustomermanagementCloseViewModal() {
                acustomermanagementViewModal.style.display = "none";
            }

            acustomermanagementCloseViewBtn.addEventListener(
                "click",
                acustomermanagementCloseViewModal
            );
            acustomermanagementViewModalClose.addEventListener(
                "click",
                acustomermanagementCloseViewModal
            );

            // Pagination
            const acustomermanagementItemsPerPage = 5;
            let acustomermanagementCurrentPage = 1;
            const acustomermanagementCustomerTableBody = document.getElementById(
                "acustomermanagement-customerTableBody"
            );
            const acustomermanagementRows = Array.from(
                acustomermanagementCustomerTableBody.querySelectorAll("tr")
            );

            function acustomermanagementRenderTable(filteredRows) {
                const start =
                    (acustomermanagementCurrentPage - 1) *
                    acustomermanagementItemsPerPage;
                const end = start + acustomermanagementItemsPerPage;
                acustomermanagementRows.forEach((row, index) => {
                    row.style.display =
                        filteredRows.includes(row) && index >= start && index < end ?
                        "" :
                        "none";
                });
                acustomermanagementRenderPagination(filteredRows.length);
            }

            function acustomermanagementRenderPagination(totalItems) {
                const totalPages = Math.ceil(
                    totalItems / acustomermanagementItemsPerPage
                );
                const paginationControls = document.getElementById(
                    "acustomermanagement-paginationControls"
                );
                paginationControls.innerHTML = Array.from({
                        length: totalPages
                    },
                    (_, i) => `
                    <button class="acustomermanagement-pagination-btn ${
                      acustomermanagementCurrentPage === i + 1
                        ? "acustomermanagement-active"
                        : ""
                    }">${i + 1}</button>
                `
                ).join("");
                document
                    .querySelectorAll(".acustomermanagement-pagination-btn")
                    .forEach((btn, index) => {
                        btn.addEventListener("click", () => {
                            acustomermanagementCurrentPage = index + 1;
                            acustomermanagementRenderTable(
                                acustomermanagementApplyFilters()
                            );
                        });
                    });
            }

            // Search and filter
            const acustomermanagementSearchInput = document.getElementById(
                "acustomermanagement-searchInput"
            );
            const acustomermanagementStatusFilter = document.getElementById(
                "acustomermanagement-statusFilter"
            );

            function acustomermanagementApplyFilters() {
                const searchTerm = acustomermanagementSearchInput.value.toLowerCase();
                const status = acustomermanagementStatusFilter.value;

                return acustomermanagementRows.filter((row) => {
                    const name = row.cells[1].textContent.toLowerCase();
                    const email = row.cells[2].textContent.toLowerCase();
                    const rowStatus = row.cells[5]
                        .querySelector(".acustomermanagement-status-badge")
                        .classList.contains("acustomermanagement-status-active") ?
                        "active" :
                        "inactive";
                    const searchMatch =
                        name.includes(searchTerm) || email.includes(searchTerm);
                    const statusMatch = !status || rowStatus === status;
                    return searchMatch && statusMatch;
                });
            }

            acustomermanagementSearchInput.addEventListener("input", () => {
                acustomermanagementCurrentPage = 1;
                acustomermanagementRenderTable(acustomermanagementApplyFilters());
            });

            acustomermanagementStatusFilter.addEventListener("change", () => {
                acustomermanagementCurrentPage = 1;
                acustomermanagementRenderTable(acustomermanagementApplyFilters());
            });

            // Table actions
            acustomermanagementCustomerTableBody.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                if (!row) return;

                if (e.target.classList.contains("acustomermanagement-edit-btn")) {
                    acustomermanagementOpenEditModal("edit", row);
                } else if (
                    e.target.classList.contains("acustomermanagement-view-btn")
                ) {
                    acustomermanagementOpenViewModal(row);
                } else if (
                    e.target.classList.contains("acustomermanagement-delete-btn")
                ) {
                    alert("Chức năng xóa chỉ là demo, không xóa thực tế.");
                }
            });

            // Initial render
            acustomermanagementRenderTable(acustomermanagementRows);
        });
    </script>
@endsection
