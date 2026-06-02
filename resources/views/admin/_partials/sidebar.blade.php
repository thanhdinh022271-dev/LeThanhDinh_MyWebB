<div class="admin-sidebar bg-dark text-white p-3 vh-100" style="width: 280px; overflow-y: auto;">
    <h4 class="mb-4">
        <i class="bi bi-speedometer2"></i>
        Admin Panel
    </h4>
    
    <ul class="nav flex-column">
        <!-- Dashboard -->
        <li class="nav-item">
            <a class="nav-link text-white @if(request()->routeIs('admin.home') || request()->routeIs('admin.index')) active @endif" href="{{ route('admin.home') }}">
                <i class="bi bi-house-door"></i>
                Dashboard
            </a>
        </li>

        <!-- Category Menu (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link text-white" data-bs-toggle="collapse" href="#categoryMenu" role="button" aria-expanded="false" aria-controls="categoryMenu">
                <i class="bi bi-tags"></i>
                Quản lý danh mục
                <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="categoryMenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category.index') }}">
                            Danh sách danh mục
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('category.create') }}">
                            Thêm danh mục
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Brand Menu (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link text-white" data-bs-toggle="collapse" href="#brandMenu" role="button" aria-expanded="false" aria-controls="brandMenu">
                <i class="bi bi-bookmark"></i>
                Quản lý thương hiệu
                <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="brandMenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('brand.index') }}">
                            Danh sách thương hiệu
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('brand.create') }}">
                            Thêm thương hiệu
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Product Menu (Collapsible) -->
        <li class="nav-item">
            <a class="nav-link text-white" data-bs-toggle="collapse" href="#productMenu" role="button" aria-expanded="false" aria-controls="productMenu">
                <i class="bi bi-box-seam"></i>
                Quản lý sản phẩm
                <i class="bi bi-chevron-down float-end"></i>
            </a>
            <div class="collapse" id="productMenu">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('product.index') }}">
                            Danh sách sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('product.create') }}">
                            Thêm sản phẩm
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Post Menu -->
        <li class="nav-item">
            <a class="nav-link text-white @if(request()->routeIs('post.*')) active @endif" href="{{ route('post.index') }}">
                <i class="bi bi-file-earmark-text"></i>
                Bài viết
            </a>
        </li>

        <!-- User Menu -->
        <li class="nav-item">
            <a class="nav-link text-white @if(request()->routeIs('user.*')) active @endif" href="{{ route('user.index') }}">
                <i class="bi bi-people"></i>
                Người dùng
            </a>
        </li>

        <hr class="bg-white">

        <!-- Back to Home -->
        <li class="nav-item">
            <a class="nav-link text-white" href="/">
                <i class="bi bi-house"></i>
                Trang chủ
            </a>
        </li>
    </ul>
</div>
