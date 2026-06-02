<!-- Admin Header -->
<header class="admin-header">
    <div class="header-title">
        <h1>
            @yield('page_title', 'Dashboard')
        </h1>
    </div>
    <div class="header-actions">
        <!-- Notifications Button -->
        <div class="btn-group">
            <button class="btn btn-light position-relative" type="button" title="Thông báo">
                <i class="fas fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </button>
        </div>

        <!-- User Profile Dropdown -->
        <div class="dropdown">
            <button class="user-profile dropdown-toggle" type="button" id="userProfileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="user-avatar">A</div>
                <span class="d-none d-sm-inline">Admin User</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userProfileDropdown">
                <li>
                    <a class="dropdown-item" href="/admin/user">
                        <i class="fas fa-user-circle"></i> Hồ sơ
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="/admin/user">
                        <i class="fas fa-cog"></i> Cài đặt
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <a class="dropdown-item" href="/">
                        <i class="fas fa-sign-out-alt"></i> Đăng xuất
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
