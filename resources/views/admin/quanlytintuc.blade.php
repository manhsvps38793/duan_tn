@extends('admin.app')

@section('admin.body')
        <div class="adnews-main-content">
            <div class="adnews-header">
                <div class="adnews-search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Tìm kiếm tin tức..." id="adnews-searchInput">
                </div>
                <div class="adnews-user-profile">
                    <div class="adnews-notification-bell adnews-tooltip" data-tooltip="Thông báo"><i class="fas fa-bell"></i></div>
                    <div class="adnews-profile-avatar">QT</div>
                </div>
            </div>
            <h1 class="adnews-page-title">Quản lý tin tức</h1>
            <p class="adnews-page-subtitle">Tạo, chỉnh sửa và quản lý bài viết tin tức cho cửa hàng</p>
            <div class="adnews-tab-nav">
                <button class="adnews-tab-btn adnews-active" data-tab="adnews-list">Danh sách tin tức</button>
                <button class="adnews-tab-btn" data-tab="adnews-stats">Thống kê</button>
                <button class="adnews-tab-btn" data-tab="adnews-settings">Cài đặt tin tức</button>
            </div>
            <div class="adnews-tab-content adnews-active" id="adnews-list">
                <div class="adnews-actions">
                    <div class="adnews-filters">
                        <div class="adnews-filter-group">
                            <label>Danh mục <i class="fas fa-list"></i></label>
                            <select id="adnews-categoryFilter">
                                <option value="">Tất cả</option>
                                <option value="Khuyến mãi">Khuyến mãi</option>
                                <option value="Bộ sưu tập">Bộ sưu tập</option>
                                <option value="Tin tức chung">Tin tức chung</option>
                            </select>
                        </div>
                        <div class="adnews-filter-group">
                            <label>Trạng thái <i class="fas fa-info-circle"></i></label>
                            <select id="adnews-statusFilter">
                                <option value="">Tất cả</option>
                                <option value="Đã xuất bản">Đã xuất bản</option>
                                <option value="Bản nháp">Bản nháp</option>
                            </select>
                        </div>
                        <div class="adnews-filter-group">
                            <label>Ngày <i class="fas fa-calendar"></i></label>
                            <input type="date" id="adnews-dateFilter">
                        </div>
                        <div class="adnews-filter-group">
                            <label>Tác giả <i class="fas fa-user"></i></label>
                            <select id="adnews-authorFilter">
                                <option value="">Tất cả</option>
                                <option value="Quản Trị">Quản Trị</option>
                                <option value="Nhân Viên">Nhân Viên</option>
                            </select>
                        </div>
                    </div>
                    <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Thêm tin tức" onclick="adnewsOpenModal('add')">Thêm tin tức</button>
                </div>
                <div class="adnews-data-card">
                    <div class="adnews-table-container">
                        <table class="adnews-data-table">
                            <thead>
                                <tr>
                                    <th>Hình</th>
                                    <th>Tiêu đề</th>
                                    <th>Danh mục</th>
                                    <th>Tác giả</th>
                                    <th>Lượt xem</th>
                                    <th>Ngày đăng</th>
                                    <th>Ngày sửa</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody id="adnews-newsTableBody">
                                <tr data-id="1" data-title="Bộ sưu tập Thu Đông 2025" data-category="Bộ sưu tập" data-author="Quản Trị" data-date="2025-06-07" data-status="Đã xuất bản" data-excerpt="Giới thiệu bộ sưu tập mới." data-content="Nội dung chi tiết về bộ sưu tập..." data-tags="thời trang, thu đông" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Bộ sưu tập Thu Đông 2025</td>
                                    <td>Bộ sưu tập</td>
                                    <td>Quản Trị</td>
                                    <td>1,200</td>
                                    <td>07/06/2025</td>
                                    <td>08/06/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-published">Đã xuất bản</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(1)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 1)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(1)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Hủy xuất bản" onclick="adnewsTogglePublish(1, 'draft')">Hủy</button>
                                    </td>
                                </tr>
                                <tr data-id="2" data-title="Khuyến mãi mùa lễ hội" data-category="Khuyến mãi" data-author="Nhân Viên" data-date="2025-06-05" data-status="Bản nháp" data-excerpt="Ưu đãi lớn mùa lễ." data-content="Chi tiết khuyến mãi..." data-tags="khuyến mãi, lễ hội" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Khuyến mãi mùa lễ hội</td>
                                    <td>Khuyến mãi</td>
                                    <td>Nhân Viên</td>
                                    <td>800</td>
                                    <td>05/06/2025</td>
                                    <td>06/06/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-draft">Bản nháp</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(2)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 2)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(2)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Xuất bản" onclick="adnewsTogglePublish(2, 'publish')">Xuất bản</button>
                                    </td>
                                </tr>
                                <tr data-id="3" data-title="Xu hướng thời trang 2025" data-category="Tin tức chung" data-author="Quản Trị" data-date="2025-06-03" data-status="Đã xuất bản" data-excerpt="Khám phá xu hướng mới." data-content="Chi tiết xu hướng 2025..." data-tags="xu hướng, thời trang" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Xu hướng thời trang 2025</td>
                                    <td>Tin tức chung</td>
                                    <td>Quản Trị</td>
                                    <td>1,500</td>
                                    <td>03/06/2025</td>
                                    <td>04/06/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-published">Đã xuất bản</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(3)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 3)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(3)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Hủy xuất bản" onclick="adnewsTogglePublish(3, 'draft')">Hủy</button>
                                    </td>
                                </tr>
                                <tr data-id="4" data-title="Black Friday Sale" data-category="Khuyến mãi" data-author="Nhân Viên" data-date="2025-06-01" data-status="Bản nháp" data-excerpt="Ưu đãi Black Friday." data-content="Chi tiết sale..." data-tags="black friday, khuyến mãi" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Black Friday Sale</td>
                                    <td>Khuyến mãi</td>
                                    <td>Nhân Viên</td>
                                    <td>600</td>
                                    <td>01/06/2025</td>
                                    <td>02/06/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-draft">Bản nháp</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(4)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 4)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(4)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Xuất bản" onclick="adnewsTogglePublish(4, 'publish')">Xuất bản</button>
                                    </td>
                                </tr>
                                <tr data-id="5" data-title="Summer Collection 2025" data-category="Bộ sưu tập" data-author="Quản Trị" data-date="2025-05-30" data-status="Đã xuất bản" data-excerpt="Bộ sưu tập mùa hè mới." data-content="Chi tiết bộ sưu tập mùa hè..." data-tags="thời trang, mùa hè" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Summer Collection 2025</td>
                                    <td>Bộ sưu tập</td>
                                    <td>Quản Trị</td>
                                    <td>1,100</td>
                                    <td>30/05/2025</td>
                                    <td>31/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-published">Đã xuất bản</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(5)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 5)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(5)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Hủy xuất bản" onclick="adnewsTogglePublish(5, 'draft')">Hủy</button>
                                    </td>
                                </tr>
                                <tr data-id="6" data-title="Mid-Year Sale" data-category="Khuyến mãi" data-author="Nhân Viên" data-date="2025-05-28" data-status="Bản nháp" data-excerpt="Ưu đãi giữa năm." data-content="Chi tiết khuyến mãi giữa năm..." data-tags="khuyến mãi, sale" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Mid-Year Sale</td>
                                    <td>Khuyến mãi</td>
                                    <td>Nhân Viên</td>
                                    <td>700</td>
                                    <td>28/05/2025</td>
                                    <td>29/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-draft">Bản nháp</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(6)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 6)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(6)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Xuất bản" onclick="adnewsTogglePublish(6, 'publish')">Xuất bản</button>
                                    </td>
                                </tr>
                                <tr data-id="7" data-title="Spring Trends 2025" data-category="Tin tức chung" data-author="Quản Trị" data-date="2025-05-25" data-status="Đã xuất bản" data-excerpt="Xu hướng mùa xuân." data-content="Chi tiết xu hướng mùa xuân..." data-tags="xu hướng, mùa xuân" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Spring Trends 2025</td>
                                    <td>Tin tức chung</td>
                                    <td>Quản Trị</td>
                                    <td>1,300</td>
                                    <td>25/05/2025</td>
                                    <td>26/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-published">Đã xuất bản</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(7)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 7)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(7)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Hủy xuất bản" onclick="adnewsTogglePublish(7, 'draft')">Hủy</button>
                                    </td>
                                </tr>
                                <tr data-id="8" data-title="End of Season Sale" data-category="Khuyến mãi" data-author="Nhân Viên" data-date="2025-05-20" data-status="Bản nháp" data-excerpt="Sale cuối mùa." data-content="Chi tiết sale cuối mùa..." data-tags="sale, khuyến mãi" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>End of Season Sale</td>
                                    <td>Khuyến mãi</td>
                                    <td>Nhân Viên</td>
                                    <td>500</td>
                                    <td>20/05/2025</td>
                                    <td>21/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-draft">Bản nháp</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(8)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 8)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(8)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Xuất bản" onclick="adnewsTogglePublish(8, 'publish')">Xuất bản</button>
                                    </td>
                                </tr>
                                <tr data-id="9" data-title="Winter Collection Preview" data-category="Bộ sưu tập" data-author="Quản Trị" data-date="2025-05-15" data-status="Đã xuất bản" data-excerpt="Xem trước bộ sưu tập đông." data-content="Chi tiết bộ sưu tập đông..." data-tags="thời trang, mùa đông" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Winter Collection Preview</td>
                                    <td>Bộ sưu tập</td>
                                    <td>Quản Trị</td>
                                    <td>1,400</td>
                                    <td>15/05/2025</td>
                                    <td>16/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-published">Đã xuất bản</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(9)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 9)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(9)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Hủy xuất bản" onclick="adnewsTogglePublish(9, 'draft')">Hủy</button>
                                    </td>
                                </tr>
                                <tr data-id="10" data-title="New Year Promo" data-category="Khuyến mãi" data-author="Nhân Viên" data-date="2025-05-10" data-status="Bản nháp" data-excerpt="Khuyến mãi năm mới." data-content="Chi tiết khuyến mãi năm mới..." data-tags="khuyến mãi, năm mới" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>New Year Promo</td>
                                    <td>Khuyến mãi</td>
                                    <td>Nhân Viên</td>
                                    <td>900</td>
                                    <td>10/05/2025</td>
                                    <td>11/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-draft">Bản nháp</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(10)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 10)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(10)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Xuất bản" onclick="adnewsTogglePublish(10, 'publish')">Xuất bản</button>
                                    </td>
                                </tr>
                                <tr data-id="11" data-title="Fashion Week Highlights" data-category="Tin tức chung" data-author="Quản Trị" data-date="2025-05-05" data-status="Đã xuất bản" data-excerpt="Điểm nhấn tuần lễ thời trang." data-content="Chi tiết tuần lễ thời trang..." data-tags="thời trang, fashion week" data-image="https://via.placeholder.com/50">
                                    <td><img src="https://via.placeholder.com/50" alt="Thumbnail" class="adnews-thumbnail"></td>
                                    <td>Fashion Week Highlights</td>
                                    <td>Tin tức chung</td>
                                    <td>Quản Trị</td>
                                    <td>1,600</td>
                                    <td>05/05/2025</td>
                                    <td>06/05/2025</td>
                                    <td><span class="adnews-status-badge adnews-status-published">Đã xuất bản</span></td>
                                    <td>
                                        <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Xem trước" onclick="adnewsPreviewNews(11)">Xem</button>
                                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Chỉnh sửa" onclick="adnewsOpenModal('edit', 11)">Sửa</button>
                                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Xóa" onclick="adnewsDeleteNews(11)">Xóa</button>
                                        <button class="adnews-btn adnews-btn-toggle adnews-tooltip" data-tooltip="Hủy xuất bản" onclick="adnewsTogglePublish(11, 'draft')">Hủy</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="adnews-pagination" id="adnews-pagination"></div>
            </div>
            <div class="adnews-tab-content" id="adnews-stats">
                <div class="adnews-data-card">
                    <div class="adnews-table-container">
                        <table class="adnews-data-table">
                            <thead>
                                <tr>
                                    <th>Danh mục</th>
                                    <th>Số bài viết</th>
                                    <th>Lượt xem tổng</th>
                                    <th>Lượt xem trung bình</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Khuyến mãi</td>
                                    <td>4</td>
                                    <td>2,900</td>
                                    <td>725</td>
                                </tr>
                                <tr>
                                    <td>Bộ sưu tập</td>
                                    <td>3</td>
                                    <td>3,700</td>
                                    <td>1,233</td>
                                </tr>
                                <tr>
                                    <td>Tin tức chung</td>
                                    <td>2</td>
                                    <td>2,900</td>
                                    <td>1,450</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="adnews-tab-content" id="adnews-settings">
                <div class="adnews-form-group">
                    <label>Số bài mỗi trang <i class="fas fa-list-ol"></i></label>
                    <select id="adnews-postsPerPage">
                        <option value="5">5</option>
                        <option value="10" selected>10</option>
                        <option value="20">20</option>
                    </select>
                </div>
                <div class="adnews-form-group adnews-checkbox-group">
                    <label><input type="checkbox" checked> Cho phép bình luận</label>
                    <label><input type="checkbox"> Tự động duyệt bình luận</label>
                </div>
                <div class="adnews-form-group">
                    <label>Thêm danh mục mới <i class="fas fa-plus"></i></label>
                    <input type="text" id="adnews-newCategory" placeholder="Nhập tên danh mục">
                    <button class="adnews-btn adnews-btn-primary" onclick="adnewsAddCategory()">Thêm</button>
                </div>
                <div class="adnews-category-list">
                    <div class="adnews-category-item">
                        <span>Khuyến mãi</span>
                        <button class="adnews-btn adnews-btn-outline" onclick="adnewsDeleteCategory('Khuyến mãi')">Xóa</button>
                    </div>
                    <div class="adnews-category-item">
                        <span>Bộ sưu tập</span>
                        <button class="adnews-btn adnews-btn-outline" onclick="adnewsDeleteCategory('Bộ sưu tập')">Xóa</button>
                    </div>
                    <div class="adnews-category-item">
                        <span>Tin tức chung</span>
                        <button class="adnews-btn adnews-btn-outline" onclick="adnewsDeleteCategory('Tin tức chung')">Xóa</button>
                    </div>
                </div>
                <div class="adnews-form-actions">
                    <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Lưu cài đặt" onclick="adnewsSaveSettings()">Lưu</button>
                    <button class="adnews-btn adnews-btn-secondary adnews-tooltip" data-tooltip="Hủy" onclick="adnewsCancelSettings()">Hủy</button>
                </div>
            </div>
            <div class="adnews-modal" id="adnews-newsModal">
                <div class="adnews-modal-content">
                    <h2 id="adnews-modalTitle">Thêm bài viết tin tức</h2>
                    <div class="adnews-form-group">
                        <label>Tiêu đề <i class="fas fa-heading"></i></label>
                        <input type="text" id="adnews-newsTitle" placeholder="Nhập tiêu đề bài viết">
                    </div>
                    <div class="adnews-form-group">
                        <label>Mô tả ngắn (tối đa 200 ký tự) <i class="fas fa-align-left"></i></label>
                        <textarea id="adnews-newsExcerpt" placeholder="Nhập mô tả ngắn"></textarea>
                    </div>
                    <div class="adnews-form-group">
                        <label>Nội dung <i class="fas fa-file-alt"></i></label>
                        <textarea id="adnews-newsContent" placeholder="Nhập nội dung bài viết"></textarea>
                    </div>
                    <div class="adnews-form-group">
                        <label>Danh mục <i class="fas fa-list"></i></label>
                        <select id="adnews-newsCategory">
                            <option value="Khuyến mãi">Khuyến mãi</option>
                            <option value="Bộ sưu tập">Bộ sưu tập</option>
                            <option value="Tin tức chung">Tin tức chung</option>
                        </select>
                    </div>
                    <div class="adnews-form-group">
                        <label>Trạng thái <i class="fas fa-info-circle"></i></label>
                        <select id="adnews-newsStatus">
                            <option value="Đã xuất bản">Đã xuất bản</option>
                            <option value="Bản nháp">Bản nháp</option>
                        </select>
                    </div>
                    <div class="adnews-form-group">
                        <label>Tags <i class="fas fa-tags"></i></label>
                        <input type="text" id="adnews-newsTags" placeholder="Nhập tags, cách nhau bằng dấu phẩy">
                    </div>
                    <div class="adnews-form-group">
                        <label>Lịch đăng (tùy chọn) <i class="fas fa-calendar"></i></label>
                        <input type="date" id="adnews-newsDate">
                    </div>
                    <div class="adnews-form-group">
                        <label>Hình ảnh <i class="fas fa-image"></i></label>
                        <input type="file" id="adnews-newsImage" accept="image/*">
                        <img id="adnews-imagePreview" class="adnews-image-preview" alt="Image Preview">
                    </div>
                    <div class="adnews-modal-actions">
                        <button class="adnews-btn adnews-btn-outline adnews-tooltip" data-tooltip="Hủy" onclick="adnewsCloseModal()">Hủy</button>
                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Lưu" onclick="adnewsSaveNews()">Lưu</button>
                    </div>
                </div>
            </div>
            <div class="adnews-modal" id="adnews-previewModal">
                <div class="adnews-modal-content">
                    <h2 id="adnews-previewTitle">Xem bài viết</h2>
                    <img id="adnews-previewImage" class="adnews-image-preview" alt="News Image">
                    <p id="adnews-previewExcerpt" style="margin: 1rem 0; color: var(--text-muted);"></p>
                    <div id="adnews-previewContent" style="font-size: 0.9rem;"></div>
                    <div class="adnews-modal-actions">
                        <button class="adnews-btn adnews-btn-primary adnews-tooltip" data-tooltip="Đóng" onclick="adnewsCloseModal('preview')">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Sidebar interaction
            document.querySelectorAll('.adnews-sidebar-item').forEach(item => {
                item.addEventListener('click', e => {
                    e.preventDefault();
                    document.querySelectorAll('.adnews-sidebar-item').forEach(i => i.classList.remove('adnews-active'));
                    item.classList.add('adnews-active');
                });
            });

            // Tab navigation
            document.querySelectorAll('.adnews-tab-btn').forEach(button => {
                button.addEventListener('click', () => {
                    document.querySelectorAll('.adnews-tab-btn').forEach(btn => btn.classList.remove('adnews-active'));
                    document.querySelectorAll('.adnews-tab-content').forEach(content => content.classList.remove('adnews-active'));
                    button.classList.add('adnews-active');
                    document.getElementById(button.dataset.tab).classList.add('adnews-active');
                });
            });

            // Pagination
            let adnewsCurrentPage = 1;
            let adnewsPostsPerPage = parseInt(document.getElementById('adnews-postsPerPage').value) || 10;
            const adnewsRows = document.querySelectorAll('#adnews-newsTableBody tr');
            const adnewsPagination = document.getElementById('adnews-pagination');

            function adnewsUpdatePagination() {
                const totalPages = Math.ceil(adnewsRows.length / adnewsPostsPerPage);
                adnewsPagination.innerHTML = '';
                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement('button');
                    btn.className = `adnews-pagination-btn${i === adnewsCurrentPage ? ' adnews-active' : ''}`;
                    btn.textContent = i;
                    btn.addEventListener('click', () => {
                        adnewsCurrentPage = i;
                        adnewsUpdateTable();
                    });
                    adnewsPagination.appendChild(btn);
                }
            }

            function adnewsUpdateTable() {
                const start = (adnewsCurrentPage - 1) * adnewsPostsPerPage;
                const end = start + adnewsPostsPerPage;
                adnewsRows.forEach((row, index) => {
                    row.style.display = (index >= start && index < end) ? '' : 'none';
                });
                adnewsUpdatePagination();
            }

            // Filter and search
            const adnewsSearchInput = document.getElementById('adnews-searchInput');
            const adnewsCategoryFilter = document.getElementById('adnews-categoryFilter');
            const adnewsStatusFilter = document.getElementById('adnews-statusFilter');
            const adnewsDateFilter = document.getElementById('adnews-dateFilter');
            const adnewsAuthorFilter = document.getElementById('adnews-authorFilter');

            function adnewsFilterTable() {
                const search = adnewsSearchInput.value.toLowerCase();
                const category = adnewsCategoryFilter.value;
                const status = adnewsStatusFilter.value;
                const date = adnewsDateFilter.value.replace(/-/g, '/');
                const author = adnewsAuthorFilter.value;

                adnewsRows.forEach(row => {
                    const title = row.dataset.title.toLowerCase();
                    const rowCategory = row.dataset.category;
                    const rowStatus = row.dataset.status;
                    const rowDate = row.dataset.date.replace(/-/g, '/');
                    const rowAuthor = row.dataset.author;

                    const matchesSearch = title.includes(search);
                    const matchesCategory = !category || rowCategory === category;
                    const matchesStatus = !status || rowStatus === status;
                    const matchesDate = !date || rowDate.includes(date);
                    const matchesAuthor = !author || rowAuthor === author;

                    row.style.display = matchesSearch && matchesCategory && matchesStatus && matchesDate && matchesAuthor ? '' : 'none';
                });

                adnewsCurrentPage = 1;
                adnewsUpdateTable();
            }

            adnewsSearchInput.addEventListener('input', adnewsFilterTable);
            adnewsCategoryFilter.addEventListener('change', adnewsFilterTable);
            adnewsStatusFilter.addEventListener('change', adnewsFilterTable);
            adnewsDateFilter.addEventListener('change', adnewsFilterTable);
            adnewsAuthorFilter.addEventListener('change', adnewsFilterTable);
            document.getElementById('adnews-postsPerPage').addEventListener('change', () => {
                adnewsPostsPerPage = parseInt(document.getElementById('adnews-postsPerPage').value);
                adnewsCurrentPage = 1;
                adnewsUpdateTable();
            });

            // Form validation
            window.adnewsValidateForm = function() {
                const title = document.getElementById('adnews-newsTitle');
                const excerpt = document.getElementById('adnews-newsExcerpt');
                const content = document.getElementById('adnews-newsContent');
                let hasError = false;

                if (!title.value.trim()) {
                    title.closest('.adnews-form-group').classList.add('adnews-error');
                    title.closest('.adnews-form-group').setAttribute('data-error', 'Vui lòng nhập tiêu đề.');
                    hasError = true;
                } else {
                    title.closest('.adnews-form-group').classList.remove('adnews-error');
                }

                if (!excerpt.value.trim()) {
                    excerpt.closest('.adnews-form-group').classList.add('adnews-error');
                    excerpt.closest('.adnews-form-group').setAttribute('data-error', 'Vui lòng nhập mô tả ngắn.');
                    hasError = true;
                } else if (excerpt.value.length > 200) {
                    excerpt.closest('.adnews-form-group').classList.add('adnews-error');
                    excerpt.closest('.adnews-form-group').setAttribute('data-error', 'Mô tả ngắn không quá 200 ký tự.');
                    hasError = true;
                } else {
                    excerpt.closest('.adnews-form-group').classList.remove('adnews-error');
                }

                if (!content.value.trim()) {
                    content.closest('.adnews-form-group').classList.add('adnews-error');
                    content.closest('.adnews-form-group').setAttribute('data-error', 'Vui lòng nhập nội dung.');
                    hasError = true;
                } else {
                    content.closest('.adnews-form-group').classList.remove('adnews-error');
                }

                return !hasError;
            };

            // Modal handling
            window.adnewsOpenModal = function(mode, id = null) {
                const modal = document.getElementById('adnews-newsModal');
                const modalTitle = document.getElementById('adnews-modalTitle');
                modalTitle.textContent = mode === 'add' ? 'Thêm bài viết tin tức' : 'Chỉnh sửa bài viết tin tức';
                modal.style.display = 'flex';

                if (mode === 'edit' && id) {
                    const row = document.querySelector(`tr[data-id="${id}"]`);
                    document.getElementById('adnews-newsTitle').value = row.dataset.title;
                    document.getElementById('adnews-newsExcerpt').value = row.dataset.excerpt;
                    document.getElementById('adnews-newsContent').value = row.dataset.content;
                    document.getElementById('adnews-newsCategory').value = row.dataset.category;
                    document.getElementById('adnews-newsStatus').value = row.dataset.status;
                    document.getElementById('adnews-newsTags').value = row.dataset.tags;
                    document.getElementById('adnews-newsDate').value = '';
                    document.getElementById('adnews-imagePreview').src = row.dataset.image;
                    document.getElementById('adnews-imagePreview').style.display = 'block';
                } else {
                    document.getElementById('adnews-newsTitle').value = '';
                    document.getElementById('adnews-newsExcerpt').value = '';
                    document.getElementById('adnews-newsContent').value = '';
                    document.getElementById('adnews-newsCategory').value = 'Khuyến mãi';
                    document.getElementById('adnews-newsStatus').value = 'Bản nháp';
                    document.getElementById('adnews-newsTags').value = '';
                    document.getElementById('adnews-newsDate').value = '';
                    document.getElementById('adnews-imagePreview').style.display = 'none';
                }
            };

            window.adnewsCloseModal = function(type = 'news') {
                document.getElementById(type === 'preview' ? 'adnews-previewModal' : 'adnews-newsModal').style.display = 'none';
                const formGroups = document.querySelectorAll('#adnews-newsModal .adnews-form-group');
                formGroups.forEach(group => group.classList.remove('adnews-error'));
            };

            // Preview news
            window.adnewsPreviewNews = function(id) {
                const modal = document.getElementById('adnews-previewModal');
                const previewTitle = document.getElementById('adnews-previewTitle');
                const previewImage = document.getElementById('adnews-previewImage');
                const previewExcerpt = document.getElementById('adnews-previewExcerpt');
                const previewContent = document.getElementById('adnews-previewContent');

                const row = document.querySelector(`tr[data-id="${id}"]`);
                previewTitle.textContent = row.dataset.title;
                previewImage.src = row.dataset.image;
                previewImage.style.display = 'block';
                previewExcerpt.textContent = row.dataset.excerpt;
                previewContent.textContent = row.dataset.content;
                modal.style.display = 'flex';
            };

            // Save news
            window.adnewsSaveNews = function() {
                if (!adnewsValidateForm()) {
                    alert('Vui lòng điền đầy đủ các trường bắt buộc.');
                    return;
                }
                const saveBtn = document.querySelector('#adnews-newsModal .adnews-btn-primary');
                saveBtn.classList.add('adnews-loading');
                saveBtn.disabled = true;
                setTimeout(() => {
                    saveBtn.classList.remove('adnews-loading');
                    saveBtn.disabled = false;
                    alert('Bài viết đã được lưu (demo, không lưu thực tế).');
                    adnewsCloseModal();
                }, 1000);
            };

            // Delete news
            window.adnewsDeleteNews = function(id) {
                if (confirm('Bạn có chắc muốn xóa bài viết này?')) {
                    alert(`Bài viết ID ${id} đã được xóa (demo, không xóa thực tế).`);
                }
            };

            // Toggle publish
            window.adnewsTogglePublish = function(id, action) {
                alert(`Bài viết ID ${id} đã được ${action === 'publish' ? 'xuất bản' : 'hủy xuất bản'} (demo, không thay đổi thực tế).`);
            };

            // Add category
            window.adnewsAddCategory = function() {
                const newCategory = document.getElementById('adnews-newCategory').value.trim();
                if (newCategory) {
                    alert(`Danh mục "${newCategory}" đã được thêm (demo, không lưu thực tế).`);
                    document.getElementById('adnews-newCategory').value = '';
                } else {
                    alert('Vui lòng nhập tên danh mục.');
                }
            };

            // Delete category
            window.adnewsDeleteCategory = function(category) {
                if (confirm(`Bạn có chắc muốn xóa danh mục "${category}"?`)) {
                    alert(`Danh mục "${category}" đã được xóa (demo, không xóa thực tế).`);
                }
            };

            // Save settings
            window.adnewsSaveSettings = function() {
                const saveBtn = document.querySelector('#adnews-settings .adnews-btn-primary');
                saveBtn.classList.add('adnews-loading');
                saveBtn.disabled = true;
                setTimeout(() => {
                    saveBtn.classList.remove('adnews-loading');
                    saveBtn.disabled = false;
                    alert('Cài đặt đã được lưu (demo, không lưu thực tế).');
                }, 1000);
            };

            // Cancel settings
            window.adnewsCancelSettings = function() {
                alert('Đã hủy thay đổi cài đặt.');
                document.getElementById('adnews-postsPerPage').value = '10';
                document.querySelectorAll('#adnews-settings input[type="checkbox"]').forEach(cb => cb.checked = cb.defaultChecked);
                document.getElementById('adnews-newCategory').value = '';
                adnewsPostsPerPage = 10;
                adnewsUpdateTable();
            };

            // Image preview
            document.getElementById('adnews-newsImage').addEventListener('change', () => {
                alert('Chức năng upload hình chỉ là demo, không lưu thực tế.');
            });

            // Initial render
            adnewsUpdateTable();
        });
    </script>
@endsection
