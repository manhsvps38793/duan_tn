<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class addresses extends Model
{
    protected $fillable = ['user_id', 'address', 'province', 'district', 'ward', 'is_default'];
}
