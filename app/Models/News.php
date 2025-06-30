<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','category_id', 'description', 'content', 'image', 'author', 'post_date', 'status'];
    public $timestamps = false;
    public function new_category()
    {
        
        return $this->belongsTo(NewCategory::class, 'category_id');
    }
}
