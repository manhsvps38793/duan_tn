<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function ProductAll()
    {
        $productAll = Product::with('thumbnail')
            ->select('id', 'name', 'sale', 'price', 'original_price')
            ->get();

        return view('product', ['productAll' => $productAll]);
    }

    public function ProductFeatured()
    {
        $productAll = Product::with('thumbnail')
            ->where('is_featured', 1)
            ->select('id', 'name', 'sale', 'price', 'original_price')
            ->get();

        return view('product', ['productAll' => $productAll]);
    }
}
