@extends('admin.layouts.admin')

@section('page_title', 'Bài viết')

@section('title', 'Bài viết - Admin Panel')

@section('content')
<div class="page-header">
    <h2>Bài viết</h2>
    <div class="btn-group-action">
        <a href="{{ route('admin.post.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Thêm bài viết
        </a>
    </div>
</div>

<div class="admin-card">
    <div class="card-header">
        <i class="fas fa-list"></i> Danh sách bài viết
    </div>
    <div class="card-body">
        @if ($list->isNotEmpty())
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th>Trạng thái</th>
                        <th>Ngày tạo</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->user?->fullname }}</td>
                            <td>{{ $item->status ? 'Hiển thị' : 'Ẩn' }}</td>
                            <td>{{ $item->created_at?->format('Y-m-d') }}</td>
                            <td>
                                <a href="{{ route('admin.post.edit', $item) }}" class="btn btn-sm btn-warning">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.post.destroy', $item) }}" method="POST" style="display: inline;">
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
                <i class="fas fa-info-circle"></i> Chưa có bài viết nào.
                <a href="{{ route('admin.post.create') }}" class="alert-link">Thêm bài viết mới</a>
            </div>
        @endif
    </div>
</div>

@endsection
