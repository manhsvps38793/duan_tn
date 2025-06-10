@extends('app')

@section('body')
    <div class="ctdh-body">
        <div class="ctdh-container">
            <div class="ctdh-header">
                <h1 class="ctdh-title">Đơn hàng #{{ str_pad($order->id, 5, '0', STR_PAD_LEFT) }}</h1>
                <a href="{{ route('user') }}" class="ctdh-back-btn">
                    <i class="fas fa-arrow-left"></i> Quay lại hồ sơ
                </a>
            </div>

            <div class="ctdh-summary">
                <div class="ctdh-summary-grid">
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label"><i class="fas fa-calendar-alt"></i> Ngày đặt hàng</div>
                        <div class="ctdh-summary-value">
                            {{ $order->order_date ? $order->order_date->format('d/m/Y') : $order->created_at->format('d/m/Y') }}
                        </div>
                    </div>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label"><i class="fas fa-truck"></i> Trạng thái</div>
                        <div class="ctdh-summary-value">
                            <span class="ctdh-status ctdh-status-{{ $order->status }}">
                                        {{ $order->status == 'delivered' ? 'Đã giao' : ($order->status == 'pending' ? 'Đang giao' : 'Đã hủy') }}</span>
                        </div>
                    </div>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label"><i class="fas fa-credit-card"></i> Phương thức thanh toán</div>
                        <div class="ctdh-summary-value">{{ $order->payment_method ?? 'Chuyển khoản ngân hàng' }}</div>
                    </div>
                    <div class="ctdh-summary-item">
                        <div class="ctdh-summary-label"><i class="fas fa-receipt"></i> Tổng cộng</div>
                        <div class="ctdh-summary-value">{{ number_format($order->total_price ?? $order->total, 0, ',', '.') }}₫</div>
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
                        @foreach ($order->orderDetails as $detail)
                            <tr>
                                <td>
                                    <div class="ctdh-product">
                                        @if ($detail->productVariant && $detail->productVariant->product && $detail->productVariant->product->thumbnail)
                                            <img src="{{ asset($detail->productVariant->product->thumbnail->path) }}" alt="{{ $detail->productVariant->name ?? 'Sản phẩm' }}" class="ctdh-product-image">
                                        @else
                                            <img src="https://via.placeholder.com/200" alt="{{ $detail->productVariant->name ?? 'Sản phẩm' }}" class="ctdh-product-image">
                                        @endif
                                        <div class="ctdh-product-info">
                                            <div class="ctdh-product-name">{{ $detail->productVariant->name ?? $detail->product_name ?? 'Không có thông tin' }}</div>
                                            <div class="ctdh-product-sku">Mã: {{ $detail->productVariant->sku ?? 'N/A' }}</div>
                                            <div class="ctdh-product-price">{{ number_format($detail->unit_price, 0, ',', '.') }}₫</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="ctdh-product-price ctdh-pc">{{ number_format($detail->unit_price, 0, ',', '.') }}₫</td>
                                <td class="ctdh-product-quantity ctdh-pc">{{ $detail->quantity }}</td>
                                <td class="ctdh-product-total ctdh-pc">{{ number_format($detail->unit_price * $detail->quantity, 0, ',', '.') }}₫</td>
                                <td class="ctdh-mobile">
                                    <div class="ctdh-product-price">{{ number_format($detail->unit_price, 0, ',', '.') }}₫</div>
                                    <div class="ctdh-product-quantity">{{ $detail->quantity }}</div>
                                    <div class="ctdh-product-total">{{ number_format($detail->unit_price * $detail->quantity, 0, ',', '.') }}₫</div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="ctdh-totals">
                <div class="ctdh-totals-grid">
                    <div>
                        <h2 class="ctdh-section-title"><i class="fas fa-truck"></i> Thông tin giao hàng</h2>
                        <div class="ctdh-summary-item">
                            <div class="ctdh-summary-label">Người nhận</div>
                            <div class="ctdh-summary-value">{{ $order->user ? $order->user->name : 'Nguyễn Văn A' }}</div>
                        </div>
                        <div class="ctdh-summary-item">
                            <div class="ctdh-summary-label">Địa chỉ</div>
                            <div class="ctdh-summary-value">{{ $order->user ? $order->user->address : '123 Đường ABC, Phường XYZ, Quận 1, TP.HCM' }}</div>
                        </div>
                        <div class="ctdh-summary-item">
                            <div class="ctdh-summary-label">Số điện thoại</div>
                            <div class="ctdh-summary-value">{{ $order->user ? $order->user->phone : '0987 654 321' }}</div>
                        </div>
                        <div class="ctdh-summary-item">
                            <div class="ctdh-summary-label">Phương thức vận chuyển</div>
                            <div class="ctdh-summary-value">{{ 'Giao hàng tiêu chuẩn (3-5 ngày)' }}</div>
                        </div>
                    </div>
                    <div>
                        <h2 class="ctdh-section-title"><i class="fas fa-receipt"></i> Tổng thanh toán</h2>
                        <table class="ctdh-totals-table">
                            <tr>
                                <td class="ctdh-totals-label">Tạm tính</td>
                                <td class="ctdh-totals-value">{{ number_format($order->total_price ?? $order->total, 0, ',', '.') }}₫</td>
                            </tr>
                            <tr>
                                <td class="ctdh-totals-label">Phí vận chuyển</td>
                                <td class="ctdh-totals-value">{{ number_format(0, 0, ',', '.') }}₫</td>
                            </tr>
                            <tr>
                                <td class="ctdh-totals-label">Giảm giá</td>
                                <td class="ctdh-totals-value">{{ number_format($order->voucher_id && $order->voucher ? ($order->voucher->discount ?? 0) : 0, 0, ',', '.') }}₫</td>
                            </tr>
                            <tr>
                                <td class="ctdh-totals-label">Tổng cộng</td>
                                <td class="ctdh-totals-value ctdh-totals-total">{{ number_format($order->total_price ?? $order->total, 0, ',', '.') }}₫</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="ctdh-timeline">
                    <h2 class="ctdh-section-title"><i class="fas fa-history"></i> Lịch sử đơn hàng</h2>
                    @foreach ($histories as $history)
                        <div class="ctdh-timeline-item {{ $history['status'] == 'delivered' ? 'active' : '' }}">
                            <div class="ctdh-timeline-dot"></div>
                            <div class="ctdh-timeline-date">{{ $history['status_date']->format('d/m/Y - H:i') }}</div>
                            <div class="ctdh-timeline-title">{{ $history['title'] }}</div>
                            <div class="ctdh-timeline-description">{{ $history['description'] }}</div>
                        </div>
                    @endforeach
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
            const printBtn = document.querySelector('.ctdh-action-print');
            printBtn.addEventListener('click', function() {
                window.print();
            });

            const helpBtn = document.querySelector('.ctdh-action-help');
            helpBtn.addEventListener('click', function() {
                alert('Vui lòng liên hệ với bộ phận chăm sóc khách hàng qua email support@example.com hoặc số điện thoại 1900 1234 để được hỗ trợ.');
            });
        });
    </script>
@endsection