<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class UserOrderController extends Controller
{
    public function show($orderId)
    {
        $order = Order::with(['orderDetails.productVariant', 'user'])
            ->where('id', $orderId)
            ->where('user_id', auth()->id())
            ->firstOrFail();
        $histories = $this->generateOrderHistories($order);

        // Trả về view info_ctdh
        return view('info_ctdh', compact('order', 'histories'));
    }

    private function generateOrderHistories($order)
    {
        $histories = [];
        $status = $order->status;
        $statusDate = $order->created_at;

        $statusMap = [
            'delivered' => [
                'title' => 'Đơn hàng đã giao thành công',
                'description' => 'Đơn hàng đã được giao đến địa chỉ của bạn',
                'date' => $order->updated_at,
            ],
            'shipped' => [
                'title' => 'Đang giao hàng',
                'description' => 'Đơn hàng đang được vận chuyển bởi đối tác của chúng tôi',
                'date' => $order->created_at->addDay(),
            ],
            'packed' => [
                'title' => 'Đã đóng gói',
                'description' => 'Đơn hàng đã được đóng gói và sẵn sàng để vận chuyển',
                'date' => $order->created_at->addHours(2),
            ],
            'confirmed' => [
                'title' => 'Đã xác nhận thanh toán',
                'description' => 'Thanh toán của bạn đã được xác nhận',
                'date' => $order->created_at->addMinutes(5),
            ],
            'placed' => [
                'title' => 'Đơn hàng đã được đặt',
                'description' => 'Đơn hàng của bạn đã được tiếp nhận',
                'date' => $order->created_at,
            ],
            'cancelled' => [
                'title' => 'Đơn hàng đã bị hủy',
                'description' => 'Đơn hàng của bạn đã bị hủy',
                'date' => $order->updated_at,
            ],
        ];

        if (isset($statusMap[$status])) {
            $histories[] = [
                'status' => $status,
                'title' => $statusMap[$status]['title'],
                'description' => $statusMap[$status]['description'],
                'status_date' => $statusMap[$status]['date'],
            ];
        }

        return $histories;
    }
}