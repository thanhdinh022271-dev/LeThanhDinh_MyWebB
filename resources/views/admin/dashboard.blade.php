@extends('admin.layouts.admin')

@section('page_title', 'Dashboard')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="card mb-4">
    <div class="card-header bg-white">
        <h4 class="mb-0">
            <i class="bi bi-speedometer2"></i> Dashboard
        </h4>
    </div>
</div>

<!-- Stats Row -->
<div class="row mb-4">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-2">Danh mục</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                    <i class="bi bi-tags" style="font-size: 2rem; color: #0066cc;"></i>
                </div>
                <small><a href="/admin/category">Xem chi tiết →</a></small>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-2">Thương hiệu</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                    <i class="bi bi-bookmark" style="font-size: 2rem; color: #28a745;"></i>
                </div>
                <small><a href="/admin/brand">Xem chi tiết →</a></small>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-2">Sản phẩm</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                    <i class="bi bi-box-seam" style="font-size: 2rem; color: #ffc107;"></i>
                </div>
                <small><a href="/admin/product">Xem chi tiết →</a></small>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <p class="text-muted mb-2">Bài viết</p>
                        <h3 class="mb-0">0</h3>
                    </div>
                    <i class="bi bi-file-earmark-text" style="font-size: 2rem; color: #dc3545;"></i>
                </div>
                <small><a href="/admin/post">Xem chi tiết →</a></small>
            </div>
        </div>
    </div>
</div>

<!-- Welcome Section -->
<div class="card mb-4">
    <div class="card-header bg-light">
        <h5 class="mb-0">
            <i class="bi bi-info-circle"></i> Chào mừng đến với Admin Panel
        </h5>
    </div>
    <div class="card-body">
        <p>Đây là trang quản trị hệ thống. Bạn có thể quản lý các danh mục, thương hiệu, sản phẩm, bài viết và người dùng từ các menu bên trái.</p>
        <div class="alert alert-info">
            <strong>Lưu ý:</strong> Đây là hệ thống quản lý dùng cho nhân viên kho, kế toán, bán hàng, lãnh đạo và quản trị viên.
        </div>
    </div>
</div>

<!-- System Info Section -->
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="mb-0">
                    <i class="bi bi-cpu"></i> Thông tin hệ thống
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-sm">
                    <tbody>
                        <tr>
                            <td><strong>PHP Version:</strong></td>
                            <td>{{ phpversion() }}</td>
                        </tr>
                        <tr>
                            <td><strong>Laravel Version:</strong></td>
                            <td>{{ app()->version() }}</td>
                        </tr>
                        <tr>
                            <td><strong>Environment:</strong></td>
                            <td><span class="badge bg-primary">{{ config('app.env') }}</span></td>
                        </tr>
                        <tr>
                            <td><strong>Debug Mode:</strong></td>
                            <td>
                                @if(config('app.debug'))
                                    <span class="badge bg-danger">On</span>
                                @else
                                    <span class="badge bg-success">Off</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-light">
                <h5 class="mb-0">
                    <i class="bi bi-link-45deg"></i> Các tài nguyên
                </h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="/admin/category" class="text-decoration-none">
                            <i class="bi bi-tags"></i> Quản lý Danh mục
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/brand" class="text-decoration-none">
                            <i class="bi bi-bookmark"></i> Quản lý Thương hiệu
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/product" class="text-decoration-none">
                            <i class="bi bi-box-seam"></i> Quản lý Sản phẩm
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/post" class="text-decoration-none">
                            <i class="bi bi-file-earmark-text"></i> Quản lý Bài viết
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/user" class="text-decoration-none">
                            <i class="bi bi-people"></i> Quản lý Người dùng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
