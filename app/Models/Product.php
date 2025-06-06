<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
    public function thumbnail()
    {
        return $this->hasOne(ProductImage::class, 'product_id', 'id')->orderBy('order');
    }

    // sp noi bat
    public function productFeatured($query)
    {
        return $query->where('is_featured', 1);
    }
}
?>
