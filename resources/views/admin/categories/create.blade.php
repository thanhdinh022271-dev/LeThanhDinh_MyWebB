@extends('admin.layouts.admin')

@section('page_title', 'Thêm danh mục')

@section('title', 'Thêm danh mục - Admin Panel')

@section('content')
<div class="page-header">
    <h2>Thêm danh mục</h2>
</div>

<div class="admin-card">
    <div class="card-body">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tên danh mục</label>
                <input type="text" name="catename" class="form-control" value="{{ old('catename') }}" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" name="slug" class="form-control" value="{{ old('slug') }}" required />
            </div>
            <div class="mb-3">
                <label class="form-label">Trạng thái</label>
                <select name="status" class="form-select">
                    <option value="1" selected>Hiển thị</option>
                    <option value="0">Ẩn</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Thứ tự</label>
                <input type="number" name="sort_order" class="form-control" value="{{ old('sort_order', 0) }}" />
            </div>
            <div class="mb-3">
                <label class="form-label">Mô tả</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
            </div>

            <button class="btn btn-primary">Lưu</button>
        </form>
    </div>
</div>

@endsection
