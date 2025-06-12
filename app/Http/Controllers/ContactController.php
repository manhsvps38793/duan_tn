<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactReplyMail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'nullable',
            'subject' => 'nullable',
            'message' => 'required',
        ]);

        // xl chomail adminadmin
        Mail::send('emails.contact', ['data' => $data], function ($message) use ($data) {
            $message->to('trandinhkhoi842005@gmail.com')
                    ->subject('Mấy bé người dùng kìa admin kkkkkk website: ' . ($data['subject'] ?? 'Không có chủ đề'));
        });

        //ph khkh
        Mail::to($data['email'])->send(new ContactReplyMail($data['name']));
        return back()->with('success', 'Tin nhắn của bạn đã được gửi thành công!');
    }
}
