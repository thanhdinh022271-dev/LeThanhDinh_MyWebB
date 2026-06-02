<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "User Index - Danh sách người dùng";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "User Create - Form thêm người dùng";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "User Store - Lưu người dùng mới";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "User Show - Chi tiết người dùng ID: " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "User Edit - Form sửa người dùng ID: " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "User Update - Cập nhật người dùng ID: " . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "User Destroy - Xóa người dùng ID: " . $id;
    }
}
