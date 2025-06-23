<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = true; // Vì bạn đã có sẵn created_at & updated_at trong DB

    protected $table = 'contacts'; // Nếu tên bảng không đổi, có thể bỏ dòng này

    protected $fillable = [
        'name', 'email', 'phone', 'subject', 'message', 'reply'
    ];
}
