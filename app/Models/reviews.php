<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reviews extends Model
{
   public $timestamps = false;
   public function user()
{
    return $this->belongsTo(User::class);
}
}
