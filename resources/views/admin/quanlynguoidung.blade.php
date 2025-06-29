@extends('admin.app')

@section('admin.body')
    <div class="ausermanagement-main-content">
        <div class="ausermanagement-header">
            <div class="ausermanagement-search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Tìm kiếm người dùng..." id="ausermanagement-searchInput" />
            </div>
            <div class="ausermanagement-user-profile">
                <div class="ausermanagement-notification-bell">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="ausermanagement-profile-avatar">QT</div>
            </div>
        </div>
        <h1 class="ausermanagement-page-title">Quản lý người dùng</h1>
        <p class="ausermanagement-page-subtitle">
            Quản lý tài khoản nhân viên và quyền truy cập
        </p>
        <div class="ausermanagement-filter-bar">
            <select class="ausermanagement-filter-select" id="ausermanagement-roleFilter">
                <option value="">Tất cả vai trò</option>
                <option value="Quản trị viên">Quản trị viên</option>
                <option value="Nhân viên">Nhân viên</option>
                <option value="Người chỉnh sửa">Người chỉnh sửa</option>
            </select>
            <select class="ausermanagement-filter-select" id="ausermanagement-statusFilter">
                <option value="">Tất cả trạng thái</option>
                <option value="active">Hoạt động</option>
                <option value="inactive">Không hoạt động</option>
            </select>
            <button class="ausermanagement-btn ausermanagement-btn-primary" id="ausermanagement-addUserBtn">
                Thêm người dùng
            </button>
        </div>
        <div class="ausermanagement-data-card">
            <table class="ausermanagement-data-table" id="ausermanagement-userTable">
                <thead>
                    <tr>
                        <th data-label="Mã người dùng">Mã người dùng</th>
                        <th data-label="Tên">Tên</th>
                        <th data-label="Email">Email</th>
                        <th data-label="Vai trò">Vai trò</th>
                        <th data-label="Trạng thái">Trạng thái</th>
                        <th data-label="Ngày tạo">Ngày tạo</th>
                        <th data-label="Hành động">Hành động</th>
                    </tr>
                </thead>
                <tbody id="ausermanagement-userTableBody">
                    <tr>
                        <td data-label="Mã người dùng">ND001</td>
                        <td data-label="Tên">Nguyễn Văn Quản</td>
                        <td data-label="Email">quan@fashionstore.com</td>
                        <td data-label="Vai trò">Quản trị viên</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-active">Hoạt động</span>
                        </td>
                        <td data-label="Ngày tạo">2025-01-10</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            123 Lê Lợi, Hà Nội
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data">
                                <div class="ausermanagement-activity-item">
                                    HD001|2025-01-11 08:00|Đăng nhập
                                </div>
                                <div class="ausermanagement-activity-item">
                                    HD002|2025-01-12 14:30|Chỉnh sửa sản phẩm
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND002</td>
                        <td data-label="Tên">Trần Thị Nhân</td>
                        <td data-label="Email">nhan@fashionstore.com</td>
                        <td data-label="Vai trò">Nhân viên</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-active">Hoạt động</span>
                        </td>
                        <td data-label="Ngày tạo">2025-02-15</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            456 Nguyễn Huệ, TP.HCM
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data">
                                <div class="ausermanagement-activity-item">
                                    HD003|2025-02-16 09:00|Đăng nhập
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND003</td>
                        <td data-label="Tên">Lê Văn Sửa</td>
                        <td data-label="Email">sua@fashionstore.com</td>
                        <td data-label="Vai trò">Người chỉnh sửa</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-inactive">Không hoạt
                                động</span>
                        </td>
                        <td data-label="Ngày tạo">2024-12-20</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            789 Trần Phú, Đà Nẵng
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data"></div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND004</td>
                        <td data-label="Tên">Phạm Thị Minh</td>
                        <td data-label="Email">minh@fashionstore.com</td>
                        <td data-label="Vai trò">Nhân viên</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-active">Hoạt động</span>
                        </td>
                        <td data-label="Ngày tạo">2025-03-05</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            101 Lý Thái Tổ, Hải Phòng
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data">
                                <div class="ausermanagement-activity-item">
                                    HD004|2025-03-06 10:00|Đăng nhập
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND005</td>
                        <td data-label="Tên">Hoàng Văn Hùng</td>
                        <td data-label="Email">hung@fashionstore.com</td>
                        <td data-label="Vai trò">Quản trị viên</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-active">Hoạt động</span>
                        </td>
                        <td data-label="Ngày tạo">2025-01-25</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            234 Hai Bà Trưng, Cần Thơ
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data">
                                <div class="ausermanagement-activity-item">
                                    HD005|2025-01-26 08:30|Đăng nhập
                                </div>
                                <div class="ausermanagement-activity-item">
                                    HD006|2025-01-27 15:00|Thêm sản phẩm
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND006</td>
                        <td data-label="Tên">Ngô Thị Lan</td>
                        <td data-label="Email">lan@fashionstore.com</td>
                        <td data-label="Vai trò">Người chỉnh sửa</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-inactive">Không hoạt
                                động</span>
                        </td>
                        <td data-label="Ngày tạo">2024-11-10</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            567 Nguyễn Trãi, Nha Trang
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data"></div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND007</td>
                        <td data-label="Tên">Đỗ Văn Nam</td>
                        <td data-label="Email">nam@fashionstore.com</td>
                        <td data-label="Vai trò">Nhân viên</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-active">Hoạt động</span>
                        </td>
                        <td data-label="Ngày tạo">2025-04-15</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            890 Phạm Văn Đồng, Huế
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data">
                                <div class="ausermanagement-activity-item">
                                    HD007|2025-04-16 09:00|Đăng nhập
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td data-label="Mã người dùng">ND008</td>
                        <td data-label="Tên">Vũ Thị Hoa</td>
                        <td data-label="Email">hoa@fashionstore.com</td>
                        <td data-label="Vai trò">Quản trị viên</td>
                        <td data-label="Trạng thái">
                            <span class="ausermanagement-status-badge ausermanagement-status-active">Hoạt động</span>
                        </td>
                        <td data-label="Ngày tạo">2025-05-20</td>
                        <td data-label="Hành động">
                            <button class="ausermanagement-btn ausermanagement-btn-primary ausermanagement-edit-btn"
                                data-tooltip="Sửa người dùng">
                                Sửa
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-secondary ausermanagement-view-btn"
                                data-tooltip="Xem chi tiết">
                                Xem
                            </button>
                            <button class="ausermanagement-btn ausermanagement-btn-danger ausermanagement-delete-btn"
                                data-tooltip="Xóa người dùng">
                                Xóa
                            </button>
                        </td>
                        <td style="display: none" data-label="Địa chỉ">
                            112 Lý Nam Đế, Vũng Tàu
                        </td>
                        <td style="display: none" data-label="Lịch sử hoạt động">
                            <div class="ausermanagement-activity-data">
                                <div class="ausermanagement-activity-item">
                                    HD008|2025-05-21 10:00|Đăng nhập
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="ausermanagement-pagination">
            <div class="ausermanagement-pagination-controls" id="ausermanagement-paginationControls"></div>
        </div>
    </div>
    </div>
    <div class="ausermanagement-modal" id="ausermanagement-editUserModal">
        <div class="ausermanagement-modal-content">
            <div class="ausermanagement-modal-header">
                <h2 class="ausermanagement-modal-title" id="ausermanagement-editModalTitle">
                    Thêm người dùng
                </h2>
                <span class="ausermanagement-modal-close" id="ausermanagement-editModalClose">×</span>
            </div>
            <div class="ausermanagement-modal-body">
                <div>
                    <label for="ausermanagement-userCode">Mã người dùng</label>
                    <input type="text" id="ausermanagement-userCode" placeholder="Nhập mã người dùng (VD: ND001)" />
                </div>
                <div>
                    <label>Tên người dùng</label>
                    <input type="text" id="ausermanagement-userName" placeholder="Nhập tên người dùng" />
                </div>
                <div>
                    <label>Email</label>
                    <input type="email" id="ausermanagement-userEmail" placeholder="Nhập email" />
                </div>
                <div>
                    <label>Vai trò</label>
                    <select id="ausermanagement-userRole">
                        <option value="Quản trị viên">Quản trị viên</option>
                        <option value="Nhân viên">Nhân viên</option>
                        <option value="Người chỉnh sửa">Người chỉnh sửa</option>
                    </select>
                </div>
                <div>
                    <label>Mật khẩu</label>
                    <input type="password" id="ausermanagement-userPassword" placeholder="Nhập mật khẩu" />
                </div>
                <div>
                    <label>Địa chỉ</label>
                    <input type="text" id="ausermanagement-userAddress" placeholder="Nhập địa chỉ" />
                </div>
                <div>
                    <label>Trạng thái</label>
                    <select id="ausermanagement-userStatus">
                        <option value="active">Hoạt động</option>
                        <option value="inactive">Không hoạt động</option>
                    </select>
                </div>
            </div>
            <div class="ausermanagement-modal-footer">
                <button class="ausermanagement-btn ausermanagement-btn-primary" id="ausermanagement-saveUserBtn">
                    Lưu
                </button>
                <button class="ausermanagement-btn ausermanagement-btn-secondary" id="ausermanagement-cancelUserBtn">
                    Hủy
                </button>
            </div>
        </div>
    </div>
    <div class="ausermanagement-modal" id="ausermanagement-viewUserModal">
        <div class="ausermanagement-modal-content">
            <div class="ausermanagement-modal-header">
                <h2 class="ausermanagement-modal-title">Chi tiết người dùng</h2>
                <span class="ausermanagement-modal-close" id="ausermanagement-viewModalClose">×</span>
            </div>
            <div class="ausermanagement-modal-body">
                <p>
                    <strong>Mã người dùng:</strong>
                    <span id="ausermanagement-viewUserCode"></span>
                </p>
                <p>
                    <strong>Tên:</strong>
                    <span id="ausermanagement-viewUserName"></span>
                </p>
                <p>
                    <strong>Email:</strong>
                    <span id="ausermanagement-viewUserEmail"></span>
                </p>
                <p>
                    <strong>Vai trò:</strong>
                    <span id="ausermanagement-viewUserRole"></span>
                </p>
                <p>
                    <strong>Trạng thái:</strong>
                    <span id="ausermanagement-viewUserStatus"></span>
                </p>
                <p>
                    <strong>Ngày tạo:</strong>
                    <span id="ausermanagement-viewUserCreated"></span>
                </p>
                <p>
                    <strong>Địa chỉ:</strong>
                    <span id="ausermanagement-viewUserAddress"></span>
                </p>
                <div class="ausermanagement-activity-history">
                    <h3>Lịch sử hoạt động</h3>
                    <table class="ausermanagement-activity-table">
                        <thead>
                            <tr>
                                <th>Mã hoạt động</th>
                                <th>Thời gian</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody id="ausermanagement-activityHistoryBody"></tbody>
                    </table>
                </div>
            </div>
            <div class="ausermanagement-modal-footer">
                <button class="ausermanagement-btn ausermanagement-btn-secondary" id="ausermanagement-closeViewBtn">
                    Đóng
                </button>
            </div>
        </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sidebar interaction
            const ausermanagementSidebarItems = document.querySelectorAll(
                ".ausermanagement-sidebar-item"
            );
            ausermanagementSidebarItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    ausermanagementSidebarItems.forEach((i) =>
                        i.classList.remove("ausermanagement-active")
                    );
                    this.classList.add("ausermanagement-active");
                });
            });

            // Edit modal handling
            const ausermanagementEditModal = document.getElementById(
                "ausermanagement-editUserModal"
            );
            const ausermanagementEditModalTitle = document.getElementById(
                "ausermanagement-editModalTitle"
            );
            const ausermanagementUserCodeInput = document.getElementById(
                "ausermanagement-userCode"
            );
            const ausermanagementUserNameInput = document.getElementById(
                "ausermanagement-userName"
            );
            const ausermanagementUserEmailInput = document.getElementById(
                "ausermanagement-userEmail"
            );
            const ausermanagementUserRoleSelect = document.getElementById(
                "ausermanagement-userRole"
            );
            const ausermanagementUserPasswordInput = document.getElementById(
                "ausermanagement-userPassword"
            );
            const ausermanagementUserAddressInput = document.getElementById(
                "ausermanagement-userAddress"
            );
            const ausermanagementUserStatusSelect = document.getElementById(
                "ausermanagement-userStatus"
            );
            const ausermanagementSaveUserBtn = document.getElementById(
                "ausermanagement-saveUserBtn"
            );
            const ausermanagementCancelUserBtn = document.getElementById(
                "ausermanagement-cancelUserBtn"
            );
            const ausermanagementEditModalClose = document.getElementById(
                "ausermanagement-editModalClose"
            );
            const ausermanagementAddUserBtn = document.getElementById(
                "ausermanagement-addUserBtn"
            );

            function ausermanagementOpenEditModal(mode, row = null) {
                ausermanagementEditModalTitle.textContent =
                    mode === "edit" ? "Sửa người dùng" : "Thêm người dùng";
                if (row) {
                    ausermanagementUserCodeInput.value = row.cells[0].textContent;
                    ausermanagementUserNameInput.value = row.cells[1].textContent;
                    ausermanagementUserEmailInput.value = row.cells[2].textContent;
                    ausermanagementUserRoleSelect.value = row.cells[3].textContent;
                    ausermanagementUserPasswordInput.value = "";
                    ausermanagementUserAddressInput.value = row.cells[7].textContent;
                    ausermanagementUserStatusSelect.value = row.cells[4]
                        .querySelector(".ausermanagement-status-badge")
                        .classList.contains("ausermanagement-status-active") ?
                        "active" :
                        "inactive";
                } else {
                    ausermanagementUserCodeInput.value = "";
                    ausermanagementUserNameInput.value = "";
                    ausermanagementUserEmailInput.value = "";
                    ausermanagementUserRoleSelect.value = "Nhân viên";
                    ausermanagementUserPasswordInput.value = "";
                    ausermanagementUserAddressInput.value = "";
                    ausermanagementUserStatusSelect.value = "active";
                }
                ausermanagementEditModal.style.display = "flex";
            }

            function ausermanagementCloseEditModal() {
                ausermanagementEditModal.style.display = "none";
            }

            ausermanagementAddUserBtn.addEventListener("click", () =>
                ausermanagementOpenEditModal("add")
            );
            ausermanagementCancelUserBtn.addEventListener(
                "click",
                ausermanagementCloseEditModal
            );
            ausermanagementEditModalClose.addEventListener(
                "click",
                ausermanagementCloseEditModal
            );
            ausermanagementSaveUserBtn.addEventListener("click", () => {
                alert("Chức năng lưu chỉ là demo, không lưu thực tế.");
                ausermanagementCloseEditModal();
            });

            // View modal handling
            const ausermanagementViewModal = document.getElementById(
                "ausermanagement-viewUserModal"
            );
            const ausermanagementViewUserCode = document.getElementById(
                "ausermanagement-viewUserCode"
            );
            const ausermanagementViewUserName = document.getElementById(
                "ausermanagement-viewUserName"
            );
            const ausermanagementViewUserEmail = document.getElementById(
                "ausermanagement-viewUserEmail"
            );
            const ausermanagementViewUserRole = document.getElementById(
                "ausermanagement-viewUserRole"
            );
            const ausermanagementViewUserStatus = document.getElementById(
                "ausermanagement-viewUserStatus"
            );
            const ausermanagementViewUserCreated = document.getElementById(
                "ausermanagement-viewUserCreated"
            );
            const ausermanagementViewUserAddress = document.getElementById(
                "ausermanagement-viewUserAddress"
            );
            const ausermanagementActivityHistoryBody = document.getElementById(
                "ausermanagement-activityHistoryBody"
            );
            const ausermanagementCloseViewBtn = document.getElementById(
                "ausermanagement-closeViewBtn"
            );
            const ausermanagementViewModalClose = document.getElementById(
                "ausermanagement-viewModalClose"
            );

            function ausermanagementOpenViewModal(row) {
                ausermanagementViewUserCode.textContent = row.cells[0].textContent;
                ausermanagementViewUserName.textContent = row.cells[1].textContent;
                ausermanagementViewUserEmail.textContent = row.cells[2].textContent;
                ausermanagementViewUserRole.textContent = row.cells[3].textContent;
                ausermanagementViewUserStatus.textContent = row.cells[4].textContent;
                ausermanagementViewUserCreated.textContent = row.cells[5].textContent;
                ausermanagementViewUserAddress.textContent = row.cells[7].textContent;

                const activityData = row.cells[8].querySelector(
                    ".ausermanagement-activity-data"
                );
                const activities = activityData ?
                    Array.from(
                        activityData.querySelectorAll(".ausermanagement-activity-item")
                    ).map((item) => {
                        const [id, time, action] = item.textContent.split("|");
                        return {
                            id,
                            time,
                            action
                        };
                    }) :
                    [];

                ausermanagementActivityHistoryBody.innerHTML =
                    activities.length > 0 ?
                    activities
                    .map(
                        (activity) => `
                    <tr>
                        <td>${activity.id}</td>
                        <td>${activity.time}</td>
                        <td>${activity.action}</td>
                    </tr>
                `
                    )
                    .join("") :
                    '<tr><td colspan="3">Không có hoạt động nào</td></tr>';

                ausermanagementViewModal.style.display = "flex";
            }

            function ausermanagementCloseViewModal() {
                ausermanagementViewModal.style.display = "none";
            }

            ausermanagementCloseViewBtn.addEventListener(
                "click",
                ausermanagementCloseViewModal
            );
            ausermanagementViewModalClose.addEventListener(
                "click",
                ausermanagementCloseViewModal
            );

            // Pagination
            const ausermanagementItemsPerPage = 5;
            let ausermanagementCurrentPage = 1;
            const ausermanagementUserTableBody = document.getElementById(
                "ausermanagement-userTableBody"
            );
            const ausermanagementRows = Array.from(
                ausermanagementUserTableBody.querySelectorAll("tr")
            );

            function ausermanagementRenderTable(filteredRows) {
                const start =
                    (ausermanagementCurrentPage - 1) * ausermanagementItemsPerPage;
                const end = start + ausermanagementItemsPerPage;
                ausermanagementRows.forEach((row, index) => {
                    row.style.display =
                        filteredRows.includes(row) && index >= start && index < end ?
                        "" :
                        "none";
                });
                ausermanagementRenderPagination(filteredRows.length);
            }

            function ausermanagementRenderPagination(totalItems) {
                const totalPages = Math.ceil(
                    totalItems / ausermanagementItemsPerPage
                );
                const ausermanagementPaginationControls = document.getElementById(
                    "ausermanagement-paginationControls"
                );
                ausermanagementPaginationControls.innerHTML = Array.from({
                        length: totalPages
                    },
                    (_, i) => `
                    <button class="ausermanagement-pagination-btn ${
                      ausermanagementCurrentPage === i + 1
                        ? "ausermanagement-active"
                        : ""
                    }">${i + 1}</button>
                `
                ).join("");
                document
                    .querySelectorAll(".ausermanagement-pagination-btn")
                    .forEach((btn, index) => {
                        btn.addEventListener("click", () => {
                            ausermanagementCurrentPage = index + 1;
                            ausermanagementRenderTable(ausermanagementApplyFilters());
                        });
                    });
            }

            // Search and filter
            const ausermanagementSearchInput = document.getElementById(
                "ausermanagement-searchInput"
            );
            const ausermanagementRoleFilter = document.getElementById(
                "ausermanagement-roleFilter"
            );
            const ausermanagementStatusFilter = document.getElementById(
                "ausermanagement-statusFilter"
            );

            function ausermanagementApplyFilters() {
                const searchTerm = ausermanagementSearchInput.value.toLowerCase();
                const role = ausermanagementRoleFilter.value;
                const status = ausermanagementStatusFilter.value;

                return ausermanagementRows.filter((row) => {
                    const name = row.cells[1].textContent.toLowerCase();
                    const email = row.cells[2].textContent.toLowerCase();
                    const rowRole = row.cells[3].textContent;
                    const rowStatus = row.cells[4]
                        .querySelector(".ausermanagement-status-badge")
                        .classList.contains("ausermanagement-status-active") ?
                        "active" :
                        "inactive";
                    const searchMatch =
                        name.includes(searchTerm) || email.includes(searchTerm);
                    const roleMatch = !role || rowRole === role;
                    const statusMatch = !status || rowStatus === status;
                    return searchMatch && roleMatch && statusMatch;
                });
            }

            ausermanagementSearchInput.addEventListener("input", () => {
                ausermanagementCurrentPage = 1;
                ausermanagementRenderTable(ausermanagementApplyFilters());
            });

            ausermanagementRoleFilter.addEventListener("change", () => {
                ausermanagementCurrentPage = 1;
                ausermanagementRenderTable(ausermanagementApplyFilters());
            });

            ausermanagementStatusFilter.addEventListener("change", () => {
                ausermanagementCurrentPage = 1;
                ausermanagementRenderTable(ausermanagementApplyFilters());
            });

            // Table actions
            ausermanagementUserTableBody.addEventListener("click", (e) => {
                const row = e.target.closest("tr");
                if (!row) return;

                if (e.target.classList.contains("ausermanagement-edit-btn")) {
                    ausermanagementOpenEditModal("edit", row);
                } else if (e.target.classList.contains("ausermanagement-view-btn")) {
                    ausermanagementOpenViewModal(row);
                } else if (
                    e.target.classList.contains("ausermanagement-delete-btn")
                ) {
                    alert("Chức năng xóa chỉ là demo, không xóa thực tế.");
                }
            });

            // Initial render
            ausermanagementRenderTable(ausermanagementRows);
        });
    </script>
@endsection
