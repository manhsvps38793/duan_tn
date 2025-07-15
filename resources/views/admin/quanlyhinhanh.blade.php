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
                Quản lý hình ảnh cho sản phẩm
            </p>
            <div class="amanagementimg-filter-bar">
                <select class="amanagementimg-filter-select" id="amanagementimg-categoryFilter">
                    <option value="">Tất cả danh mục</option>
                    <option value="mens-clothing">Quần áo nam</option>
                    <option value="womens-clothing">Quần áo nữ</option>
                    <option value="accessories">Phụ kiện</option>
                </select>
                <select class="amanagementimg-filter-select" id="amanagementimg-imageCountFilter">
                    <option value="">Số lượng hình ảnh</option>
                    <option value="1">1 hình</option>
                    <option value="2">2 hình</option>
                    <option value="3">3 hình</option>
                    <option value="4">4 hình</option>
                    <option value="5">5 hình</option>
                </select>
            </div>
            <div class="amanagementimg-image-grid" id="amanagementimg-imageGrid">
                <div class="amanagementimg-image-item" data-category="mens-clothing" data-image-count="1">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP001</strong> - Áo thun nam cổ tròn</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Áo thun nam cổ tròn" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-add-image" data-product="SP001"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP001"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP001"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP001"><i class="fas fa-plus"></i></div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="mens-clothing" data-image-count="2">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP002</strong> - Quần jeans nam slimfit</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Quần jeans nam slimfit" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Quần jeans nam slimfit" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-add-image" data-product="SP002"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP002"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP002"><i class="fas fa-plus"></i></div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="accessories" data-image-count="3">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP003</strong> - Mũ lưỡi trai unisex</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Mũ lưỡi trai unisex" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Mũ lưỡi trai unisex" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Mũ lưỡi trai unisex" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-add-image" data-product="SP003"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP003"><i class="fas fa-plus"></i></div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="womens-clothing" data-image-count="4">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP004</strong> - Áo sơ mi nữ tay dài</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Áo sơ mi nữ tay dài" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Áo sơ mi nữ tay dài" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Áo sơ mi nữ tay dài" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Áo sơ mi nữ tay dài" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-add-image" data-product="SP004"><i class="fas fa-plus"></i></div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group"></div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="mens-clothing" data-image-count="5">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP005</strong> - Quần short kaki nam</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Quần short kaki nam" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Quần short kaki nam" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Quần short kaki nam" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Quần short kaki nam" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Quần short kaki nam" class="amanagementimg-image-preview" />
                        </div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="accessories" data-image-count="5">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP006</strong> - Túi xách da nữ</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Túi xách da nữ" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Túi xách da nữ" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Túi xách da nữ" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Túi xách da nữ" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Túi xách da nữ" class="amanagementimg-image-preview" />
                        </div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="mens-clothing" data-image-count="3">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP007</strong> - Áo khoác nam bomber</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Áo khoác nam bomber" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Áo khoác nam bomber" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-image-container" data-primary="false">
                            <img src="https://placehold.co/120x120" alt="Áo khoác nam bomber" class="amanagementimg-image-preview" />
                        </div>
                        <div class="amanagementimg-add-image" data-product="SP007"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP007"><i class="fas fa-plus"></i></div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                    </div>
                </div>
                <div class="amanagementimg-image-item" data-category="mens-clothing" data-image-count="1">
                    <div class="amanagementimg-image-info">
                        <p><strong>SP008</strong> - Áo polo nam</p>
                    </div>
                    <div class="amanagementimg-image-row">
                        <div class="amanagementimg-image-container" data-primary="true">
                            <img src="https://placehold.co/120x120" alt="Áo polo nam" class="amanagementimg-image-preview" />
                            <i class="fas fa-star amanagementimg-primary-star"></i>
                        </div>
                        <div class="amanagementimg-add-image" data-product="SP008"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP008"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP008"><i class="fas fa-plus"></i></div>
                        <div class="amanagementimg-add-image" data-product="SP008"><i class="fas fa-plus"></i></div>
                    </div>
                    <div class="amanagementimg-action-row">
                        <div class="amanagementimg-action-group">
                            <button class="amanagementimg-btn amanagementimg-btn-primary amanagementimg-edit-btn" data-tooltip="Chỉnh sửa hình ảnh">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="amanagementimg-btn amanagementimg-btn-danger amanagementimg-delete-btn" data-tooltip="Xóa hình ảnh">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                        <div class="amanagementimg-action-group"></div>
                    </div>
                </div>
            </div>
            <div class="amanagementimg-pagination">
                <div class="amanagementimg-pagination-controls" id="amanagementimg-paginationControls"></div>
            </div>
        </div>
        <!-- Modal for Adding Image -->
        <div class="amanagementimg-modal" id="amanagementimg-addImageModal">
            <form action="" method="post">
                <div class="amanagementimg-modal-content">
                    <div class="amanagementimg-modal-header">
                        <h2 class="amanagementimg-modal-title">Thêm hình ảnh</h2>
                        <span class="amanagementimg-modal-close" id="amanagementimg-addModalClose">×</span>
                    </div>
                    <div class="amanagementimg-modal-body">
                        <div>
                            <label for="amanagementimg-addProductName">Tên sản phẩm</label>
                            <input type="text" id="amanagementimg-addProductName" placeholder="ddaay laf ten" disabled />
                        </div>
                        <div>
                            <label for="amanagementimg-addImageUpload">Hình ảnh</label>
                            <input type="file" id="amanagementimg-addImageUpload" accept="image/*" />
                        </div>
                    </div>
                    <div class="amanagementimg-modal-footer">
                        <button type="submit" class="amanagementimg-btn amanagementimg-btn-primary" id="amanagementimg-saveAddImageBtn">Lưu</button>
                        <button type="button" class="amanagementimg-btn amanagementimg-btn-secondary" id="amanagementimg-cancelAddImageBtn">Hủy</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal for Editing Image -->
        <div class="amanagementimg-modal" id="amanagementimg-editImageModal">
            <form action="" method="post">
                <div class="amanagementimg-modal-content">
                    <div class="amanagementimg-modal-header">
                        <h2 class="amanagementimg-modal-title">Chỉnh sửa hình ảnh</h2>
                        <span class="amanagementimg-modal-close" id="amanagementimg-editModalClose">×</span>
                    </div>
                    <div class="amanagementimg-modal-body">
                        <div>
                            <label for="amanagementimg-editProductName">Tên sản phẩm</label>
                            <input type="text" id="amanagementimg-editProductName" placeholder="ddaay laf ten" disabled />
                        </div>
                        <div>
                            <label for="amanagementimg-editImageUpload">Hình ảnh</label>
                            <input type="file" id="amanagementimg-editImageUpload" accept="image/*" />
                        </div>
                        <div>
                            <label for="amanagementimg-isPrimary">Trạng thái</label>
                            <select id="amanagementimg-isPrimary">
                                <option value="true">Hình chính</option>
                                <option value="false">Hình phụ</option>
                            </select>
                        </div>
                    </div>
                    <div class="amanagementimg-modal-footer">
                        <button type="submit" class="amanagementimg-btn amanagementimg-btn-primary" id="amanagementimg-saveEditImageBtn">Lưu</button>
                        <button type="button" class="amanagementimg-btn amanagementimg-btn-secondary" id="amanagementimg-cancelEditImageBtn">Hủy</button>
                    </div>
                </div>
            </form>
        </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const amanagementimgAddModal = document.getElementById("amanagementimg-addImageModal");
    const amanagementimgEditModal = document.getElementById("amanagementimg-editImageModal");
    const amanagementimgCancelAddImageBtn = document.getElementById("amanagementimg-cancelAddImageBtn");
    const amanagementimgAddModalClose = document.getElementById("amanagementimg-addModalClose");
    const amanagementimgCancelEditImageBtn = document.getElementById("amanagementimg-cancelEditImageBtn");
    const amanagementimgEditModalClose = document.getElementById("amanagementimg-editModalClose");

    // Open modal for adding image
    function amanagementimgOpenAddModal() {
        amanagementimgAddModal.style.display = "flex";
    }

    // Open modal for editing image
    function amanagementimgOpenEditModal() {
        amanagementimgEditModal.style.display = "flex";
    }

    // Close add modal
    function amanagementimgCloseAddModal() {
        amanagementimgAddModal.style.display = "none";
    }

    // Close edit modal
    function amanagementimgCloseEditModal() {
        amanagementimgEditModal.style.display = "none";
    }

    // Event listeners for opening modals
    document.getElementById("amanagementimg-imageGrid").addEventListener("click", (e) => {
        const addButton = e.target.closest(".amanagementimg-add-image");
        const editButton = e.target.closest(".amanagementimg-edit-btn");
        if (addButton) {
            amanagementimgOpenAddModal();
        } else if (editButton) {
            amanagementimgOpenEditModal();
        }
    });

    // Event listeners for closing modals
    amanagementimgCancelAddImageBtn.addEventListener("click", amanagementimgCloseAddModal);
    amanagementimgAddModalClose.addEventListener("click", amanagementimgCloseAddModal);
    amanagementimgCancelEditImageBtn.addEventListener("click", amanagementimgCloseEditModal);
    amanagementimgEditModalClose.addEventListener("click", amanagementimgCloseEditModal);
});
document.addEventListener("DOMContentLoaded", function() {
    const amanagementimgItemsPerPage = 5;
    let amanagementimgCurrentPage = 1;
    const amanagementimgImageGrid = document.getElementById("amanagementimg-imageGrid");
    const amanagementimgItems = Array.from(amanagementimgImageGrid.querySelectorAll(".amanagementimg-image-item"));

    function amanagementimgRenderGrid() {
        const start = (amanagementimgCurrentPage - 1) * amanagementimgItemsPerPage;
        const end = start + amanagementimgItemsPerPage;
        amanagementimgItems.forEach((item, index) => {
            item.style.display = index >= start && index < end ? "" : "none";
        });
        amanagementimgRenderPagination();
    }

    function amanagementimgRenderPagination() {
        const totalPages = Math.ceil(amanagementimgItems.length / amanagementimgItemsPerPage);
        const paginationControls = document.getElementById("amanagementimg-paginationControls");
        let startPage = Math.max(1, amanagementimgCurrentPage - 1);
        let endPage = Math.min(totalPages, startPage + 2);
        if (endPage - startPage < 2) {
            startPage = Math.max(1, endPage - 2);
        }
        paginationControls.innerHTML = Array.from({ length: endPage - startPage + 1 }, (_, i) => {
            const page = startPage + i;
            return `
                <button class="amanagementimg-pagination-btn ${amanagementimgCurrentPage === page ? "amanagementimg-active" : ""}">${page}</button>
            `;
        }).join("");
        document.querySelectorAll(".amanagementimg-pagination-btn").forEach((btn, index) => {
            btn.addEventListener("click", () => {
                amanagementimgCurrentPage = startPage + index;
                amanagementimgRenderGrid();
            });
        });
    }

    // Initial render
    amanagementimgRenderGrid();
});
    </script>
@endsection
