<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use App\Models\News;
use Illuminate\Http\Request;

class NewAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::all();
        $categories = NewCategory::all();

        $data = [
            'news' => $news,
            'categories' => $categories,
        ];
        return view('admin.quanlytintuc', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'author' => 'required|string|max:255',
            // 'tags' => 'nullable|string|max:255',
            'post_date' => 'nullable|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        $news = new News();
        $news->title = $validated['title'];
        $news->description = $validated['description'];
        $news->content = $validated['content'];
        $news->category_id = $validated['category_id'];
        $news->post_date = $validated['post_date'] ?? now(); // nếu không có ngày đăng thì dùng ngày hiện tại
        $news->author = auth()->user()->name ?? 'Quản trị'; // hoặc lấy từ session
        $news->status = 'Bản nháp';
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('img'), $fileName);
            $validated['image'] = $fileName;
        }
        News::create($validated);
        return redirect()->back()->with('success', 'Tin tức đã được tạo thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
