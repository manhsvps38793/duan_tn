@extends('app')

@section('body')
    <div class="ctdh-body">
    <div class="ctdh-container">
        <div class="ctdh-header">
            <h1 class="ctdh-title">Đơn hàng #DH12345</h1>
            <a href="infouser" class="ctdh-back-btn">
                <i class="fas fa-arrow-left"></i> Quay lại hồ sơ
            </a>
        </div>

        <div class="ctdh-summary">
            <div class="ctdh-summary-grid">
                <div class="ctdh-summary-item">
                    <div class="ctdh-summary-label"><i class="fas fa-calendar-alt"></i> Ngày đặt hàng</div>
                    <div class="ctdh-summary-value">15/05/2023</div>
                </div>
                <div class="ctdh-summary-item">
                    <div class="ctdh-summary-label"><i class="fas fa-truck"></i> Trạng thái</div>
                    <div class="ctdh-summary-value">
                        <span class="ctdh-status ctdh-status-delivered">Đã giao hàng</span>
                    </div>
                </div>
                <div class="ctdh-summary-item">
                    <div class="ctdh-summary-label"><i class="fas fa-credit-card"></i> Phương thức thanh toán</div>
                    <div class="ctdh-summary-value">Chuyển khoản ngân hàng</div>
                </div>
                <div class="ctdh-summary-item">
                    <div class="ctdh-summary-label"><i class="fas fa-receipt"></i> Tổng cộng</div>
                    <div class="ctdh-summary-value">1,250,000₫</div>
                </div>
            </div>
        </div>

        <div class="ctdh-details">
            <h2 class="ctdh-section-title"><i class="fas fa-box-open"></i> Chi tiết đơn hàng</h2>

            <table class="ctdh-products">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Tổng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="ctdh-product">
                                <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Áo thun nam" class="ctdh-product-image">
                                <div class="ctdh-product-info">
                                    <div class="ctdh-product-name">Áo thun nam cổ tròn</div>
                                    <div class="ctdh-product-sku">Mã: TSHIRT-001</div>
                                    <div class="ctdh-product-price">350,000₫</div>
                                </div>
                            </div>
                        </td>
                        <td class="ctdh-product-price ctdh-pc">450,000₫</td>
                        <td class="ctdh-product-quantity ctdh-pc">2</td>
                        <td class="ctdh-product-total ctdh-pc">900,000₫</td>
                        <td class="ctdh-mobile">
                            <div class="ctdh-product-price">350,000₫</div>
                            <div  class="ctdh-product-quantity">1</div>
                            <div class="ctdh-product-total">350,000₫</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="ctdh-product">
                                <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=200&q=80" alt="Áo thun nam" class="ctdh-product-image">
                                <div class="ctdh-product-info">
                                    <div class="ctdh-product-name">Áo thun nam cổ tròn</div>
                                    <div class="ctdh-product-sku">Mã: TSHIRT-001</div>
                                    <div class="ctdh-product-price">350,000₫</div>
                                </div>
                            </div>
                        </td>
                        <td class="ctdh-product-price ctdh-pc">450,000₫</td>
                        <td class="ctdh-product-quantity ctdh-pc">2</td>
                        <td class="ctdh-product-total ctdh-pc">900,000₫</td>
                        <td class="ctdh-mobile">
                            <div class="ctdh-product-price">350,000₫</div>
                            <div  class="ctdh-product-quantity">1</div>
                            <div class="ctdh-product-total">350,000₫</div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ctdh-totals">
            <div class="ctdh-totals-grid">
                <div>
                    <h2 class="ctdh-section-title"><i class="fas fa-truck"></i> Thông tin giao hàng</h2>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label">Người nhận</div>
                        <div class="ctdh-summary-value">Nguyễn Văn A</div>
                    </div>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label">Địa chỉ</div>
                        <div class="ctdh-summary-value">123 Đường ABC, Phường XYZ, Quận 1, TP.Hồ Chí Minh</div>
                    </div>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label">Số điện thoại</div>
                        <div class="ctdh-summary-value">0987 654 321</div>
                    </div>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label">Phương thức vận chuyển</div>
                        <div class="ctdh-summary-value">Giao hàng tiêu chuẩn (3-5 ngày)</div>
                    </div>
                </div>

                <div>
                    <h2 class="ctdh-section-title"><i class="fas fa-receipt"></i> Tổng thanh toán</h2>
                    <table class="ctdh-totals-table">
                        <tr>
                            <td class="ctdh-totals-label">Tạm tính</td>
                            <td class="ctdh-totals-value">1,250,000₫</td>
                        </tr>
                        <tr>
                            <td class="ctdh-totals-label">Phí vận chuyển</td>
                            <td class="ctdh-totals-value">0₫</td>
                        </tr>
                        <tr>
                            <td class="ctdh-totals-label">Giảm giá</td>
                            <td class="ctdh-totals-value">-0₫</td>
                        </tr>
                        <tr>
                            <td class="ctdh-totals-label">Tổng cộng</td>
                            <td class="ctdh-totals-value ctdh-totals-total">1,250,000₫</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div class="ctdh-timeline">
                <h2 class="ctdh-section-title"><i class="fas fa-history"></i> Lịch sử đơn hàng</h2>

                <div class="ctdh-timeline-item active">
                    <div class="ctdh-timeline-dot"></div>
                    <div class="ctdh-timeline-date">17/05/2023 - 10:30</div>
                    <div class="ctdh-timeline-title">Đơn hàng đã giao thành công</div>
                    <div class="ctdh-timeline-description">Đơn hàng đã được giao đến địa chỉ của bạn</div>
                </div>

                <div class="ctdh-timeline-item">
                    <div class="ctdh-timeline-dot"></div>
                    <div class="ctdh-timeline-date">16/05/2023 - 08:15</div>
                    <div class="ctdh-timeline-title">Đang giao hàng</div>
                    <div class="ctdh-timeline-description">Đơn hàng đang được vận chuyển bởi đối tác của chúng tôi</div>
                </div>

                <div class="ctdh-timeline-item">
                    <div class="ctdh-timeline-dot"></div>
                    <div class="ctdh-timeline-date">15/05/2023 - 16:45</div>
                    <div class="ctdh-timeline-title">Đã đóng gói</div>
                    <div class="ctdh-timeline-description">Đơn hàng đã được đóng gói và sẵn sàng để vận chuyển</div>
                </div>

                <div class="ctdh-timeline-item">
                    <div class="ctdh-timeline-dot"></div>
                    <div class="ctdh-timeline-date">15/05/2023 - 14:20</div>
                    <div class="ctdh-timeline-title">Đã xác nhận thanh toán</div>
                    <div class="ctdh-timeline-description">Thanh toán của bạn đã được xác nhận</div>
                </div>

                <div class="ctdh-timeline-item">
                    <div class="ctdh-timeline-dot"></div>
                    <div class="ctdh-timeline-date">15/05/2023 - 14:15</div>
                    <div class="ctdh-timeline-title">Đơn hàng đã được đặt</div>
                    <div class="ctdh-timeline-description">Đơn hàng của bạn đã được tiếp nhận</div>
                </div>
            </div>

            <div class="ctdh-actions">
                <button class="ctdh-action-btn ctdh-action-print">
                    <i class="fas fa-print"></i> In hóa đơn
                </button>
                <button class="ctdh-action-btn ctdh-action-help">
                    <i class="fas fa-question-circle"></i> Cần hỗ trợ?
                </button>
            </div>
        </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Print button functionality
            const printBtn = document.querySelector('.ctdh-action-print');
            printBtn.addEventListener('click', function() {
                window.print();
            });

            // Help button functionality
            const helpBtn = document.querySelector('.ctdh-action-help');
            helpBtn.addEventListener('click', function() {
                alert('Vui lòng liên hệ với bộ phận chăm sóc khách hàng qua email support@example.com hoặc số điện thoại 1900 1234 để được hỗ trợ.');
            });
        });
    </script>
@endsection
