<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = false;
    public function new_category()
    {
        return $this->belongsTo(NewCategory::class, 'category_id');
    }
}
