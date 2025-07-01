@extends('admin.app')

@section('admin.body')
    <div class="aindex-main-content">
        <div class="aindex-header">
            <div class="aindex-search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Tìm kiếm sản phẩm, đơn hàng..." />
            </div>
            <div class="aindex-user-profile">
                <div class="aindex-notification-bell">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="aindex-profile-avatar">QT</div>
            </div>
        </div>

        <h1 class="aindex-dashboard-title">Tổng quan cửa hàng</h1>
        <p class="aindex-dashboard-subtitle">
            Theo dõi và phân tích hiệu suất kinh doanh
        </p>

        <div class="aindex-metrics-grid">
            <div class="aindex-metric-card">
                <div class="aindex-metric-title">
                    <span>Doanh thu hôm nay</span>
                    <i class="fas fa-dollar-sign"></i>
                </div>

                <div class="aindex-metric-value">
                    {{ number_format($doanhThuHomNay, 0, ',', '.') }}đ
                </div>

                @if (!is_null($phanTramThayDoiDoanhThu))
                    <div class="aindex-metric-change {{ $phanTramThayDoiDoanhThu >= 0 ? 'aindex-up' : 'aindex-down' }}">
                        <i class="fas {{ $phanTramThayDoiDoanhThu >= 0 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></i>
                        <span>
                            {{ $phanTramThayDoiDoanhThu >= 0 ? '+' : '-' }}
                            {{ number_format(abs($phanTramThayDoiDoanhThu), 2) }}% so với hôm qua
                        </span>
                    </div>
                @else
                    <div class="aindex-metric-change">
                        <span>Không có dữ liệu hôm qua để so sánh</span>
                    </div>
                @endif
            </div>


            <div class="aindex-metric-card">
                <div class="aindex-metric-title">
                    <span>Tổng đơn hàng</span>
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <div class="aindex-metric-value">
                    {{ $soDonHomNay }} đơn
                </div>

                @if (!is_null($phanTramThayDoiSoDon))
                    <div class="aindex-metric-change {{ $phanTramThayDoiSoDon >= 0 ? 'aindex-up' : 'aindex-down' }}">
                        <i class="fas {{ $phanTramThayDoiSoDon >= 0 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></i>
                        <span>
                            {{ $phanTramThayDoiSoDon >= 0 ? '+' : '-' }}
                            {{ number_format(abs($phanTramThayDoiSoDon), 2) }}% so với hôm qua
                        </span>
                    </div>
                @else
                    <div class="aindex-metric-change">
                        <span>Không có dữ liệu hôm qua</span>
                    </div>
                @endif
            </div>

            <div class="aindex-metric-card">
                <div class="aindex-metric-title">
                    <span>Sản phẩm bán ra</span>
                    <i class="fas fa-box"></i>
                </div>

                <div class="aindex-metric-value">
                    {{ $tongSanPhamBanRa }} sản phẩm
                </div>

                @if (!is_null($phanTramThayDoiSanPham))
                    <div class="aindex-metric-change {{ $phanTramThayDoiSanPham >= 0 ? 'aindex-up' : 'aindex-down' }}">
                        <i class="fas {{ $phanTramThayDoiSanPham >= 0 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></i>
                        <span>
                            {{ $phanTramThayDoiSanPham >= 0 ? '+' : '-' }}
                            {{ number_format(abs($phanTramThayDoiSanPham), 2) }}% so với hôm qua
                        </span>
                    </div>
                @else
                    <div class="aindex-metric-change">
                        <span>Không có dữ liệu hôm qua</span>
                    </div>
                @endif
            </div>


            <div class="aindex-metric-card">
                <div class="aindex-metric-title">
                    <span>Khách hàng mới</span>
                    <i class="fas fa-user-plus"></i>
                </div>

                <div class="aindex-metric-value">
                    {{ $khachHangMoi }} người
                </div>

                @if (!is_null($phanTramKhachHangMoi))
                    <div class="aindex-metric-change {{ $phanTramKhachHangMoi >= 0 ? 'aindex-up' : 'aindex-down' }}">
                        <i class="fas {{ $phanTramKhachHangMoi >= 0 ? 'fa-arrow-up' : 'fa-arrow-down' }}"></i>
                        <span>
                            {{ $phanTramKhachHangMoi >= 0 ? '+' : '-' }}
                            {{ number_format(abs($phanTramKhachHangMoi), 2) }}% so với hôm qua
                        </span>
                    </div>
                @else
                    <div class="aindex-metric-change">
                        <span>Không có dữ liệu hôm qua</span>
                    </div>
                @endif
            </div>
        </div>

        <div class="aindex-chart-section">
            <div class="aindex-chart-card">
                <div class="aindex-chart-header">
                    <h3 class="aindex-chart-title">
                        Doanh thu tuần này
                    </h3>
                    <span class="aindex-chart-period">7 ngày gần nhất</span>
                </div>
                <div class="aindex-chart-container">
                    <canvas id="revenueChart"></canvas>
                </div>

            </div>

            <div class="aindex-top-products">
                <div class="aindex-chart-header">
                    <h3 class="aindex-chart-title">
                        Sản phẩm bán chạy
                    </h3>
                    <span class="aindex-chart-period">Top 3 tuần này</span>
                </div>
                @foreach ($topSanPham as $sp)
                    <div class="aindex-product-item">
                        <div class="aindex-product-image">
                            <img src="{{ asset($sp->product_image) }}" alt="{{ $sp->product_name }}"
                                style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;">
                        </div>

                        <div class="aindex-product-info">
                            <div class="aindex-product-name">{{ $sp->product_name }}</div>
                            <div class="aindex-product-category">{{ $sp->category_name ?? 'Chưa phân loại' }}</div>
                        </div>

                        <div class="aindex-product-stats">
                            <div class="aindex-product-price">{{ number_format($sp->price, 0, ',', '.') }}đ</div>
                            <div class="aindex-product-sales">Đã bán: {{ $sp->total_sold }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="aindex-data-section">
            <div class="aindex-data-card">
                <div class="aindex-data-header">
                    <h3 class="aindex-data-title">
                        Đơn hàng gần đây
                    </h3>
                    <span class="aindex-data-action">Xem tất cả</span>
                </div>

                <table class="aindex-data-table">
                    <thead>
                        <tr>
                            <th>Mã đơn</th>
                            <th>Khách hàng</th>
                            <th>Tổng tiền</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#DH-2456</td>
                            <td>Nguyễn Văn A</td>
                            <td>750.000đ</td>
                            <td>
                                <span class="aindex-status-badge aindex-status-active">Đã giao</span>
                            </td>
                        </tr>
                        <tr>
                            <td>#DH-2455</td>
                            <td>Trần Thị B</td>
                            <td>1.250.000đ</td>
                            <td>
                                <span class="aindex-status-badge aindex-status-active">Đang giao</span>
                            </td>
                        </tr>
                        <tr>
                            <td>#DH-2454</td>
                            <td>Lê Văn C</td>
                            <td>550.000đ</td>
                            <td>
                                <span class="aindex-status-badge aindex-status-inactive">Chờ xử lý</span>
                            </td>
                        </tr>
                        <tr>
                            <td>#DH-2453</td>
                            <td>Phạm Thị D</td>
                            <td>950.000đ</td>
                            <td>
                                <span class="aindex-status-badge aindex-status-active">Đã thanh toán</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="aindex-data-card">
                <div class="aindex-data-header">
                    <h3 class="aindex-data-title">Bình luận mới</h3>
                    <span class="aindex-data-action">Xem tất cả</span>
                </div>

                <table class="aindex-data-table">
                    <thead>
                        <tr>
                            <th>Bình luận</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="aindex-comment-user">
                                    <div class="aindex-comment-avatar">
                                        NT
                                    </div>
                                    <div class="aindex-comment-name">
                                        Ngọc Trinh
                                    </div>
                                </div>
                                <div class="aindex-comment-content">
                                    Áo đẹp, chất liệu tốt, rất thoải
                                    mái. Sẽ ủng hộ shop dài lâu!
                                </div>
                                <div class="aindex-comment-time">
                                    30 phút trước
                                </div>
                            </td>
                            <td>
                                <form id="comment-reply-form-1" class="aindex-comment-reply-form" action="#"
                                    method="POST">
                                    <button type="button" class="aindex-btn aindex-btn-primary" data-modal="reply-comment"
                                        data-id="1" data-user="Ngọc Trinh"
                                        data-comment="Áo đẹp, chất liệu tốt, rất thoải mái. Sẽ ủng hộ shop dài lâu!">
                                        Phản hồi
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="aindex-comment-user">
                                    <div class="aindex-comment-avatar">
                                        TL
                                    </div>
                                    <div class="aindex-comment-name">
                                        Thanh Long
                                    </div>
                                </div>
                                <div class="aindex-comment-content">
                                    Quần hơi rộng so với size chart,
                                    shop có thể đổi size không?
                                </div>
                                <div class="aindex-comment-time">
                                    2 giờ trước
                                </div>
                            </td>
                            <td>
                                <form id="comment-reply-form-2" class="aindex-comment-reply-form" action="#"
                                    method="POST">
                                    <button type="button" class="aindex-btn aindex-btn-primary"
                                        data-modal="reply-comment" data-id="2" data-user="Thanh Long"
                                        data-comment="Quần hơi rộng so với size chart, shop có thể đổi size không?">
                                        Phản hồi
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- </div>
        </div> --}}

    <!-- Reply Comment Modal -->
    <div id="reply-comment-modal" class="aindex-modal">
        <div class="aindex-modal-content">
            <div class="aindex-modal-header">
                <h3 class="aindex-modal-title">Phản hồi bình luận</h3>
                <span class="aindex-modal-close">×</span>
            </div>
            <form id="reply-comment-form" action="#" method="POST">
                <div class="aindex-modal-form-group">
                    <label for="comment-user">Người dùng</label>
                    <input type="text" id="comment-user" name="user" readonly value="" />
                </div>
                <div class="aindex-modal-form-group">
                    <label for="comment-content">Bình luận</label>
                    <textarea id="comment-content" name="comment" rows="3" readonly></textarea>
                </div>
                <div class="aindex-modal-form-group">
                    <label for="reply-content">Phản hồi của bạn</label>
                    <textarea id="reply-content" name="reply" rows="4" required></textarea>
                </div>
                <button type="submit" class="aindex-btn aindex-btn-primary">
                    Gửi phản hồi
                </button>
            </form>
        </div>
    </div>
    <script>
        const chartLabels = @json($labels);
        const chartDoanhThu = @json($doanhThuTuan);
        const chartSanPham = @json($sanPhamTuan);
        const chartDonHang = @json($donHangTuan);
        const chartKhachHang = @json($khachHangTuan);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            if (typeof Chart === "undefined") {
                console.error("Chart.js không tải được.");
                return;
            }

            const labels = @json($labels);
            const doanhThuData = @json($doanhThuTuan);
            const sanPhamData = @json($sanPhamTuan);

            const revenueCtx = document.getElementById("revenueChart").getContext("2d");

            new Chart(revenueCtx, {
                type: "line",
                data: {
                    labels: labels,
                    datasets: [{
                            label: "Doanh thu",
                            data: doanhThuData,
                            borderColor: "#4f46e5",
                            backgroundColor: "rgba(79, 70, 229, 0.1)",
                            borderWidth: 2,
                            tension: 0.4,
                            fill: true,
                            pointBackgroundColor: "white",
                            pointBorderColor: "#4f46e5",
                            pointBorderWidth: 2,
                        },
                        {
                            label: "Sản phẩm bán ra",
                            data: sanPhamData,
                            borderColor: "#22c55e",
                            backgroundColor: "rgba(34, 197, 94, 0.1)",
                            borderWidth: 2,
                            tension: 0.4,
                            fill: true,
                            pointBackgroundColor: "white",
                            pointBorderColor: "#22c55e",
                            pointBorderWidth: 2,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: "top",
                            labels: {
                                usePointStyle: true,
                                padding: 20,
                                font: {
                                    size: 12,
                                    family: "Inter",
                                    weight: "500",
                                },
                            },
                        },
                        tooltip: {
                            mode: "index",
                            intersect: false,
                            backgroundColor: "rgba(31, 42, 68, 0.9)",
                            titleFont: {
                                size: 14,
                                weight: "600"
                            },
                            bodyFont: {
                                size: 12
                            },
                            padding: 12,
                            cornerRadius: 6,
                            boxPadding: 6,
                        },
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value >= 1000000 ?
                                        value / 1000000 + "M" :
                                        value.toLocaleString();
                                },
                                font: {
                                    size: 12
                                },
                            },
                            grid: {
                                color: "rgba(229, 231, 235, 0.5)",
                                borderDash: [3, 3],
                            },
                        },
                        x: {
                            ticks: {
                                font: {
                                    size: 12
                                }
                            },
                            grid: {
                                display: false
                            },
                        },
                    },
                    elements: {
                        point: {
                            radius: 4,
                            hoverRadius: 8,
                            hoverBorderWidth: 3,
                        },
                    },
                },
            });
        });
    </script>
@endsection
