<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_variant_id', 'product_name', 'unit_price', 'quantity'];

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class, 'product_variant_id');
    }
        public function UserOrderController()
    {
        return $this->belongsTo(order::class, 'orders');
    }
}