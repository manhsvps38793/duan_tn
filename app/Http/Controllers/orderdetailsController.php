<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show($id)
    {
        // Lấy đơn hàng cùng với chi tiết đơn hàng và thông tin biến thể sản phẩm
        $order = Order::with(['orderDetails.productVariant'])
            ->findOrFail($id);

        return view('orders.show', compact('order'));
    }
}