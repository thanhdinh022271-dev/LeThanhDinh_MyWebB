<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    <!-- Bootstrap 5.3 CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        :root {
            --bs-primary-rgb: 13, 110, 253;
            --bs-success-rgb: 25, 135, 84;
            --bs-danger-rgb: 220, 53, 69;
            --bs-warning-rgb: 255, 193, 7;
            --bs-info-rgb: 23, 162, 184;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f6fa;
        }

        .admin-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .admin-sidebar {
            position: fixed;
            height: 100vh;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.1);
        }

        .admin-sidebar h4 {
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .admin-sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
            padding-left: 20px;
        }

        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            color: white;
            background-color: rgba(255, 255, 255, 0.15);
            border-left-color: #ffc107;
        }

        .admin-sidebar .nav-link i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
        }

        .admin-sidebar .collapse .nav-link {
            font-size: 14px;
            padding-left: 30px;
        }

        /* Main Content Area */
        .admin-main {
            margin-left: 280px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Header Styles */
        .admin-header {
            background: white;
            padding: 20px 30px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e9ecef;
        }

        .header-title h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
            color: #2c3e50;
        }

        .header-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 15px;
            background: #f8f9fa;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .user-profile:hover {
            background: #e9ecef;
        }

        .user-profile.dropdown-toggle::after {
            margin-left: auto;
        }

        .user-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        /* Content Area */
        .admin-content {
            flex: 1;
            padding: 30px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
        }

        .page-header h2 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
        }

        .btn-group-action {
            display: flex;
            gap: 10px;
        }

        /* Card Styles */
        .admin-card {
            background: white;
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
            margin-bottom: 20px;
        }

        .admin-card .card-header {
            background: #f8f9fa;
            border-bottom: 1px solid #e9ecef;
            padding: 20px;
            font-weight: 600;
            color: #2c3e50;
        }

        .admin-card .card-body {
            padding: 20px;
        }

        /* Table Styles */
        .table {
            margin: 0;
        }

        .table thead th {
            background: #f8f9fa;
            color: #2c3e50;
            font-weight: 600;
            border-bottom: 2px solid #e9ecef;
            padding: 15px;
        }

        .table tbody td {
            padding: 15px;
            vertical-align: middle;
        }

        .table tbody tr:hover {
            background: #f8f9fa;
        }

        /* Button Styles */
        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #5568d3 0%, #6a3d94 100%);
        }

        .btn-success {
            background: #198754;
            border: none;
        }

        .btn-success:hover {
            background: #157347;
        }

        .btn-danger {
            background: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background: #bb2d3b;
        }

        .btn-warning {
            background: #ffc107;
            color: #212529;
            border: none;
        }

        .btn-warning:hover {
            background: #ffb800;
            color: #212529;
        }

        /* Footer Styles */
        .admin-footer {
            background: white;
            padding: 20px 30px;
            border-top: 1px solid #e9ecef;
            color: #6c757d;
            font-size: 14px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-left, .footer-right {
            margin: 0;
        }

        .footer-right a {
            color: #667eea;
            text-decoration: none;
        }

        .footer-right a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .admin-sidebar {
                width: 70px;
            }

            .admin-sidebar .sidebar-title,
            .sidebar-menu .nav-link span {
                display: none;
            }

            .sidebar-menu .nav-link {
                text-align: center;
                padding: 15px;
            }

            .admin-main {
                margin-left: 70px;
            }

            .admin-header {
                flex-direction: column;
                gap: 15px;
                align-items: flex-start;
            }

            .page-header {
                flex-direction: column;
                gap: 15px;
            }

            .btn-group-action {
                width: 100%;
            }

            .btn-group-action .btn {
                flex: 1;
            }
        }

        /* Dashboard Stats Cards */
        .stat-card {
            background: white;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06);
            border-left: 4px solid #667eea;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .stat-card.success {
            border-left-color: #198754;
        }

        .stat-card.warning {
            border-left-color: #ffc107;
        }

        .stat-card.danger {
            border-left-color: #dc3545;
        }

        .stat-card .stat-title {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        .stat-card .stat-value {
            font-size: 32px;
            font-weight: 600;
            color: #2c3e50;
        }

        .stat-card .stat-footer {
            font-size: 12px;
            color: #6c757d;
            margin-top: 10px;
        }

        /* Alert Styles */
        .alert {
            border-radius: 8px;
            border: none;
        }

        .alert-success {
            background: #d1e7dd;
            color: #0f5132;
        }

        .alert-danger {
            background: #f8d7da;
            color: #842029;
        }

        .alert-warning {
            background: #fff3cd;
            color: #664d03;
        }

        .alert-info {
            background: #cfe2ff;
            color: #055160;
        }
    </style>

    @yield('styles')
</head>
<body>
    <div class="admin-wrapper">
        <!-- Sidebar Include -->
        @include('admin._partials.sidebar')

        <!-- Main Content -->
        <div class="admin-main">
            <!-- Header Include -->
            @include('admin._partials.header')

            <!-- Content -->
            <main class="admin-content">
                @yield('content')
            </main>

            <!-- Footer Include -->
            @include('admin._partials.footer')
        </div>
    </div>

    <!-- Bootstrap 5.3 CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- jQuery (Optional, for additional functionality) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @yield('scripts')
</body>
</html>
