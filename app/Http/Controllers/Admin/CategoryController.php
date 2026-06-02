<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Category Index - Danh sách loại sản phẩm";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Category Create - Form thêm loại sản phẩm";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Category Store - Lưu loại sản phẩm mới";
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
