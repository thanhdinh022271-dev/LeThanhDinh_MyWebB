<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Brand Index - Danh sách thương hiệu";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Brand Create - Form thêm thương hiệu";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Brand Store - Lưu thương hiệu mới";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Brand Show - Chi tiết thương hiệu ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Brand Edit - Form sửa thương hiệu ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Brand Update - Cập nhật thương hiệu ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Brand Destroy - Xóa thương hiệu ID: " . $id;
    }
}
