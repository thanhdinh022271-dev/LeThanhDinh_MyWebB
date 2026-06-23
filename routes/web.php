<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo1', [DemoController::class, 'index']);
Route::get('/demo2', [DemoController::class, 'index2']);
Route::get('/demo3', [DemoController::class, 'index3']);
Route::get('/demo4/{id}', [DemoController::class, 'index4']);
Route::get('/demo5/{id?}', [DemoController::class, 'index5']);
Route::get('/demo6/{param1}/{param2}', [DemoController::class, 'index6']);

// Admin Resource Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Dashboard - Route name: admin.home
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('home');

    // Alias cho dashboard
    Route::get('/', function () {
        return redirect()->route('admin.home');
    })->name('admin.index');
    
    // Resource Routes
    Route::resource('categories', CategoryController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);
    Route::resource('post', PostController::class);

    // Test Routes - Để kiểm tra redirect
    Route::get('/test1', [ProductController::class, 'test1']);
    Route::get('/test2', [ProductController::class, 'test2']);
});
