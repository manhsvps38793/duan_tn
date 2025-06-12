<?php

namespace App\Models;
<<<<<<< HEAD

=======
>>>>>>> 98365e7505556d804f01dbd715ce92289717c1ff
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
<<<<<<< HEAD
    protected $fillable = ['order_id', 'product_variant_id', 'quantity', 'price'];
=======
    protected $fillable = ['order_id', 'product_variant_id', 'quantity', 'unit_price'];
>>>>>>> 98365e7505556d804f01dbd715ce92289717c1ff

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function productVariant()
    {
<<<<<<< HEAD
        return $this->belongsTo(product_variants::class, 'product_variant_id');
    }
}
=======
        return $this->belongsTo(product_variants::class, 'product_variant_id', 'id')->withDefault();
    }
}
>>>>>>> 98365e7505556d804f01dbd715ce92289717c1ff
