@extends('admin.app')

@section('admin.body')
                <div class="aindex-main-content">
                    <div class="aindex-header">
                        <div class="aindex-search-bar">
                            <i class="fas fa-search"></i>
                            <input
                                type="text"
                                placeholder="Tìm kiếm sản phẩm, đơn hàng..."
                            />
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
                            <div class="aindex-metric-value">5.250.000đ</div>
                            <div class="aindex-metric-change aindex-up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+12% so với hôm qua</span>
                            </div>
                        </div>

                        <div class="aindex-metric-card">
                            <div class="aindex-metric-title">
                                <span>Tổng đơn hàng</span>
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                            <div class="aindex-metric-value">24</div>
                            <div class="aindex-metric-change aindex-up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+8% so với hôm qua</span>
                            </div>
                        </div>

                        <div class="aindex-metric-card">
                            <div class="aindex-metric-title">
                                <span>Sản phẩm bán ra</span>
                                <i class="fas fa-box"></i>
                            </div>
                            <div class="aindex-metric-value">58</div>
                            <div class="aindex-metric-change aindex-down">
                                <i class="fas fa-arrow-down"></i>
                                <span>-5% so với hôm qua</span>
                            </div>
                        </div>

                        <div class="aindex-metric-card">
                            <div class="aindex-metric-title">
                                <span>Khách hàng mới</span>
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="aindex-metric-value">14</div>
                            <div class="aindex-metric-change aindex-up">
                                <i class="fas fa-arrow-up"></i>
                                <span>+20% so với hôm qua</span>
                            </div>
                        </div>
                    </div>

                    <div class="aindex-chart-section">
                        <div class="aindex-chart-card">
                            <div class="aindex-chart-header">
                                <h3 class="aindex-chart-title">
                                    Doanh thu tuần này
                                </h3>
                                <span class="aindex-chart-period"
                                    >7 ngày gần nhất</span
                                >
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
                                <span class="aindex-chart-period"
                                    >Top 3 tuần này</span
                                >
                            </div>

                            <div class="aindex-product-item">
                                <div class="aindex-product-image"></div>
                                <div class="aindex-product-info">
                                    <div class="aindex-product-name">
                                        Áo thun nam cổ tròn
                                    </div>
                                    <div class="aindex-product-category">
                                        Áo thun
                                    </div>
                                </div>
                                <div class="aindex-product-stats">
                                    <div class="aindex-product-price">
                                        250.000đ
                                    </div>
                                    <div class="aindex-product-sales">
                                        Đã bán: 42
                                    </div>
                                </div>
                            </div>

                            <div class="aindex-product-item">
                                <div class="aindex-product-image"></div>
                                <div class="aindex-product-info">
                                    <div class="aindex-product-name">
                                        Quần jeans nữ ống rộng
                                    </div>
                                    <div class="aindex-product-category">
                                        Quần jeans
                                    </div>
                                </div>
                                <div class="aindex-product-stats">
                                    <div class="aindex-product-price">
                                        350.000đ
                                    </div>
                                    <div class="aindex-product-sales">
                                        Đã bán: 28
                                    </div>
                                </div>
                            </div>

                            <div class="aindex-product-item">
                                <div class="aindex-product-image"></div>
                                <div class="aindex-product-info">
                                    <div class="aindex-product-name">
                                        Váy liền công sở
                                    </div>
                                    <div class="aindex-product-category">
                                        Váy
                                    </div>
                                </div>
                                <div class="aindex-product-stats">
                                    <div class="aindex-product-price">
                                        450.000đ
                                    </div>
                                    <div class="aindex-product-sales">
                                        Đã bán: 19
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="aindex-data-section">
                        <div class="aindex-data-card">
                            <div class="aindex-data-header">
                                <h3 class="aindex-data-title">
                                    Đơn hàng gần đây
                                </h3>
                                <span class="aindex-data-action"
                                    >Xem tất cả</span
                                >
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
                                            <span
                                                class="aindex-status-badge aindex-status-active"
                                                >Đã giao</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#DH-2455</td>
                                        <td>Trần Thị B</td>
                                        <td>1.250.000đ</td>
                                        <td>
                                            <span
                                                class="aindex-status-badge aindex-status-active"
                                                >Đang giao</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#DH-2454</td>
                                        <td>Lê Văn C</td>
                                        <td>550.000đ</td>
                                        <td>
                                            <span
                                                class="aindex-status-badge aindex-status-inactive"
                                                >Chờ xử lý</span
                                            >
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#DH-2453</td>
                                        <td>Phạm Thị D</td>
                                        <td>950.000đ</td>
                                        <td>
                                            <span
                                                class="aindex-status-badge aindex-status-active"
                                                >Đã thanh toán</span
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="aindex-data-card">
                            <div class="aindex-data-header">
                                <h3 class="aindex-data-title">Bình luận mới</h3>
                                <span class="aindex-data-action"
                                    >Xem tất cả</span
                                >
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
                                                <div
                                                    class="aindex-comment-avatar"
                                                >
                                                    NT
                                                </div>
                                                <div
                                                    class="aindex-comment-name"
                                                >
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
                                            <form
                                                id="comment-reply-form-1"
                                                class="aindex-comment-reply-form"
                                                action="#"
                                                method="POST"
                                            >
                                                <button
                                                    type="button"
                                                    class="aindex-btn aindex-btn-primary"
                                                    data-modal="reply-comment"
                                                    data-id="1"
                                                    data-user="Ngọc Trinh"
                                                    data-comment="Áo đẹp, chất liệu tốt, rất thoải mái. Sẽ ủng hộ shop dài lâu!"
                                                >
                                                    Phản hồi
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="aindex-comment-user">
                                                <div
                                                    class="aindex-comment-avatar"
                                                >
                                                    TL
                                                </div>
                                                <div
                                                    class="aindex-comment-name"
                                                >
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
                                            <form
                                                id="comment-reply-form-2"
                                                class="aindex-comment-reply-form"
                                                action="#"
                                                method="POST"
                                            >
                                                <button
                                                    type="button"
                                                    class="aindex-btn aindex-btn-primary"
                                                    data-modal="reply-comment"
                                                    data-id="2"
                                                    data-user="Thanh Long"
                                                    data-comment="Quần hơi rộng so với size chart, shop có thể đổi size không?"
                                                >
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
                        <input
                            type="text"
                            id="comment-user"
                            name="user"
                            readonly
                            value=""
                        />
                    </div>
                    <div class="aindex-modal-form-group">
                        <label for="comment-content">Bình luận</label>
                        <textarea
                            id="comment-content"
                            name="comment"
                            rows="3"
                            readonly
                        ></textarea>
                    </div>
                    <div class="aindex-modal-form-group">
                        <label for="reply-content">Phản hồi của bạn</label>
                        <textarea
                            id="reply-content"
                            name="reply"
                            rows="4"
                            required
                        ></textarea>
                    </div>
                    <button type="submit" class="aindex-btn aindex-btn-primary">
                        Gửi phản hồi
                    </button>
                </form>
            </div>
        </div>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Kiểm tra xem Chart.js đã tải thành công chưa
                if (typeof Chart === "undefined") {
                    console.error(
                        "Chart.js không tải được. Vui lòng kiểm tra kết nối CDN."
                    );
                    return;
                }

                // Revenue Chart
                const revenueCtx = document
                    .getElementById("revenueChart")
                    .getContext("2d");
                const revenueChart = new Chart(revenueCtx, {
                    type: "line",
                    data: {
                        labels: [
                            "Thứ 2",
                            "Thứ 3",
                            "Thứ 4",
                            "Thứ 5",
                            "Thứ 6",
                            "Thứ 7",
                            "Chủ nhật",
                        ],
                        datasets: [
                            {
                                label: "Doanh thu",
                                data: [
                                    3200000, 4200000, 3800000, 5100000, 4800000,
                                    5500000, 5250000,
                                ],
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
                                data: [35, 42, 38, 48, 45, 52, 58],
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
                                    weight: "600",
                                },
                                bodyFont: {
                                    size: 12,
                                },
                                padding: 12,
                                cornerRadius: 6,
                                boxPadding: 6,
                            },
                        },
                        scales: {
                            y: {
                                beginAtZero: true,
                                grid: {
                                    color: "rgba(229, 231, 235, 0.5)",
                                    borderDash: [3, 3],
                                },
                                ticks: {
                                    font: {
                                        size: 12,
                                    },
                                    callback: function (value) {
                                        if (value >= 1000000) {
                                            return value / 1000000 + "M";
                                        }
                                        return value;
                                    },
                                },
                            },
                            x: {
                                grid: {
                                    display: false,
                                },
                                ticks: {
                                    font: {
                                        size: 12,
                                    },
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

                // Sidebar active item
                const sidebarItems = document.querySelectorAll(
                    ".aindex-sidebar-item"
                );
                sidebarItems.forEach((item) => {
                    item.addEventListener("click", function (e) {
                        e.preventDefault();
                        sidebarItems.forEach((i) =>
                            i.classList.remove("aindex-active")
                        );
                        this.classList.add("aindex-active");
                    });
                });

                // Modal handling
                const modals = document.querySelectorAll(".aindex-modal");
                const modalButtons = document.querySelectorAll("[data-modal]");
                const closeButtons = document.querySelectorAll(
                    ".aindex-modal-close"
                );

                modalButtons.forEach((button) => {
                    button.addEventListener("click", function () {
                        const modalId = this.getAttribute("data-modal");
                        const modal = document.getElementById(
                            `${modalId}-modal`
                        );
                        if (modal) {
                            modal.style.display = "flex";

                            // Populate modal fields if applicable
                            if (modalId === "reply-comment") {
                                const user = this.getAttribute("data-user");
                                const comment =
                                    this.getAttribute("data-comment");
                                document.getElementById("comment-user").value =
                                    user || "";
                                document.getElementById(
                                    "comment-content"
                                ).value = comment || "";
                            }
                        }
                    });
                });

                closeButtons.forEach((button) => {
                    button.addEventListener("click", function () {
                        const modal = this.closest(".aindex-modal");
                        if (modal) {
                            modal.style.display = "none";
                        }
                    });
                });

                // Close modal when clicking outside
                window.addEventListener("click", function (e) {
                    modals.forEach((modal) => {
                        if (e.target === modal) {
                            modal.style.display = "none";
                        }
                    });
                });
            });
        </script>
@endsection