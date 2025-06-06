<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    public function ProductAll()
    {
        // Dùng Eloquent, lấy sản phẩm + ảnh đại diện
        $productAll = Products::with('thumbnail')
            ->select('id', 'name', 'sale', 'price', 'original_price')
            ->get();

        return view('product', ['productAll' => $productAll]);
    }
}
