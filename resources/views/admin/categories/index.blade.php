@extends('admin.layouts.admin')

@section('page_title', 'Danh mục')

@section('title', 'Danh mục - Admin Panel')

@section('content')
<div class="page-header">
    <h2>Danh mục sản phẩm</h2>
    <div class="btn-group-action">
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm danh mục
        </a>
    </div>
</div>

<div class="admin-card">
    <div class="card-header">
        <i class="fas fa-list"></i> Danh sách danh mục
    </div>
    <div class="card-body">
        @if ($list->isNotEmpty())
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
                    @foreach ($list as $category)
                        <tr>
                            <td>{{ $category->cateid }}</td>
                            <td>{{ $category->catename }}</td>
                            <td>{{ $category->description }}</td>
                            <td>{{ $category->created_at?->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.categories.destroy', $category) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">
                                        <i class="fas fa-trash"></i> Xóa
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @if ($list->hasPages())
                <div class="d-flex justify-content-center mt-4">
                    {{ $list->links() }}
                </div>
            @endif
        @else
            <div class="alert alert-info">
                <i class="fas fa-info-circle"></i> Chưa có danh mục nào. 
                <a href="{{ route('admin.categories.create') }}" class="alert-link">Thêm danh mục mới</a>
            </div>
        @endif
    </div>
</div>

@endsection
