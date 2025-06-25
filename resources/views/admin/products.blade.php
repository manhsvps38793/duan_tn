@extends('admin.app')

@section('admin.body')
        <div class="aproducts-main-content">
            <div class="aproducts-header">
                <div class="aproducts-search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Tìm kiếm sản phẩm hoặc mô tả..." />
                </div>
                <div class="aproducts-user-profile">
                    <div class="aproducts-notification-bell">
                        <i class="fas fa-bell"></i>
                    </div>
                    <div class="aproducts-profile-avatar">QT</div>
                </div>
            </div>

            <h1 class="aproducts-page-title">Quản lý sản phẩm</h1>
            <p class="aproducts-page-subtitle">
                Xem và chỉnh sửa danh sách sản phẩm của cửa hàng
            </p>

            <div class="aproducts-actions">
                <div class="aproducts-filter-group">
                    <select id="categoryFilter">
                        <option value="">Tất cả danh mục</option>
                        <option>Áo thun</option>
                        <option>Quần jeans</option>
                        <option>Váy</option>
                        <option>Áo sơ mi</option>
                        <option>Áo khoác</option>
                        <option>Quần tây</option>
                        <option>Áo hoodie</option>
                        <option>Áo polo</option>
                        <option>Quần short</option>
                    </select>
                    <select id="statusFilter">
                        <option value="">Tất cả trạng thái</option>
                        <option value="Còn hàng">Còn hàng</option>
                        <option value="Hết hàng">Hết hàng</option>
                    </select>
                    <select id="saleFilter">
                        <option value="">Tất cả giảm giá</option>
                        <option value="Có giảm giá">Có giảm giá</option>
                        <option value="Không giảm giá">Không giảm giá</option>
                    </select>
                    <input type="number" id="minPrice" placeholder="Giá tối thiểu" min="0" />
                    <input type="number" id="maxPrice" placeholder="Giá tối đa" min="0" />
                </div>
                <button class="aproducts-btn aproducts-btn-primary" onclick="openModal()">
                    Thêm sản phẩm
                </button>
            </div>

            <div class="aproducts-data-card">
                <table class="aproducts-data-table">
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Danh mục</th>
                            <th>Giá</th>
                            <th>Sale</th>
                            <th>Kho</th>
                            <th>Biến thể</th>
                            <th>Trạng thái</th>
                            <th>Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody id="productTableBody">
                        <tr data-id="1"
                            data-variants='[{"size":"M","color":"Trắng","quantity":50},{"size":"L","color":"Đen","quantity":70}]'
                            data-sale="10" data-price="250000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo thun nam cổ tròn" />
                            </td>
                            <td>Áo thun nam cổ tròn</td>
                            <td>Áo thun</td>
                            <td>250.000đ</td>
                            <td><span class="aproducts-sale-badge">10%</span></td>
                            <td>120</td>
                            <td class="aproducts-variants-list">
                                <span>M/Trắng: 50</span>
                                <span>L/Đen: 70</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo thun nam chất cotton thoáng mát, phù hợp mặc hàng ngày.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(1)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(1)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="2"
                            data-variants='[{"size":"S","color":"Xanh","quantity":40},{"size":"M","color":"Đen","quantity":40}]'
                            data-sale="0" data-price="350000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Quần jeans nữ ống rộng" />
                            </td>
                            <td>Quần jeans nữ ống rộng</td>
                            <td>Quần jeans</td>
                            <td>350.000đ</td>
                            <td>
                                <span class="aproducts-sale-badge">Không giảm giá</span>
                            </td>
                            <td>80</td>
                            <td class="aproducts-variants-list">
                                <span>S/Xanh: 40</span>
                                <span>M/Đen: 40</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Quần jeans ống rộng thời trang, chất liệu bền đẹp.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(2)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(2)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="3"
                            data-variants='[{"size":"M","color":"Xám","quantity":30},{"size":"L","color":"Xanh","quantity":25}]'
                            data-sale="15" data-price="300000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo sơ mi nam" />
                            </td>
                            <td>Áo sơ mi nam</td>
                            <td>Áo sơ mi</td>
                            <td>300.000đ</td>
                            <td><span class="aproducts-sale-badge">15%</span></td>
                            <td>55</td>
                            <td class="aproducts-variants-list">
                                <span>M/Xám: 30</span>
                                <span>L/Xanh: 25</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo sơ mi nam lịch lãm, phù hợp công sở.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(3)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(3)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="4"
                            data-variants='[{"size":"S","color":"Hồng","quantity":20},{"size":"M","color":"Trắng","quantity":30}]'
                            data-sale="20" data-price="450000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Váy maxi" />
                            </td>
                            <td>Váy maxi</td>
                            <td>Váy</td>
                            <td>450.000đ</td>
                            <td><span class="aproducts-sale-badge">20%</span></td>
                            <td>50</td>
                            <td class="aproducts-variants-list">
                                <span>S/Hồng: 20</span>
                                <span>M/Trắng: 30</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Váy maxi nhẹ nhàng, phù hợp dạo phố hoặc đi biển.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(4)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(4)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="5"
                            data-variants='[{"size":"M","color":"Đen","quantity":15},{"size":"L","color":"Nâu","quantity":20}]'
                            data-sale="0" data-price="400000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Áo khoác denim" />
                            </td>
                            <td>Áo khoác denim</td>
                            <td>Áo khoác</td>
                            <td>400.000đ</td>
                            <td>
                                <span class="aproducts-sale-badge">Không giảm giá</span>
                            </td>
                            <td>35</td>
                            <td class="aproducts-variants-list">
                                <span>M/Đen: 15</span>
                                <span>L/Nâu: 20</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-active">Còn hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Áo khoác denim phong cách, chất liệu dày dặn.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(5)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(5)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                        <tr data-id="6"
                            data-variants='[{"size":"S","color":"Xanh navy","quantity":0},{"size":"M","color":"Đen","quantity":0}]'
                            data-sale="0" data-price="320000">
                            <td>
                                <img class="aproducts-product-image" src="https://via.placeholder.com/48"
                                    alt="Quần tây nam" />
                            </td>
                            <td>Quần tây nam</td>
                            <td>Quần tây</td>
                            <td>320.000đ</td>
                            <td>
                                <span class="aproducts-sale-badge">Không giảm giá</span>
                            </td>
                            <td>0</td>
                            <td class="aproducts-variants-list">
                                <span>S/Xanh navy: 0</span>
                                <span>M/Đen: 0</span>
                            </td>
                            <td>
                                <span class="aproducts-status-badge aproducts-status-inactive">Hết hàng</span>
                            </td>
                            <td class="aproducts-description">
                                Quần tây nam thanh lịch, phù hợp sự kiện trang trọng.
                            </td>
                            <td>
                                <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(6)">
                                    Sửa
                                </button>
                                <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(6)">
                                    Xóa
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="aproducts-pagination" id="pagination"></div>
            </div>

            <div class="aproducts-modal" id="productModal">
                <div class="aproducts-modal-content">
                    <h2 id="modalTitle">Thêm sản phẩm mới</h2>
                    <div class="aproducts-form-group">
                        <label>Hình ảnh sản phẩm</label>
                        <input type="file" id="productImage" accept="image/*" />
                        <img id="imagePreview" class="aproducts-image-preview" src="#" alt="Image Preview" />
                    </div>
                    <div class="aproducts-form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" id="productName" placeholder="Nhập tên sản phẩm" />
                    </div>
                    <div class="aproducts-form-group">
                        <label>Danh mục</label>
                        <select id="productCategory">
                            <option>Áo thun</option>
                            <option>Quần jeans</option>
                            <option>Váy</option>
                            <option>Áo sơ mi</option>
                            <option>Áo khoác</option>
                            <option>Quần tây</option>
                            <option>Áo hoodie</option>
                            <option>Áo polo</option>
                            <option>Quần short</option>
                        </select>
                    </div>
                    <div class="aproducts-form-group">
                        <label>Giá</label>
                        <input type="number" id="productPrice" placeholder="Nhập giá sản phẩm" min="0" />
                    </div>
                    <div class="aproducts-form-group">
                        <label>Sale (%)</label>
                        <input type="number" id="productSale" placeholder="Nhập phần trăm giảm giá (0 nếu không giảm)"
                            min="0" max="100" />
                    </div>
                    <div class="aproducts-form-group">
                        <label>Số lượng trong kho</label>
                        <input type="number" id="productStock" placeholder="Nhập số lượng" min="0" />
                    </div>
                    <div class="aproducts-form-group">
                        <label>Mô tả</label>
                        <textarea id="productDescription" placeholder="Nhập mô tả sản phẩm"></textarea>
                    </div>
                    <div class="aproducts-form-group">
                        <label>Biến thể</label>
                        <div class="aproducts-variant-group" id="variantContainer">
                            <div class="aproducts-variant-item">
                                <input type="text" placeholder="Kích thước" class="variant-size" />
                                <input type="text" placeholder="Màu sắc" class="variant-color" />
                                <input type="number" placeholder="Số lượng" class="variant-quantity" min="0" />
                                <button class="aproducts-btn aproducts-btn-outline" onclick="removeVariant(this)">
                                    X
                                </button>
                            </div>
                        </div>
                        <button class="aproducts-btn aproducts-btn-primary" onclick="addVariant()">
                            Thêm biến thể
                        </button>
                    </div>
                    <div class="aproducts-modal-actions">
                        <button class="aproducts-btn aproducts-btn-outline" onclick="closeModal()">
                            Hủy
                        </button>
                        <button class="aproducts-btn aproducts-btn-primary" onclick="saveProduct()">
                            Lưu
                        </button>
                    </div>
                </div>
            </div>

            <div class="aproducts-modal" id="confirmModal">
                <div class="aproducts-modal-content">
                    <h2>Xác nhận chuyển trang</h2>
                    <p>
                        Bạn có chắc muốn chuyển sang trang khác? Các thay đổi chưa lưu sẽ
                        bị mất.
                    </p>
                    <div class="aproducts-modal-actions">
                        <button class="aproducts-btn aproducts-btn-outline" onclick="closeConfirmModal()">
                            Hủy
                        </button>
                        <button class="aproducts-btn aproducts-btn-primary" id="confirmNavigateBtn">
                            Xác nhận
                        </button>
                    </div>
                </div>
            </div>
        </div>

    <script>
        let pendingNavigation = null;
        let currentPage = 1;
        const productsPerPage = 5;

        document.addEventListener("DOMContentLoaded", function() {
            const sidebarItems = document.querySelectorAll(
                ".aproducts-sidebar-item"
            );
            sidebarItems.forEach((item) => {
                item.addEventListener("click", function(e) {
                    e.preventDefault();
                    if (
                        document.getElementById("productModal").style.display === "flex"
                    ) {
                        pendingNavigation = {
                            type: "sidebar",
                            element: this
                        };
                        openConfirmModal();
                    } else {
                        sidebarItems.forEach((i) =>
                            i.classList.remove("aproducts-active")
                        );
                        this.classList.add("aproducts-active");
                        window.location.href = this.getAttribute("href");
                    }
                });
            });

            // Image preview handler
            document
                .getElementById("productImage")
                .addEventListener("change", function(e) {
                    const file = e.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const preview = document.getElementById("imagePreview");
                            preview.src = e.target.result;
                            preview.style.display = "block";
                        };
                        reader.readAsDataURL(file);
                    }
                });

            // Filter and pagination handlers
            const searchInput = document.getElementById("searchInput");
            const categoryFilter = document.getElementById("categoryFilter");
            const statusFilter = document.getElementById("statusFilter");
            const saleFilter = document.getElementById("saleFilter");
            const minPrice = document.getElementById("minPrice");
            const maxPrice = document.getElementById("maxPrice");

            function applyFiltersAndPaginate() {
                const searchTerm = searchInput.value.toLowerCase();
                const selectedCategory = categoryFilter.value;
                const selectedStatus = statusFilter.value;
                const selectedSale = saleFilter.value;
                const minPriceValue = parseFloat(minPrice.value) || 0;
                const maxPriceValue = parseFloat(maxPrice.value) || Infinity;

                const products = Array.from(
                    document.querySelectorAll("#productTableBody tr")
                );
                const filteredProducts = products.filter((product) => {
                    const name = product.cells[1].textContent.toLowerCase();
                    const description = product.cells[8].textContent.toLowerCase();
                    const category = product.cells[2].textContent;
                    const price = parseFloat(product.getAttribute("data-price"));
                    const sale = parseFloat(product.getAttribute("data-sale"));
                    const status = product.cells[7].textContent;

                    const matchesSearch =
                        searchTerm === "" ||
                        name.includes(searchTerm) ||
                        description.includes(searchTerm);
                    const matchesCategory =
                        selectedCategory === "" || category === selectedCategory;
                    const matchesStatus =
                        selectedStatus === "" || status === selectedStatus;
                    const matchesSale =
                        selectedSale === "" ||
                        (selectedSale === "Có giảm giá" && sale > 0) ||
                        (selectedSale === "Không giảm giá" && sale === 0);
                    const matchesPrice =
                        price >= minPriceValue && price <= maxPriceValue;

                    return (
                        matchesSearch &&
                        matchesCategory &&
                        matchesStatus &&
                        matchesSale &&
                        matchesPrice
                    );
                });

                // Update pagination
                const totalPages = Math.ceil(
                    filteredProducts.length / productsPerPage
                );
                updatePagination(totalPages);

                // Show products for current page
                filteredProducts.forEach((product, index) => {
                    const pageIndex = Math.floor(index / productsPerPage) + 1;
                    product.style.display = pageIndex === currentPage ? "" : "none";
                });
            }

            function updatePagination(totalPages) {
                const pagination = document.getElementById("pagination");
                pagination.innerHTML = "";
                for (let i = 1; i <= totalPages; i++) {
                    const btn = document.createElement("button");
                    btn.className = `aproducts-pagination-btn ${
              i === currentPage ? "active" : ""
            }`;
                    btn.textContent = i;
                    btn.addEventListener("click", () => {
                        currentPage = i;
                        applyFiltersAndPaginate();
                    });
                    pagination.appendChild(btn);
                }
            }

            searchInput.addEventListener("input", () => {
                currentPage = 1;
                applyFiltersAndPaginate();
            });
            categoryFilter.addEventListener("change", () => {
                currentPage = 1;
                applyFiltersAndPaginate();
            });
            statusFilter.addEventListener("change", () => {
                currentPage = 1;
                applyFiltersAndPaginate();
            });
            saleFilter.addEventListener("change", () => {
                currentPage = 1;
                applyFiltersAndPaginate();
            });
            minPrice.addEventListener("input", () => {
                currentPage = 1;
                applyFiltersAndPaginate();
            });
            maxPrice.addEventListener("input", () => {
                currentPage = 1;
                applyFiltersAndPaginate();
            });

            // Initial filter and pagination
            applyFiltersAndPaginate();
        });

        function openModal() {
            document.getElementById("productModal").style.display = "flex";
            document.getElementById("modalTitle").textContent = "Thêm sản phẩm mới";
            document.getElementById("productName").value = "";
            document.getElementById("productCategory").value = "Áo thun";
            document.getElementById("productPrice").value = "";
            document.getElementById("productSale").value = "0";
            document.getElementById("productStock").value = "";
            document.getElementById("productDescription").value = "";
            document.getElementById("imagePreview").style.display = "none";
            document.getElementById("productImage").value = "";
            const variantContainer = document.getElementById("variantContainer");
            variantContainer.innerHTML = `
                <div class="aproducts-variant-item">
                    <input type="text" placeholder="Kích thước" class="variant-size">
                    <input type="text" placeholder="Màu sắc" class="variant-color">
                    <input type="number" placeholder="Số lượng" class="variant-quantity" min="0">
                    <button class="aproducts-btn aproducts-btn-outline" onclick="removeVariant(this)">X</button>
                </div>
            `;
        }

        function closeModal() {
            document.getElementById("productModal").style.display = "none";
        }

        function openConfirmModal() {
            document.getElementById("confirmModal").style.display = "flex";
        }

        function closeConfirmModal() {
            document.getElementById("confirmModal").style.display = "none";
            pendingNavigation = null;
        }

        function addVariant() {
            const variantContainer = document.getElementById("variantContainer");
            const variantItem = document.createElement("div");
            variantItem.className = "aproducts-variant-item";
            variantItem.innerHTML = `
                <input type="text" placeholder="Kích thước" class="variant-size">
                <input type="text" placeholder="Màu sắc" class="variant-color">
                <input type="number" placeholder="Số lượng" class="variant-quantity" min="0">
                <button class="aproducts-btn aproducts-btn-outline" onclick="removeVariant(this)">X</button>
            `;
            variantContainer.appendChild(variantItem);
        }

        function removeVariant(button) {
            if (document.querySelectorAll(".aproducts-variant-item").length > 1) {
                button.parentElement.remove();
            }
        }

        function saveProduct() {
            // Placeholder for Laravel backend integration
            // Simulate adding a new product to demonstrate pagination
            const productTableBody = document.getElementById("productTableBody");
            const newId = productTableBody.children.length + 1;
            const newRow = document.createElement("tr");
            newRow.setAttribute("data-id", newId);
            newRow.setAttribute("data-sale", "0");
            newRow.setAttribute("data-price", "300000");
            newRow.setAttribute(
                "data-variants",
                '[{"size":"M","color":"Xanh","quantity":10}]'
            );
            newRow.innerHTML = `
                <td><img class="aproducts-product-image" src="https://via.placeholder.com/48" alt="Sản phẩm mới"></td>
                <td>Sản phẩm mới</td>
                <td>Áo thun</td>
                <td>300.000đ</td>
                <td><span class="aproducts-sale-badge">Không giảm giá</span></td>
                <td>10</td>
                <td class="aproducts-variants-list"><span>M/Xanh: 10</span></td>
                <td><span class="aproducts-status-badge aproducts-status-active">Còn hàng</span></td>
                <td class="aproducts-description">Sản phẩm mới thêm vào.</td>
                <td>
                    <button class="aproducts-btn aproducts-btn-primary" onclick="editProduct(${newId})">Sửa</button>
                    <button class="aproducts-btn aproducts-btn-outline" onclick="deleteProduct(${newId})">Xóa</button>
                </td>
            `;
            productTableBody.appendChild(newRow);
            currentPage = 1; // Reset to first page
            applyFiltersAndPaginate();
            closeModal();
        }

        function editProduct(id) {
            // Placeholder for Laravel backend integration
            openModal();
            document.getElementById("modalTitle").textContent = "Sửa sản phẩm";
        }

        function deleteProduct(id) {
            // Placeholder for Laravel backend integration
            if (confirm("Bạn có chắc muốn xóa sản phẩm này?")) {
                const product = document.querySelector(`tr[data-id="${id}"]`);
                if (product) {
                    product.remove();
                    currentPage = 1; // Reset to first page
                    applyFiltersAndPaginate();
                }
            }
        }

        document
            .getElementById("confirmNavigateBtn")
            .addEventListener("click", () => {
                if (pendingNavigation && pendingNavigation.type === "sidebar") {
                    const sidebarItems = document.querySelectorAll(
                        ".aproducts-sidebar-item"
                    );
                    sidebarItems.forEach((i) => i.classList.remove("aproducts-active"));
                    pendingNavigation.element.classList.add("aproducts-active");
                    window.location.href =
                        pendingNavigation.element.getAttribute("href");
                }
                closeConfirmModal();
                closeModal();
            });
    </script>
@endsection
