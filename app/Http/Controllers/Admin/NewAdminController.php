<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'posted_date' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // 'status' => 'required|in:draft,published',
        ]);

        $news = new News();
        $news->title = $validated['title'];
        $news->description = $validated['description'];
        $news->content = $validated['content'];
        $news->category_id = $validated['category_id'];
        $news->posted_date = $request->posted_date
            ? \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->posted_date)
            : null;
        $news->author = $validated['author']; // hoặc lấy từ session
        $news->status = 'Chưa xuất bản'; // hoặc lấy từ session

        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('img'), $fileName);
            $validated['image'] = $fileName;
        }
        

        News::create($validated);
        return redirect()->back()->with('success', 'Tin tức đã được tạo thành công.');
    }
    public function ImageUpload(Request $request)
    {
        $request->validate([
            'upload' => 'required|image|max:2048'
        ]);
        $path = $request->file('upload')->store('uploads', 'public');
        return response()->json(['url' => Storage::url($path)], 201);
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
        $news = News::findOrFail($id);
        $categories = NewCategory::all();
        $data = [
            'news' => $news,
            'categories' => $categories,
        ];
        if (!$news) {
            return redirect()->back()->with('error', 'Tin tức không tồn tại.');
        }
        return view('admin.edit_news', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'content' => 'required|string',
            'category_id' => 'required|integer',
            'author' => 'required|string|max:255',
            // 'tags' => 'nullable|string|max:255',
            'posted_date' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            // 'status' => 'required|in:draft,published',
        ]);
        $news = News::findOrFail($id);
        if ($request->hasFile('image')) {
            $fileName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('img'), $fileName);
            $validated['image'] = $fileName;
        } else {
            $validated['image'] = $news->image; // giữ nguyên ảnh cũ nếu không có ảnh mới
        }
        $news->posted_date = $request->posted_date
            ? \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->posted_date)
            : null;
        $news->update($validated);
        return redirect()->route('admin.news.index')->with('success', 'Tin tức đã được cập nhật thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = News::findOrFail($id);
        if (!$news) {
            return response()->json(['success' => false, 'message' => 'Tin tức không tồn tại.'], 404);
        }
        $news->delete();
        return response()->json(['success' => true, 'message' => 'Tin tức đã được xóa.']);
    }
}
