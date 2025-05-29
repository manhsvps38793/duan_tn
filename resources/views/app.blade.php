<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    @stack('styles')
</head>
<body>

    @include('header')

    <div>
        @yield('body')
    </div>

    @include('footer')

</body>
</html>
