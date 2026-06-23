<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Index</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container" style="padding:2rem;">
        <h1>Le Thanh Dinh</h1>

        @if(!empty($items) && count($items))
            <ul>
                @foreach($items as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        @else
            <p>No items to display.</p>
        @endif
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
