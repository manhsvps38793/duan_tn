<?php

namespace App\Models;
use App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class Product_categories extends Model
{
    public $incrementing = true;
    public $timestamps = false;
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
