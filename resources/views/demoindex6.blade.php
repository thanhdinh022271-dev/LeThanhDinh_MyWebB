<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Index 6</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container" style="padding:2rem;">
        <h1>Demo Index 6</h1>
        <p>Xin chào bạn đến với hệ thống {{ $data }}</p>
        <p>Value: {{ $param1 }} - {{ $param2 }}</p>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
