@extends('admin.app')

@section('admin.body')
        <div class="aorders-main-content">
            <div class="aorders-header">
                <div class="aorders-search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" id="order-search" placeholder="Tìm kiếm mã đơn, khách hàng, trạng thái..." />
                </div>
                <div class="aorders-user-profile">
                    <div class="aorders-notification-bell">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="aorders-profile-avatar">QT</div>
                </div>
            </div>
            <h1 class="aorders-page-title">Quản lý đơn hàng</h1>
            <p class="aorders-page-subtitle">
                Theo dõi và xử lý các đơn hàng của cửa hàng
            </p>
            <div class="aorders-data-card">
                <table class="aorders-data-table">
                    <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Khách hàng</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="order-table-body">
                        <tr data-order-id="#DH-2456">
                            <td>#DH-2456</td>
                            <td>Nguyễn Văn A</td>
                            <td>750.000đ</td>
                            <td>2025-06-09</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đã giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2456', 'Đã giao', 'Nguyễn Văn A', '750.000đ', '2025-06-09')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2456')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                        <tr data-order-id="#DH-2455">
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>2025-06-08</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đang giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2455', 'Đang giao', 'Trần Thị B', '1.250.000đ', '2025-06-08')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2455')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                        <tr data-order-id="#DH-2455">
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>2025-06-08</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đang giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2455', 'Đang giao', 'Trần Thị B', '1.250.000đ', '2025-06-08')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2455')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                        <tr data-order-id="#DH-2455">
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>2025-06-08</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đang giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2455', 'Đang giao', 'Trần Thị B', '1.250.000đ', '2025-06-08')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2455')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                        <tr data-order-id="#DH-2455">
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>2025-06-08</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đang giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2455', 'Đang giao', 'Trần Thị B', '1.250.000đ', '2025-06-08')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2455')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                        <tr data-order-id="#DH-2455">
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>2025-06-08</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đang giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2455', 'Đang giao', 'Trần Thị B', '1.250.000đ', '2025-06-08')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2455')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                        <tr data-order-id="#DH-2455">
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>2025-06-08</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-active">Đang giao</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2455', 'Đang giao', 'Trần Thị B', '1.250.000đ', '2025-06-08')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2455')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>

                        <tr data-order-id="#DH-2454">
                            <td>#DH-2454</td>
                            <td>Lê Văn C</td>
                            <td>500.000đ</td>
                            <td>2025-06-07</td>
                            <td>
                                <span class="aorders-status-badge aorders-status-inactive">Đã hủy</span>
                            </td>
                            <td>
                                <button class="aorders-btn aorders-btn-edit"
                                    onclick="openEditModal('#DH-2454', 'Đã hủy', 'Lê Văn C', '500.000đ', '2025-06-07')">
                                    Sửa
                                </button>
                                <button class="aorders-btn aorders-btn-delete" onclick="deleteOrder('#DH-2454')">
                                    Xóa
                                </button>
                                <button class="aorders-btn aorders-btn-primary">
                                    Xem
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="aorders-pagination" id="pagination"></div>
            </div>
        </div>
    </div>
    <!-- Modal chỉnh sửa trạng thái -->
    <div class="aorders-modal" id="editOrderModal">
        <div class="aorders-modal-content">
            <div class="aorders-modal-header">
                <h2 class="aorders-modal-title">
                    Chỉnh sửa trạng thái đơn hàng
                </h2>
                <span class="aorders-modal-close" onclick="closeEditModal()">×</span>
            </div>
            <div class="aorders-modal-body">
                <p>
                    <strong>Mã đơn:</strong> <span id="modalOrderId"></span>
                </p>
                <p>
                    <strong>Khách hàng:</strong>
                    <span id="modalCustomer"></span>
                </p>
                <p>
                    <strong>Tổng tiền:</strong>
                    <span id="modalTotal"></span>
                </p>
                <p>
                    <strong>Ngày đặt:</strong> <span id="modalDate"></span>
                </p>
                <label for="orderStatus">Trạng thái:</label>
                <select id="orderStatus">
                    <option value="Đang giao">Đang giao</option>
                    <option value="Đã giao">Đã giao</option>
                    <option value="Đã hủy">Đã hủy</option>
                </select>
                <input type="hidden" id="orderId" />
            </div>
            <div class="aorders-modal-footer">
                <button class="aorders-btn aorders-btn-primary" onclick="saveOrderStatus()">
                    Lưu
                </button>
                <button class="aorders-btn" onclick="closeEditModal()">
                    Hủy
                </button>
            </div>
        </div>
    <!-- Toast thông báo -->
    <div class="aorders-toast" id="toast"></div>
    <script src="/js/app.js"></script>
    <!-- Đường dẫn JS cho Laravel -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Xử lý active sidebar
            const sidebarItems = document.querySelectorAll(
                ".aorders-sidebar-item"
            );
            sidebarItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    sidebarItems.forEach((i) =>
                        i.classList.remove("aorders-active")
                    );
                    this.classList.add("aorders-active");
                });
            });

            // Xử lý tìm kiếm
            const searchInput = document.querySelector("#order-search");
            const tableBody = document.querySelector("#order-table-body");
            let rows = tableBody.querySelectorAll("tr");

            searchInput.addEventListener("input", function() {
                const searchTerm = this.value.toLowerCase();
                rows = Array.from(tableBody.querySelectorAll("tr")).filter(
                    (row) => {
                        const orderId = row
                            .querySelector("td:nth-child(1)")
                            .textContent.toLowerCase();
                        const customer = row
                            .querySelector("td:nth-child(2)")
                            .textContent.toLowerCase();
                        const status = row
                            .querySelector("td:nth-child(5) span")
                            .textContent.toLowerCase();
                        return (
                            orderId.includes(searchTerm) ||
                            customer.includes(searchTerm) ||
                            status.includes(searchTerm)
                        );
                    }
                );
                renderPage();
                renderPagination();
            });

            // Xử lý phân trang
            const itemsPerPage = 6;
            let currentPage = 1;

            function renderPagination() {
                const totalPages = Math.ceil(rows.length / itemsPerPage);
                const pagination = document.getElementById("pagination");
                pagination.innerHTML = "";

                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement("button");
                    btn.className =
                        "aorders-pagination-btn" +
                        (i === currentPage ? " active" : "");
                    btn.textContent = i;
                    btn.addEventListener("click", () => {
                        currentPage = i;
                        renderPage();
                        document
                            .querySelectorAll(".aorders-pagination-btn")
                            .forEach((b) => b.classList.remove("active"));
                        btn.classList.add("active");
                    });
                    pagination.appendChild(btn);
                }
            }

            function renderPage() {
                rows.forEach((row, index) => {
                    const start = (currentPage - 1) * itemsPerPage;
                    const end = start + itemsPerPage;
                    row.style.display =
                        index >= start && index < end ? "" : "none";
                });
            }

            renderPagination();
            renderPage();

            // Xử lý modal
            window.openEditModal = function(
                orderId,
                currentStatus,
                customer,
                total,
                date
            ) {
                const modal = document.getElementById("editOrderModal");
                const statusSelect = document.getElementById("orderStatus");
                const orderIdInput = document.getElementById("orderId");
                document.getElementById("modalOrderId").textContent =
                    orderId;
                document.getElementById("modalCustomer").textContent =
                    customer;
                document.getElementById("modalTotal").textContent = total;
                document.getElementById("modalDate").textContent = date;
                orderIdInput.value = orderId;
                statusSelect.value = currentStatus;
                modal.classList.add("show");
            };

            window.closeEditModal = function() {
                const modal = document.getElementById("editOrderModal");
                modal.classList.remove("show");
            };

            window.saveOrderStatus = function() {
                const orderId = document.getElementById("orderId").value;
                const newStatus =
                    document.getElementById("orderStatus").value;
                const row = document.querySelector(
                    `tr[data-order-id="${orderId}"]`
                );
                const statusCell = row.querySelector(
                    "td:nth-child(5) span"
                );

                statusCell.textContent = newStatus;
                statusCell.className = "aorders-status-badge";
                statusCell.classList.add(
                    newStatus === "Đã hủy" ?
                    "aorders-status-inactive" :
                    "aorders-status-active"
                );

                showToast(
                    `<i class="fas fa-check-circle"></i> Cập nhật trạng thái thành công!`,
                    "success"
                );
                closeEditModal();

                // Gắn API call tới Laravel
                // fetch(`/orders/${orderId}/update`, {
                //     method: 'POST',
                //     headers: {
                //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                //         'Content-Type': 'application/json'
                //     },
                //     body: JSON.stringify({ status: newStatus })
                // });
            };

            // Xử lý xóa đơn hàng
            window.deleteOrder = function(orderId) {
                if (confirm("Bạn có chắc muốn xóa đơn hàng này?")) {
                    const row = document.querySelector(
                        `tr[data-order-id="${orderId}"]`
                    );
                    row.remove();
                    rows = tableBody.querySelectorAll("tr");
                    renderPagination();
                    renderPage();
                    showToast(
                        `<i class="fas fa-trash"></i> Xóa đơn hàng thành công!`,
                        "success"
                    );

                    // Gắn API call tới Laravel
                    // fetch(`/orders/${orderId}`, {
                    //     method: 'DELETE',
                    //     headers: {
                    //         'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    //     }
                    // });
                }
            };

            // Xử lý toast
            function showToast(message, type) {
                const toast = document.getElementById("toast");
                toast.innerHTML = message;
                toast.className = `aorders-toast aorders-toast-${type} show`;
                setTimeout(() => toast.classList.remove("show"), 3000);
            }
        });
    </script>
@endsection
