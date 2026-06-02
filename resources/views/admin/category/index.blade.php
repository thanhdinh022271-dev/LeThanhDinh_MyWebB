@extends('admin.layouts.admin')

@section('page_title', 'Danh mục')

@section('title', 'Danh mục - Admin Panel')

@section('content')
<div class="page-header">
    <h2>Danh mục sản phẩm</h2>
    <div class="btn-group-action">
        <a href="{{ route('category.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm danh mục
        </a>
    </div>
</div>

<div class="admin-card">
    <div class="card-header">
        <i class="fas fa-list"></i> Danh sách danh mục
    </div>
    <div class="card-body">
        @if(false) <!-- Change to check if there are categories -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop categories here -->
                    <tr>
                        <td>1</td>
                        <td>Điện tử</td>
                        <td>Các sản phẩm điện tử</td>
                        <td>2026-06-02</td>
                        <td>
                            <a href="{{ route('category.edit', 1) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i> 
                            </a>
                            <form action="{{ route('category.destroy', 1) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                                    <i class="fas fa-trash"></i> Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        @else
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Chưa có danh mục nào. 
                <a href="{{ route('category.create') }}" class="alert-link">Thêm danh mục mới</a>
            </div>
        @endif
    </div>
</div>

<!-- Pagination (if needed) -->
<!-- 
<div class="d-flex justify-content-center">
    {{ $categories->links('pagination::bootstrap-4') }}
</div>
-->
@endsection
