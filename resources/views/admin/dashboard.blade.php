@extends('admin.layouts.admin')

@section('page_title', 'Dashboard')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="page-header">
    <h2>Dashboard</h2>
    <a href="#" class="btn btn-primary">
        <i class="fas fa-refresh"></i> Tải lại
    </a>
</div>

<!-- Stats Row -->
<div class="row mb-4">
    <div class="col-md-6 col-lg-3">
        <div class="stat-card">
            <div class="stat-title">
                <i class="fas fa-folder"></i> Danh mục
            </div>
            <div class="stat-value">0</div>
            <div class="stat-footer">
                <a href="/admin/category">Xem chi tiết →</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="stat-card success">
            <div class="stat-title">
                <i class="fas fa-tag"></i> Thương hiệu
            </div>
            <div class="stat-value">0</div>
            <div class="stat-footer">
                <a href="/admin/brand">Xem chi tiết →</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="stat-card warning">
            <div class="stat-title">
                <i class="fas fa-box"></i> Sản phẩm
            </div>
            <div class="stat-value">0</div>
            <div class="stat-footer">
                <a href="/admin/product">Xem chi tiết →</a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="stat-card danger">
            <div class="stat-title">
                <i class="fas fa-file-alt"></i> Bài viết
            </div>
            <div class="stat-value">0</div>
            <div class="stat-footer">
                <a href="/admin/post">Xem chi tiết →</a>
            </div>
        </div>
    </div>
</div>

<!-- Welcome Section -->
<div class="admin-card">
    <div class="card-header">
        <i class="fas fa-info-circle"></i> Chào mừng đến với Admin Panel
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
        <div class="admin-card">
            <div class="card-header">
                <i class="fas fa-server"></i> Thông tin hệ thống
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
        <div class="admin-card">
            <div class="card-header">
                <i class="fas fa-link"></i> Các tài nguyên
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="/admin/category">
                            <i class="fas fa-folder"></i> Quản lý Danh mục
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/brand">
                            <i class="fas fa-tag"></i> Quản lý Thương hiệu
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/product">
                            <i class="fas fa-box"></i> Quản lý Sản phẩm
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/post">
                            <i class="fas fa-file-alt"></i> Quản lý Bài viết
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/user">
                            <i class="fas fa-users"></i> Quản lý Người dùng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
