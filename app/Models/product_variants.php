<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class product_variants extends Model
{
    protected $fillable = ['product_id', 'name', 'sku', 'size_id', 'price', 'quantity'];
    public $timestamps = false; // Thêm nếu bảng không có timestamps

    public function product()
    {
        return $this->belongsTo(Products::class);
    }

    public function size()
    {
        return $this->belongsTo(Sizes::class);
    }
      public function color()
    {
        return $this->belongsTo(colors::class);
    }
}