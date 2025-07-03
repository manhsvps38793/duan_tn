<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');
        $status = $request->query('status');
        $query = Order::latest(); // Sắp xếp từ mới nhất đến cũ nhất

        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('id', 'like', "%{$search}%")
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('name', 'like', "%{$search}%");
                    });
            });
        }

        if ($status && $status !== 'all') {
            $query->where('status', $status);
        }

        $orders = $query->get();
        return view('admin.orders', compact('orders'));
    }

    //xóa mềm
    public function softDelete($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();
            return redirect()->route('admin.orders.index')->with('success', 'Đã xóa mềm đơn hàng thành công!');
        } catch (\Exception $e) {
            return redirect()->route('admin.orders.index')->with('error', 'Không tìm thấy đơn hàng!');
        }
    }
    //sửa
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Chờ xử lý,Đã xác nhận,Đang giao hàng,Thành công,Đã hủy',
        ]);

        $order = Order::findOrFail($id);
        if (in_array($order->status, ['Thành công', 'Đang giao hàng']) && $request->status === 'Đã hủy') {
            return redirect()->route('admin.orders.index')->with('error', 'Không thể chuyển trạng thái khi đang vận chuyển hoặc đã thành công!');
        }

        $order->status = $request->status;
        $order->save();

        return redirect()->route('admin.orders.index')->with('success', 'Cập nhật trạng thái đơn hàng thành công!');
    }


    //xem
    public function show($id)
    {
        $order = Order::with([
            'user',
            'user.defaultAddress',
            'orderDetails.productVariant.product.images',
            'orderDetails.productVariant.size',
            'orderDetails.productVariant.color'
        ])->findOrFail($id);
        return view('admin.orders_show', compact('order'));
    }
}
