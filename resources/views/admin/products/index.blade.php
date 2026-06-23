@extends('admin.layouts.admin')

@section('title', 'Danh sách sản phẩm - Admin')

@section('content')
<div class="page-header">
    <h2>Danh sách sản phẩm</h2>
</div>

<div class="admin-card">
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <p>Danh sách sản phẩm đang được phát triển. Quay lại sau để xem thêm.</p>
    </div>
</div>
@endsection
