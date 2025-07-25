<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
