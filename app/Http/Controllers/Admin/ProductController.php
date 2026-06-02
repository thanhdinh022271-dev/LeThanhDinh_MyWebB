<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "Product Index - Danh sách sản phẩm";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Product Create - Form thêm sản phẩm";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "Product Store - Lưu sản phẩm mới";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Product Show - Chi tiết sản phẩm ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Product Edit - Form sửa sản phẩm ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "Product Update - Cập nhật sản phẩm ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Product Destroy - Xóa sản phẩm ID: " . $id;
    }

    /**
     * Test 1 - Redirect sử dụng route name
     * Để kiểm tra: /admin/test1
     */
    public function test1()
    {
        return redirect()->route('admin.home');
    }

    /**
     * Test 2 - Redirect sử dụng hardcode URL
     * Để kiểm tra: /admin/test2
     */
    public function test2()
    {
        return redirect('/admin/dashboard');
    }
}
