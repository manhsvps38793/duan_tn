@extends('admin.app')

@section('admin.body')
        <div class="amanagementimg-main-content">
            <div class="amanagementimg-header">
                <div class="amanagementimg-search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Tìm kiếm hình ảnh..." id="amanagementimg-searchInput" />
                </div>
                <div class="amanagementimg-user-profile">
                    <div class="amanagementimg-notification-bell">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="amanagementimg-profile-avatar">QT</div>
                </div>
            </div>
            <h1 class="amanagementimg-page-title">Quản lý hình ảnh sản phẩm</h1>
            <p class="amanagementimg-page-subtitle">
                Tải lên và quản lý hình ảnh cho sản phẩm
            </p>
            <div class="amanagementimg-filter-bar">
                <select class="amanagementimg-filter-select" id="amanagementimg-productFilter">
                    <option value="">Tất cả sản phẩm</option>
                    <option value="SP001">SP001 - Áo thun nam cổ tròn</option>
                    <option value="SP002">SP002 - Quần jeans nam slimfit</option>
                    <option value="SP003">SP003 - Mũ lưỡi trai unisex</option>
                    <option value="SP004">SP004 - Áo sơ mi nữ tay dài</option>
                    <option value="SP005">SP005 - Quần short kaki nam</option>
                    <option value="SP006">SP006 - Túi xách da nữ</option>
                    <option value="SP007">SP007 - Áo khoác nam bomber</option>
                    <option value="SP008">SP008 - Áo polo nam</option>
                </select>
                <button class="amanagementimg-btn amanagementimg-btn-primary" id="amanagementimg-uploadImageBtn">
                    Tải lên hình ảnh
                </button>
            </div>
            <div class="amanagementimg-upload-area" id="amanagementimg-uploadArea">
                <i class="fas fa-cloud-upload-alt fa-2x" style="color: var(--text-muted)"></i>
                <p>
                    Kéo thả hình ảnh hoặc
                    <label for="amanagementimg-imageUpload">chọn tệp</label>
                </p>
                <input type="file" id="amanagementimg-imageUpload" accept="image/*" multiple />
            </div>
            <div class="amanagementimg-image-grid" id="amanagementimg-imageGrid">
                <!-- Sample images -->
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Áo thun nam cổ tròn"
                        class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP001</strong> - Áo thun nam cổ tròn</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Quần jeans nam slimfit"
                        class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP002</strong> - Quần jeans nam slimfit</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Mũ lưỡi trai unisex"
                        class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP003</strong> - Mũ lưỡi trai unisex</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Áo sơ mi nữ tay dài"
                        class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP004</strong> - Áo sơ mi nữ tay dài</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Quần short kaki nam"
                        class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP005</strong> - Quần short kaki nam</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Túi xách da nữ" class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP006</strong> - Túi xách da nữ</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Áo khoác nam bomber"
                        class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP007</strong> - Áo khoác nam bomber</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
                <div class="amanagementimg-image-item">
                    <img src="https://placehold.co/200x150" alt="Áo polo nam" class="amanagementimg-image-preview" />
                    <div class="amanagementimg-image-info">
                        <p><strong>SP008</strong> - Áo polo nam</p>
                    </div>
                    <div class="amanagementimg-image-actions">
                        <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn"
                            data-tooltip="Chỉnh sửa hình ảnh">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn"
                            data-tooltip="Xóa hình ảnh">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="amanagementimg-pagination">
                <div class="amanagementimg-pagination-controls" id="amanagementimg-paginationControls"></div>
            </div>
        </div>
    </div>
    <div class="amanagementimg-modal" id="amanagementimg-imageModal">
        <div class="amanagementimg-modal-content">
            <div class="amanagementimg-modal-header">
                <h2 class="amanagementimg-modal-title" id="amanagementimg-modalTitle">
                    Tải lên hình ảnh
                </h2>
                <span class="amanagementimg-modal-close" id="amanagementimg-modalClose">×</span>
            </div>
            <div class="amanagementimg-modal-body">
                <div>
                    <label for="amanagementimg-modalImageUpload">Hình ảnh</label>
                    <input type="file" id="amanagementimg-modalImageUpload" accept="image/*" />
                    <img id="amanagementimg-modalImagePreview" class="amanagementimg-modal-image-preview"
                        alt="Xem trước hình ảnh" />
                </div>
                <div>
                    <label for="amanagementimg-productSelect">Sản phẩm</label>
                    <select id="amanagementimg-productSelect">
                        <option value="">Chọn sản phẩm</option>
                        <option value="SP001">SP001 - Áo thun nam cổ tròn</option>
                        <option value="SP002">SP002 - Quần jeans nam slimfit</option>
                        <option value="SP003">SP003 - Mũ lưỡi trai unisex</option>
                        <option value="SP004">SP004 - Áo sơ mi nữ tay dài</option>
                        <option value="SP005">SP005 - Quần short kaki nam</option>
                        <option value="SP006">SP006 - Túi xách da nữ</option>
                        <option value="SP007">SP007 - Áo khoác nam bomber</option>
                        <option value="SP008">SP008 - Áo polo nam</option>
                    </select>
                </div>
            </div>
            <div class="amanagementimg-modal-footer">
                <button class="amanagementimg-btn amanagementimg-btn-primary" id="amanagementimg-saveImageBtn">
                    Lưu
                </button>
                <button class="amanagementimg-btn amanagementimg-btn-secondary" id="amanagementimg-cancelImageBtn">
                    Hủy
                </button>
            </div>
        </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Sidebar interaction
            const amanagementimgSidebarItems = document.querySelectorAll(
                ".amanagementimg-sidebar-item"
            );
            amanagementimgSidebarItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    amanagementimgSidebarItems.forEach((i) =>
                        i.classList.remove("amanagementimg-active")
                    );
                    this.classList.add("amanagementimg-active");
                });
            });

            // Image upload handling
            const amanagementimgUploadArea = document.getElementById(
                "amanagementimg-uploadArea"
            );
            const amanagementimgImageUpload = document.getElementById(
                "amanagementimg-imageUpload"
            );
            const amanagementimgImageGrid = document.getElementById(
                "amanagementimg-imageGrid"
            );
            const amanagementimgUploadImageBtn = document.getElementById(
                "amanagementimg-uploadImageBtn"
            );
            const amanagementimgModal = document.getElementById(
                "amanagementimg-imageModal"
            );
            const amanagementimgModalTitle = document.getElementById(
                "amanagementimg-modalTitle"
            );
            const amanagementimgModalImageUpload = document.getElementById(
                "amanagementimg-modalImageUpload"
            );
            const amanagementimgModalImagePreview = document.getElementById(
                "amanagementimg-modalImagePreview"
            );
            const amanagementimgProductSelect = document.getElementById(
                "amanagementimg-productSelect"
            );
            const amanagementimgSaveImageBtn = document.getElementById(
                "amanagementimg-saveImageBtn"
            );
            const amanagementimgCancelImageBtn = document.getElementById(
                "amanagementimg-cancelImageBtn"
            );
            const amanagementimgModalClose = document.getElementById(
                "amanagementimg-modalClose"
            );

            // Drag and drop
            ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
                amanagementimgUploadArea.addEventListener(
                    eventName,
                    amanagementimgPreventDefaults,
                    false
                );
            });

            function amanagementimgPreventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }

            ["dragenter", "dragover"].forEach((eventName) => {
                amanagementimgUploadArea.addEventListener(
                    eventName,
                    () =>
                    amanagementimgUploadArea.classList.add(
                        "amanagementimg-highlight"
                    ),
                    false
                );
            });

            ["dragleave", "drop"].forEach((eventName) => {
                amanagementimgUploadArea.addEventListener(
                    eventName,
                    () =>
                    amanagementimgUploadArea.classList.remove(
                        "amanagementimg-highlight"
                    ),
                    false
                );
            });

            amanagementimgUploadArea.addEventListener(
                "drop",
                amanagementimgHandleDrop,
                false
            );
            amanagementimgImageUpload.addEventListener(
                "change",
                amanagementimgHandleFiles,
                false
            );

            function amanagementimgHandleDrop(e) {
                const files = e.dataTransfer.files;
                amanagementimgHandleFiles({
                    target: {
                        files
                    }
                });
            }

            function amanagementimgHandleFiles(e) {
                const files = e.target.files;
                if (files.length > 0) {
                    amanagementimgOpenModal("upload", files);
                }
            }

            // Modal image preview
            amanagementimgModalImageUpload.addEventListener("change", function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        amanagementimgModalImagePreview.src = e.target.result;
                        amanagementimgModalImagePreview.style.display = "block";
                    };
                    reader.readAsDataURL(file);
                } else {
                    amanagementimgModalImagePreview.style.display = "none";
                    amanagementimgModalImagePreview.src = "";
                }
            });

            // Modal handling
            function amanagementimgOpenModal(mode, files = null, item = null) {
                amanagementimgModalTitle.textContent =
                    mode === "edit" ? "Chỉnh sửa hình ảnh" : "Tải lên hình ảnh";
                if (mode === "edit" && item) {
                    amanagementimgModalImagePreview.src = item.querySelector(
                        ".amanagementimg-image-preview"
                    ).src;
                    amanagementimgModalImagePreview.style.display = "block";
                    amanagementimgModalImageUpload.value = "";
                    amanagementimgProductSelect.value = item.querySelector(
                        ".amanagementimg-image-info p strong"
                    ).textContent;
                } else {
                    amanagementimgModalImagePreview.src =
                        files && files[0] ? URL.createObjectURL(files[0]) : "";
                    amanagementimgModalImagePreview.style.display =
                        files && files[0] ? "block" : "none";
                    amanagementimgModalImageUpload.value = "";
                    amanagementimgProductSelect.value = "";
                }
                amanagementimgModal.style.display = "flex";
            }

            function amanagementimgCloseModal() {
                amanagementimgModal.style.display = "none";
            }

            amanagementimgUploadImageBtn.addEventListener("click", () =>
                amanagementimgOpenModal("upload")
            );
            amanagementimgCancelImageBtn.addEventListener(
                "click",
                amanagementimgCloseModal
            );
            amanagementimgModalClose.addEventListener(
                "click",
                amanagementimgCloseModal
            );
            amanagementimgSaveImageBtn.addEventListener("click", () => {
                alert("Chức năng lưu chỉ là demo, không lưu thực tế.");
                amanagementimgCloseModal();
            });

            // Image grid actions
            amanagementimgImageGrid.addEventListener("click", (e) => {
                const item = e.target.closest(".amanagementimg-image-item");
                if (!item) return;

                if (e.target.closest(".amanagementimg-edit-btn")) {
                    amanagementimgOpenModal("edit", null, item);
                } else if (e.target.closest(".amanagementimg-delete-btn")) {
                    alert("Chức năng xóa chỉ là demo, không xóa thực tế.");
                }
            });

            // Pagination
            const amanagementimgItemsPerPage = 5;
            let amanagementimgCurrentPage = 1;
            const amanagementimgItems = Array.from(
                amanagementimgImageGrid.querySelectorAll(".amanagementimg-image-item")
            );

            function amanagementimgRenderGrid(filteredItems) {
                const start =
                    (amanagementimgCurrentPage - 1) * amanagementimgItemsPerPage;
                const end = start + amanagementimgItemsPerPage;
                amanagementimgItems.forEach((item, index) => {
                    item.style.display =
                        filteredItems.includes(item) && index >= start && index < end ?
                        "" :
                        "none";
                });
                amanagementimgRenderPagination(filteredItems.length);
            }

            function amanagementimgRenderPagination(totalItems) {
                const totalPages = Math.ceil(totalItems / amanagementimgItemsPerPage);
                const paginationControls = document.getElementById(
                    "amanagementimg-paginationControls"
                );
                paginationControls.innerHTML = Array.from({
                        length: totalPages
                    },
                    (_, i) => `
                    <button class="amanagementimg-pagination-btn ${
                      amanagementimgCurrentPage === i + 1
                        ? "amanagementimg-active"
                        : ""
                    }">${i + 1}</button>
                `
                ).join("");
                document
                    .querySelectorAll(".amanagementimg-pagination-btn")
                    .forEach((btn, index) => {
                        btn.addEventListener("click", () => {
                            amanagementimgCurrentPage = index + 1;
                            amanagementimgRenderGrid(amanagementimgApplyFilters());
                        });
                    });
            }

            // Search and filter
            const amanagementimgSearchInput = document.getElementById(
                "amanagementimg-searchInput"
            );
            const amanagementimgProductFilter = document.getElementById(
                "amanagementimg-productFilter"
            );

            function amanagementimgApplyFilters() {
                const searchTerm = amanagementimgSearchInput.value.toLowerCase();
                const product = amanagementimgProductFilter.value;

                return amanagementimgItems.filter((item) => {
                    const productCode = item
                        .querySelector(".amanagementimg-image-info p strong")
                        .textContent.toLowerCase();
                    const productName = item
                        .querySelector(".amanagementimg-image-info p")
                        .textContent.toLowerCase();
                    const searchMatch =
                        productCode.includes(searchTerm) ||
                        productName.includes(searchTerm);
                    const productMatch = !product || productCode === product.toLowerCase();
                    return searchMatch && productMatch;
                });
            }

            amanagementimgSearchInput.addEventListener("input", () => {
                amanagementimgCurrentPage = 1;
                amanagementimgRenderGrid(amanagementimgApplyFilters());
            });

            amanagementimgProductFilter.addEventListener("change", () => {
                amanagementimgCurrentPage = 1;
                amanagementimgRenderGrid(amanagementimgApplyFilters());
            });

            // Initial render
            amanagementimgRenderGrid(amanagementimgItems);
        });
    </script>
@endsection
