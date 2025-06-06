<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\product_variants;
use App\Models\sizes;
use App\Models\colors;
use App\Models\reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    function home() {
        $products_sale = Products::with(['images', 'variants'])->where('products.sale', '>', 30)->take(8)->get();
        $products_is_featured = Products::with(['images', 'variants'])->where('is_featured', '>', 0)->take(8)->get();
        $product_categories = DB::table('Product_categories')->select()->get();

        $data = [
            'products_sale' => $products_sale,
            'product_categories' => $product_categories,
            'products_is_featured' => $products_is_featured,
        ];

        return view('home', $data);
    }

    public function detail($id)
    {
        $product_detail = Products::with(['images', 'variants'])->find($id);
        $colors = $product_detail->variants->pluck('color')->unique();
        $sizes = $product_detail->variants->pluck('size')->unique();
        // sản phẩm liên quan
        $products = Products::with(['images', 'variants'])
        ->where('category_id', $product_detail->category_id)
        ->where('id', '!=', $id)
        ->take(4)
        ->get();

        // đánh giá
        $reviewDetail = reviews::with('user')->where('product_id', $id)->get();


        $data =[
            'product_detail' => $product_detail,
            'colors' => $colors,
            'sizes' => $sizes,
            'products' => $products,
            'reviewDetail' => $reviewDetail,
        ];
        return view('detail', $data);
    }

    public function getVariantQuantity(Request $request)
    {
        $productId = (int) $request->query('product_id');

            $colorName = $request->query('color'); // VD: "Red"
            $sizeName = $request->query('size');   // VD: "M"

            $colorId = colors::where('name', $colorName)->value('id');
            $sizeId = sizes::where('name', $sizeName)->value('id');

            $variant = product_variants::where('product_id', $productId)
                ->where('color_id', $colorId)
                ->where('size_id', $sizeId)
                ->first();

        if (!$variant) {
            return response()->json(['quantity' => 0]);
        }

        return response()->json([
            'quantity' => $variant->quantity,
            'sku' => $variant->sku,
        ]);
    }

}
