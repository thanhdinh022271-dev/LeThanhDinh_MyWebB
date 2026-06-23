<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $limit = (int) $request->query('limit', 10);
        if ($limit <= 0) {
            $limit = 10;
        }

        $list = Category::paginate($limit);

        return view('admin.categories.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'catename' => 'required|string|max:100',
            'slug' => 'required|string|max:150',
            'status' => 'nullable|in:0,1',
            'sort_order' => 'nullable|integer',
            'description' => 'nullable|string',
        ]);

        $data['status'] = $data['status'] ?? 1;

        Category::create($data);

        return redirect()->route('admin.categories.index')->with('success', 'Đã thêm danh mục');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Category Show - Chi tiết loại sản phẩm ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Category Edit - Form sửa loại sản phẩm ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Category Update - Cập nhật loại sản phẩm ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Category Destroy - Xóa loại sản phẩm ID: " . $id;
    }
}
