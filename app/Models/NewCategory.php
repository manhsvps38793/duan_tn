<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewCategory extends Model
{
    protected $table = "new_categories";
    protected $fillable = ['name'];
    public function news()
    {
        return $this->hasMany(News::class, 'category_id');
    }
}
