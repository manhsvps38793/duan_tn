<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserInfoController extends Controller
{
    public function showUserInfo()
    {
   
        $user = Auth::user();

    
        $orders = Order::where('user_id', Auth::id())
            ->with('items')
            ->whereNull('deleted_at')
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

 
        return view('info_user', compact('user', 'orders'));
    }

    public function updateUserInfo(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Người dùng chưa đăng nhập'
            ], 401);
        }

        $rules = [];
        if ($request->has('fullname') || $request->has('email')) {
            $rules = [
                'fullname' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'phone' => 'nullable|string|max:15',
                'birthday' => 'nullable|date_format:Y-m-d',
            ];
        }
        if ($request->has('address')) {
            $rules['address'] = 'nullable|string|max:500';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        // Chỉ cập nhật các trường được gửi lên
        $data = [];
        if ($request->has('fullname')) $data['name'] = $request->input('fullname');
        if ($request->has('email')) $data['email'] = $request->input('email');
        if ($request->has('phone')) $data['phone'] = $request->input('phone');
        if ($request->has('birthday')) $data['birthday'] = $request->input('birthday');
        if ($request->has('address')) $data['address'] = $request->input('address');

        $user->fill($data)->save();

        return response()->json([
            'success' => true,
            'message' => 'Cập nhật thông tin thành công!'
        ]);
    }
}