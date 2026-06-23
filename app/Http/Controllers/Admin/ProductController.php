<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('cateid', 'catename')
            ->orderBy('catename')
            ->get();

        $brands = Brand::select('id', 'brandname')
            ->orderBy('brandname')
            ->get();

        return view('admin.products.create', compact('categories', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'productname' => 'required|string|max:150',
            'slug' => 'required|string|max:180|unique:products,slug',
            'price' => 'required|numeric|min:0',
            'pricediscount' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|in:0,1',
            'brandid' => 'nullable|integer|exists:brands,id',
            'cateid' => 'required|integer|exists:categories,cateid',
        ]);

        try {
            Product::create($validated);

            return redirect()->route('admin.product.index')
                ->with('success', 'Thêm sản phẩm thành công.');
        } catch (\Exception $exception) {
            return back()
                ->withInput()
                ->with('error', 'Lỗi khi thêm sản phẩm: ' . $exception->getMessage());
        }
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
        $product = Product::findOrFail($id);

        $categories = Category::select('cateid', 'catename')
            ->orderBy('catename')
            ->get();

        $brands = Brand::select('id', 'brandname')
            ->orderBy('brandname')
            ->get();

        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'productname' => 'required|string|max:150',
            'slug' => 'required|string|max:180|unique:products,slug,' . $product->id,
            'price' => 'required|numeric|min:0',
            'pricediscount' => 'nullable|numeric|min:0',
            'description' => 'nullable|string',
            'status' => 'required|in:0,1',
            'brandid' => 'nullable|integer|exists:brands,id',
            'cateid' => 'required|integer|exists:categories,cateid',
        ]);

        try {
            $product->update($validated);

            return redirect()->route('admin.product.index')
                ->with('success', 'Cập nhật sản phẩm thành công.');
        } catch (\Exception $exception) {
            return back()
                ->withInput()
                ->with('error', 'Lỗi khi cập nhật sản phẩm: ' . $exception->getMessage());
        }
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
