<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('styles')
</head>
<body>
    <div class="admin-container">
        @include('admin._partials.header')
        
        <div class="admin-body">
            @include('admin._partials.sidebar')
            
            <main class="admin-content">
                @yield('content')
            </main>
        </div>
        
        @include('admin._partials.footer')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
