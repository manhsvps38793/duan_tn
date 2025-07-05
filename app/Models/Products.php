<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\ProductCountDown;

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
    public function countDowns()
    {
        return $this->belongsToMany(ProductCountDown::class, 'product_count_down_pivot', 'product_id', 'count_down_id');
    }


    // cd
    public function getFinalPriceAttribute()
    {
        $now = now();

        $countdown = $this->countDowns()
            ->where('status', 'active')
            ->where('start_hour', '<=', $now)
            ->where('end_hour', '>=', $now)
            ->first();

        $baseSale = floatval($this->sale);
        $countdownSale = $countdown ? floatval($countdown->percent_discount) : 0;

        $totalSale = min($baseSale + $countdownSale, 100);

        return round($this->original_price * (1 - $totalSale / 100), 2);
    }

    public function getTotalSaleAttribute()
    {
        $now = now();

        $countdown = $this->countDowns()
            ->where('status', 'active')
            ->where('start_hour', '<=', $now)
            ->where('end_hour', '>=', $now)
            ->first();

        $baseSale = floatval($this->sale);
        $countdownSale = $countdown ? floatval($countdown->percent_discount) : 0;

        return min($baseSale + $countdownSale, 100);
    }

}
