<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $limit = request()->query('limit', 10);

        $list = Post::select('id','title','slug','status','user_id','created_at')
            ->with(['user' => function($q) { $q->select('id','fullname'); }])
            ->orderBy('id', 'desc')
            ->paginate((int)$limit);

        return view('admin.posts.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Post Create - Form thêm bài viết";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Post Store - Lưu bài viết mới";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Post Show - Chi tiết bài viết ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Post Edit - Form sửa bài viết ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Post Update - Cập nhật bài viết ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Post Destroy - Xóa bài viết ID: " . $id;
    }
}
