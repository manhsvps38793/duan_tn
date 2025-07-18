<?php

namespace App\Models;

use App\Models\Products;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_categories extends Model
{
    protected $table = 'product_categories';

    protected $fillable = ['name', 'slug', 'image', 'is_active'];

    use SoftDeletes;

    public $incrementing = true;
    public $timestamps = true;
    public function products()
    {
        return $this->hasMany(Products::class, 'category_id', 'id');
    }
}
