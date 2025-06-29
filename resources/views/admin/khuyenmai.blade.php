@extends('admin.app')

@section('admin.body')
    <div class="apromotions-main-content">
        <div class="apromotions-header">
            <div class="apromotions-search-bar">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" placeholder="Tìm kiếm khuyến mãi..." />
            </div>
            <div class="apromotions-user-profile">
                <div class="apromotions-notification-bell">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="apromotions-profile-avatar">QT</div>
            </div>
        </div>
        <h1 class="apromotions-page-title">Quản lý khuyến mãi</h1>
        <p class="apromotions-page-subtitle">
            Tạo và quản lý các chương trình khuyến mãi
        </p>
        <div class="apromotions-actions-container">
            <button class="apromotions-btn apromotions-btn-primary" id="createPromotionBtn">
                Tạo khuyến mãi
            </button>
        </div>
        <table class="apromotions-promotion-table" id="promotionTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên chương trình</th>
                    <th>Mã khuyến mãi</th>
                    <th>Giảm giá</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Sản phẩm</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody id="promotionList">
                <tr>
                    <td>1</td>
                    <td>Khuyến mãi VIP</td>
                    <td>VIP2025</td>
                    <td>40%</td>
                    <td>2025-06-25</td>
                    <td>2025-07-05</td>
                    <td class="product-cell" data-full="Áo thun, Quần jeans">
                        Áo thun, Quần jeans
                    </td>
                    <td class="status-active">Kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="1" data-products="1,2">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="1">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Khuyến mãi lễ hội</td>
                    <td>FEST2025</td>
                    <td>35%</td>
                    <td>2025-06-28</td>
                    <td>2025-07-10</td>
                    <td class="product-cell" data-full="Áo khoác, Giày thể thao">
                        Áo khoác, Giày thể thao
                    </td>
                    <td class="status-inactive">Không kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="2" data-products="3,4">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="2">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Khuyến mãi hè</td>
                    <td>SUMMER2025</td>
                    <td>25%</td>
                    <td>2025-07-01</td>
                    <td>2025-08-01</td>
                    <td class="product-cell" data-full="Váy maxi, Sandal">
                        Váy maxi, Sandal
                    </td>
                    <td class="status-active">Kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="3" data-products="5,7">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="3">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Khuyến mãi Black Friday</td>
                    <td>BF2025</td>
                    <td>50%</td>
                    <td>2025-11-20</td>
                    <td>2025-11-30</td>
                    <td class="product-cell" data-full="Túi xách, Đồng hồ">
                        Túi xách, Đồng hồ
                    </td>
                    <td class="status-inactive">Không kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="4" data-products="6,8">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="4">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Khuyến mãi Tết</td>
                    <td>TET2026</td>
                    <td>30%</td>
                    <td>2026-01-15</td>
                    <td>2026-02-05</td>
                    <td class="product-cell" data-full="Áo dài, Giày cao gót">
                        Áo dài, Giày cao gót
                    </td>
                    <td class="status-inactive">Không kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="5"
                            data-products="9,10">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="5">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Khuyến mãi sinh nhật</td>
                    <td>BDAY2025</td>
                    <td>20%</td>
                    <td>2025-06-10</td>
                    <td>2025-12-31</td>
                    <td class="product-cell" data-full="Phụ kiện, Mũ">
                        Phụ kiện, Mũ
                    </td>
                    <td class="status-active">Kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="6"
                            data-products="11,12">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="6">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Khuyến mãi cuối năm</td>
                    <td>END2025</td>
                    <td>45%</td>
                    <td>2025-12-15</td>
                    <td>2025-12-31</td>
                    <td class="product-cell" data-full="Áo len, Khăn quàng">
                        Áo len, Khăn quàng
                    </td>
                    <td class="status-active">Kích hoạt</td>
                    <td class="actions">
                        <button class="apromotions-btn apromotions-btn-primary edit-btn" data-id="7"
                            data-products="13,14">
                            <i class="fas fa-edit"></i> Sửa
                        </button>
                        <button class="apromotions-btn apromotions-btn-danger delete-btn" data-id="7">
                            <i class="fas fa-trash"></i> Xóa
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="apromotions-pagination" id="pagination"></div>
    </div>
    <div class="apromotions-modal" id="promotionModal">
        <div class="apromotions-modal-content">
            <span class="apromotions-modal-close" id="closeModal">×</span>
            <h2 id="modalTitle">Tạo chương trình khuyến mãi</h2>
            <div class="apromotions-form-group">
                <label>Tên chương trình</label>
                <input type="text" id="promotionName" placeholder="Nhập tên chương trình" required />
                <span class="error-message" id="promotionNameError">Vui lòng nhập tên chương trình</span>
            </div>
            <div class="apromotions-form-group">
                <label>Mã khuyến mãi</label>
                <input type="text" id="promotionCode" placeholder="Nhập mã khuyến mãi" required />
                <span class="error-message" id="promotionCodeError">Vui lòng nhập mã khuyến mãi</span>
            </div>
            <div class="apromotions-form-group">
                <label>Giảm giá (%)</label>
                <input type="number" id="promotionDiscount" placeholder="Nhập phần trăm giảm giá" min="0"
                    max="100" required />
                <span class="error-message" id="promotionDiscountError">Vui lòng nhập giá trị từ 0 đến 100</span>
            </div>
            <div class="apromotions-form-group">
                <label>Ngày bắt đầu</label>
                <input type="date" id="promotionStartDate" required />
                <span class="error-message" id="promotionStartDateError">Vui lòng chọn ngày bắt đầu</span>
            </div>
            <div class="apromotions-form-group">
                <label>Ngày kết thúc</label>
                <input type="date" id="promotionEndDate" required />
                <span class="error-message" id="promotionEndDateError">Vui lòng chọn ngày kết thúc</span>
            </div>
            <div class="apromotions-form-group">
                <label>Sản phẩm áp dụng</label>
                <select id="promotionProducts" multiple required>
                    <option value="1">Áo thun</option>
                    <option value="2">Quần jeans</option>
                    <option value="3">Áo khoác</option>
                    <option value="4">Giày thể thao</option>
                    <option value="5">Váy maxi</option>
                    <option value="6">Túi xách</option>
                    <option value="7">Sandal</option>
                    <option value="8">Đồng hồ</option>
                    <option value="9">Áo dài</option>
                    <option value="10">Giày cao gót</option>
                    <option value="11">Phụ kiện</option>
                    <option value="12">Mũ</option>
                    <option value="13">Áo len</option>
                    <option value="14">Khăn quàng</option>
                </select>
                <span class="error-message" id="promotionProductsError">Vui lòng chọn ít nhất một sản phẩm</span>
            </div>
            <div class="apromotions-form-group">
                <label>Trạng thái</label>
                <select id="promotionStatus" required>
                    <option value="active">Kích hoạt</option>
                    <option value="inactive">Không kích hoạt</option>
                </select>
            </div>
            <div class="apromotions-modal-actions">
                <button class="apromotions-btn apromotions-btn-primary" id="submitPromotion">
                    Tạo
                </button>
                <button class="apromotions-btn apromotions-btn-secondary" id="cancelModal">
                    Hủy
                </button>
            </div>
        </div>
    </div>
    <div class="apromotions-modal" id="deleteModal">
        <div class="apromotions-modal-content">
            <span class="apromotions-modal-close" id="closeDeleteModal">×</span>
            <h2>Xác nhận xóa</h2>
            <p id="deleteMessage">Bạn có chắc muốn xóa khuyến mãi này?</p>
            <div class="apromotions-modal-actions">
                <button class="apromotions-btn apromotions-btn-danger" id="confirmDelete">
                    Xóa
                </button>
                <button class="apromotions-btn apromotions-btn-secondary" id="cancelDelete">
                    Hủy
                </button>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarItems = document.querySelectorAll(
                ".apromotions-sidebar-item"
            );
            const createPromotionBtn =
                document.getElementById("createPromotionBtn");
            const promotionModal = document.getElementById("promotionModal");
            const closeModal = document.getElementById("closeModal");
            const cancelModal = document.getElementById("cancelModal");
            const submitPromotion = document.getElementById("submitPromotion");
            const deleteModal = document.getElementById("deleteModal");
            const closeDeleteModal = document.getElementById("closeDeleteModal");
            const cancelDelete = document.getElementById("cancelDelete");
            const confirmDelete = document.getElementById("confirmDelete");
            const promotionList = document.getElementById("promotionList");
            const pagination = document.getElementById("pagination");
            const searchInput = document.getElementById("searchInput");
            const promotionRows = promotionList.querySelectorAll("tr");

            const itemsPerPage = 5;
            let currentPage = 1;
            let editingPromotionId = null;

            // Xử lý active sidebar item
            sidebarItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    sidebarItems.forEach((i) =>
                        i.classList.remove("apromotions-active")
                    );
                    this.classList.add("apromotions-active");
                });
            });

            // Hàm validate form
            function validateForm() {
                let isValid = true;
                const name = document.getElementById("promotionName").value.trim();
                const code = document.getElementById("promotionCode").value.trim();
                const discount = document.getElementById("promotionDiscount").value;
                const startDate = document.getElementById("promotionStartDate").value;
                const endDate = document.getElementById("promotionEndDate").value;
                const products = Array.from(
                    document.getElementById("promotionProducts").selectedOptions
                ).map((opt) => opt.value);

                document.getElementById("promotionNameError").style.display = name ?
                    "none" :
                    "block";
                document.getElementById("promotionCodeError").style.display = code ?
                    "none" :
                    "block";
                document.getElementById("promotionDiscountError").style.display =
                    discount >= 0 && discount <= 100 ? "none" : "block";
                document.getElementById("promotionStartDateError").style.display =
                    startDate ? "none" : "block";
                document.getElementById("promotionEndDateError").style.display =
                    endDate ? "none" : "block";
                document.getElementById("promotionProductsError").style.display =
                    products.length > 0 ? "none" : "block";

                if (
                    !name ||
                    !code ||
                    !(discount >= 0 && discount <= 100) ||
                    !startDate ||
                    !endDate ||
                    products.length === 0
                ) {
                    isValid = false;
                }

                return isValid;
            }

            // Mở modal tạo/chỉnh sửa
            function openModal(isEdit = false, promotion = null) {
                promotionModal.style.display = "flex";
                document.getElementById("modalTitle").textContent = isEdit ?
                    "Chỉnh sửa chương trình khuyến mãi" :
                    "Tạo chương trình khuyến mãi";
                editingPromotionId = isEdit ? promotion.id : null;

                if (isEdit) {
                    document.getElementById("promotionName").value = promotion.name;
                    document.getElementById("promotionCode").value = promotion.code;
                    document.getElementById("promotionDiscount").value = parseInt(
                        promotion.discount
                    );
                    document.getElementById("promotionStartDate").value =
                        promotion.startDate;
                    document.getElementById("promotionEndDate").value =
                        promotion.endDate;
                    document.getElementById("promotionStatus").value = promotion.status;
                    const productSelect = document.getElementById("promotionProducts");
                    Array.from(productSelect.options).forEach((option) => {
                        option.selected = promotion.products.includes(option.value);
                    });
                    document.getElementById("submitPromotion").textContent = "Cập nhật";
                } else {
                    document.getElementById("promotionName").value = "";
                    document.getElementById("promotionCode").value = "";
                    document.getElementById("promotionDiscount").value = "";
                    document.getElementById("promotionStartDate").value = "";
                    document.getElementById("promotionEndDate").value = "";
                    document.getElementById("promotionProducts").value = [];
                    document.getElementById("promotionStatus").value = "active";
                    document.getElementById("submitPromotion").textContent = "Tạo";
                }
                // Đảm bảo modal cuộn về đầu
                document.querySelector(".apromotions-modal-content").scrollTop = 0;
            }

            function closeModalFunc() {
                promotionModal.style.display = "none";
                editingPromotionId = null;
                document
                    .querySelectorAll(".error-message")
                    .forEach((error) => (error.style.display = "none"));
            }

            createPromotionBtn.addEventListener("click", () => openModal());
            closeModal.addEventListener("click", closeModalFunc);
            cancelModal.addEventListener("click", closeModalFunc);
            promotionModal.addEventListener("click", (e) => {
                if (e.target === promotionModal) closeModalFunc();
            });

            // Modal submit
            submitPromotion.addEventListener("click", () => {
                if (!validateForm()) return;
                alert(
                    `Chức năng ${
              editingPromotionId ? "chỉnh sửa" : "tạo"
            } khuyến mãi chưa được triển khai vì dữ liệu tĩnh.`
                );
                closeModalFunc();
            });

            // Mở/đóng modal xóa
            function openDeleteModal(id) {
                deleteModal.style.display = "flex";
                document.getElementById(
                    "deleteMessage"
                ).textContent = `Bạn có chắc muốn xóa khuyến mãi ID ${id}?`;
                confirmDelete.dataset.id = id;
            }

            function closeDeleteModalFunc() {
                deleteModal.style.display = "none";
            }

            closeDeleteModal.addEventListener("click", closeDeleteModalFunc);
            cancelDelete.addEventListener("click", closeDeleteModalFunc);
            deleteModal.addEventListener("click", (e) => {
                if (e.target === deleteModal) closeDeleteModalFunc();
            });

            confirmDelete.addEventListener("click", () => {
                alert(
                    "Chức năng xóa khuyến mãi chưa được triển khai vì dữ liệu tĩnh."
                );
                closeDeleteModalFunc();
            });

            // Xử lý nút sửa và xóa
            promotionRows.forEach((row) => {
                const editBtn = row.querySelector(".edit-btn");
                const deleteBtn = row.querySelector(".delete-btn");
                const id = editBtn.dataset.id;

                editBtn.addEventListener("click", () => {
                    const products = editBtn.dataset.products.split(",");
                    const promotion = {
                        id: id,
                        name: row.cells[1].textContent,
                        code: row.cells[2].textContent,
                        discount: row.cells[3].textContent.replace("%", ""),
                        startDate: row.cells[4].textContent,
                        endDate: row.cells[5].textContent,
                        products: products,
                        status: row.cells[7].classList.contains("status-active") ?
                            "active" :
                            "inactive",
                    };
                    openModal(true, promotion);
                });

                deleteBtn.addEventListener("click", () => openDeleteModal(id));
            });

            // Tìm kiếm khuyến mãi
            searchInput.addEventListener("input", () => {
                const searchTerm = searchInput.value.toLowerCase();
                let visibleRows = 0;

                promotionRows.forEach((row) => {
                    const name = row.cells[1].textContent.toLowerCase();
                    const code = row.cells[2].textContent.toLowerCase();
                    const products = row.cells[6].textContent.toLowerCase();
                    if (
                        searchTerm === "" ||
                        name.includes(searchTerm) ||
                        code.includes(searchTerm) ||
                        products.includes(searchTerm)
                    ) {
                        row.style.display = "";
                        visibleRows++;
                    } else {
                        row.style.display = "none";
                    }
                });

                console.log(
                    `Search term: "${searchTerm}", Visible rows: ${visibleRows}`
                );
                currentPage = 1;
                renderPromotions(currentPage, visibleRows);
                renderPagination(visibleRows);
            });

            // Hiển thị các hàng khuyến mãi theo trang
            function renderPromotions(page, visibleRows) {
                console.log(
                    `Rendering page ${page}, Total visible rows: ${visibleRows}`
                );
                const start = (page - 1) * itemsPerPage;
                const end = start + itemsPerPage;
                let visibleCount = 0;

                promotionRows.forEach((row) => {
                    if (row.style.display !== "none") {
                        if (visibleCount >= start && visibleCount < end) {
                            row.classList.add("visible");
                            console.log(`Showing row ID: ${row.cells[0].textContent}`);
                        } else {
                            row.classList.remove("visible");
                        }
                        visibleCount++;
                    } else {
                        row.classList.remove("visible");
                    }
                });

                if (visibleRows === 0) {
                    promotionList.innerHTML =
                        '<tr><td colspan="9" style="text-align: center;">Không tìm thấy khuyến mãi nào.</td></tr>';
                    console.log("No promotions found, displaying empty message");
                } else if (
                    promotionList.innerHTML.includes("Không tìm thấy khuyến mãi nào") &&
                    visibleRows > 0
                ) {
                    // Restore original rows if search is cleared
                    location
                .reload(); // Temporary fix for static data; in a dynamic system, repopulate from data source
                }
            }

            // Hiển thị phân trang
            function renderPagination(visibleRows) {
                pagination.innerHTML = "";
                const totalPages = Math.ceil(visibleRows / itemsPerPage);
                const maxVisiblePages = 5;
                const halfVisible = Math.floor(maxVisiblePages / 2);
                let startPage = Math.max(1, currentPage - halfVisible);
                let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);

                if (endPage - startPage + 1 < maxVisiblePages) {
                    startPage = Math.max(1, endPage - maxVisiblePages + 1);
                }

                console.log(
                    `Total pages: ${totalPages}, Start page: ${startPage}, End page: ${endPage}`
                );
                for (let i = startPage; i <= endPage; i++) {
                    const btn = document.createElement("button");
                    btn.className = "apromotions-pagination-btn";
                    btn.textContent = i;
                    if (i === currentPage) btn.classList.add("active");
                    btn.addEventListener("click", () => {
                        currentPage = i;
                        console.log(`Switching to page ${currentPage}`);
                        renderPromotions(currentPage, visibleRows);
                        renderPagination(visibleRows);
                    });
                    pagination.appendChild(btn);
                }
            }

            // Khởi tạo giao diện
            const initialVisibleRows = promotionRows.length;
            console.log(`Initial visible rows: ${initialVisibleRows}`);
            promotionRows.forEach((row) => {
                row.style.display = ""; // Ensure all rows are initially visible for pagination
            });
            renderPromotions(currentPage, initialVisibleRows);
            renderPagination(initialVisibleRows);
        });
    </script>
@endsection
