<?php

namespace App\Http\Controllers;

use App\Models\addresses;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserInFoController extends Controller
{
    public function ShowInFo()
    {
        $user = Auth::user();
        $addresses = addresses::where('user_id', $user->id)->get();

        $data = [
            'user' => $user,
            'addresses' => $addresses,
        ];
        return view('info_user', $data);
    }

    public function suainfo(Request $request, $id)
    {
        $info = User::find($id);
        if ($request->filled('fullname')) {
            $info->name = $request->input('fullname');
        }
        if ($request->filled('email')) {
            $info->email = $request->input('email');
        }
        if ($request->filled('phone')) {
            $info->phone = $request->input('phone');
        }
        $info->save();

        return redirect()->route('infouser');
    }

    public function mkinfo(Request $request, $id)
    {
        $info = User::find($id);

        // Kiểm tra mật khẩu cũ
        if (!Hash::check($request->old_password, $info->password)) {
            return back()->withErrors(['old_password' => 'Mật khẩu cũ không chính xác.']);
        }

        // Validate mật khẩu mới (nếu có)
        $request->validate([
            'password' => 'nullable|string|min:8|confirmed',
        ], [
            'password.min' => 'Mật khẩu phải ít nhất 8 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
        ]);

        // Cập nhật mật khẩu nếu người dùng nhập
        if ($request->filled('password')) {
            $info->password = Hash::make($request->password);
        }

        $info->save();

        return redirect()->route('infouser');
    }
}
