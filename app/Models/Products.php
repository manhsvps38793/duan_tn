<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    public $incrementing = true;
    public $timestamps = false;

    public function images()
    {
        return $this->hasMany(Product_images::class, 'product_id', 'id');
    }
    public function variants()
    {
        return $this->hasMany(product_variants::class, 'product_id', 'id');
    }
    // của thg lol nam ko biết
    public function thumbnail()
    {
        return $this->hasOne(Product_images::class, 'product_id', 'id')->where('order', 1);
    }

}
