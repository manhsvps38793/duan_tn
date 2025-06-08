<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class UserOrderController extends Controller
{
    public function index()
    {
  
        $orders = Order::where('user_id', Auth::id())
            ->with('items')
            ->whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

   
        $user = Auth::user();
        return view('user.profile', compact('user', 'orders'));
    }

    public function show(Order $order)
    {

        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        return view('user.order-details', compact('order'));
    }
}