<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $fillable = ['name', 'price', 'original_price', 'sale', 'sold_count', 'is_featured'];

    public function images()
    {
        return $this->hasMany(Product_images::class, 'product_id', 'id');
    }

    public function variants()
    {
        return $this->hasMany(product_variants::class, 'product_id', 'id');
    }
    
    public function thumbnail()
    {
        return $this->hasOne(Product_images::class, 'product_id', 'id')->where('order', 1);
    }
<<<<<<< HEAD

}
=======
}
>>>>>>> 98365e7505556d804f01dbd715ce92289717c1ff
