<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class product_variants extends Model
{
    protected $table = 'product_variants';
    public $timestamps = false;
    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id', 'id');
    }
      // Quan hệ tới bảng colors
    public function color()
    {
        return $this->belongsTo(Colors::class, 'color_id', 'id');
    }
    public function size()
    {
        return $this->belongsTo(sizes::class, 'size_id');
    }
    public function image()
{
    return $this->hasOne(Product_images::class, 'id', 'product_img_id'); // hoặc tuỳ theo quan hệ bạn thiết kế
}
}
