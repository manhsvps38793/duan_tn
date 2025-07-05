<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\ProductCountDown;
use Carbon\Carbon;

class PromotionController extends Controller
{
    // Danh sách chương trình khuyến mãi và sản phẩm liên quan
    public function index()
    {
        $promotions = ProductCountDown::with('products')->get();
        $products = Products::all();

        return view('admin.countdown', ['promotions' => $promotions, 'products' => $products]);
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'percent_discount' => 'required|numeric|min:1|max:100',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'product_ids' => 'required|array',
            'product_ids.*' => 'exists:products,id',
            'status' => 'required|in:active,inactive',
        ]);

        $promotion = ProductCountDown::create($validated);
        $promotion->products()->sync($request->product_ids);

        // Cập nhật cột sale trong bảng products
        foreach ($request->product_ids as $productId) {
            $product = Products::find($productId);
            if ($product) {
                $product->sale += $validated['percent_discount']; // cộng dồn
                $product->save();
            }
        }

        return redirect()->route('admin.countdown.index')->with('success', 'Khuyến mãi đã được tạo!');
    }


    public function update(Request $request, ProductCountDown $promotion)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'percent_discount' => 'required|numeric|min:1|max:100',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'product_ids' => 'required|array',
            'product_ids.*' => 'exists:products,id',
            'status' => 'required|in:active,inactive',
        ]);

        // Trừ giá trị discount cũ khỏi các sản phẩm cũ
        foreach ($promotion->products as $oldProduct) {
            $oldProduct->sale -= $promotion->percent_discount;
            if ($oldProduct->sale < 0) $oldProduct->sale = 0;
            $oldProduct->save();
        }

        // Cập nhật thông tin khuyến mãi
        $promotion->update($validated);
        $promotion->products()->sync($request->product_ids);

        // Cộng thêm discount mới vào sản phẩm mới
        foreach ($request->product_ids as $productId) {
            $product = Products::find($productId);
            if ($product) {
                $product->sale += $validated['percent_discount'];
                $product->save();
            }
        }

        return redirect()->route('admin.countdown.index')->with('success', 'Khuyến mãi đã được cập nhật!');
    }

    public function destroy($id)
    {
        $countDown = ProductCountDown::findOrFail($id);
        $countDown->products()->detach();
        $countDown->delete();

        return redirect()->route('admin.countdown.index');
    }
}
