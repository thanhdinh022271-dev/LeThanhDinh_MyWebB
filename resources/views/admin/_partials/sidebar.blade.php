<!-- Admin Sidebar Navigation -->
<aside class="admin-sidebar">
    <!-- Sidebar Logo -->
    <div class="sidebar-logo">
        <h5>
            <i class="fas fa-layer-group"></i> 
            <span>Admin</span>
        </h5>
    </div>

    <!-- Sidebar Menu -->
    <nav class="sidebar-menu">
        <!-- Main Section -->
        <div class="sidebar-title">Main</div>
        <a href="/admin" class="nav-link @if(request()->is('admin') || request()->is('admin/')) active @endif">
            <i class="fas fa-chart-line"></i>
            <span>Dashboard</span>
        </a>

        <!-- Content Management Section -->
        <div class="sidebar-title">Quản lý nội dung</div>
        <a href="/admin/category" class="nav-link @if(request()->is('admin/category*')) active @endif">
            <i class="fas fa-folder"></i>
            <span>Danh mục</span>
        </a>
        <a href="/admin/brand" class="nav-link @if(request()->is('admin/brand*')) active @endif">
            <i class="fas fa-tag"></i>
            <span>Thương hiệu</span>
        </a>
        <a href="/admin/product" class="nav-link @if(request()->is('admin/product*')) active @endif">
            <i class="fas fa-box"></i>
            <span>Sản phẩm</span>
        </a>
        <a href="/admin/post" class="nav-link @if(request()->is('admin/post*')) active @endif">
            <i class="fas fa-file-alt"></i>
            <span>Bài viết</span>
        </a>

        <!-- User Management Section -->
        <div class="sidebar-title">Quản lý người dùng</div>
        <a href="/admin/user" class="nav-link @if(request()->is('admin/user*')) active @endif">
            <i class="fas fa-users"></i>
            <span>Người dùng</span>
        </a>

        <!-- System Section -->
        <div class="sidebar-title">Hệ thống</div>
        <a href="/" class="nav-link">
            <i class="fas fa-home"></i>
            <span>Trang chủ</span>
        </a>
    </nav>
</aside>
