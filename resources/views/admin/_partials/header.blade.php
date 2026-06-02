<nav class="navbar navbar-light bg-light admin-header sticky-top">
    <div class="container-fluid">
        <span class="navbar-brand">
            <strong>@yield('page_title', 'Admin Dashboard')</strong>
        </span>
        <div class="d-flex align-items-center gap-3">
            <button class="btn btn-outline-secondary position-relative" type="button" title="Thông báo">
                <i class="bi bi-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
            </button>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                    Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person"></i> Hồ sơ</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Cài đặt</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Đăng xuất</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
