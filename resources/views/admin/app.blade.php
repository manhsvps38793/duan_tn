<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="{{ asset('/css/admin/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/baocao.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/caidat.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/hotro.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/khuyenmai.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/orders.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/products.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/quanlyhinhanh.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/quanlykhachhang.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/quanlykho.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/quanlynguoidung.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin/quanlytintuc.css') }}">


    {{--  --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=League+Gothic&family=Montserrat:wght@100..900&family=Oxanium:wght@200..800&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div class="aindex-body">
        <div class="aindex-container">
            @include('admin.header')

                @yield('admin.body')

            {{-- @include('admin.footer') --}}

        </div>
    </div>
    @stack('scripts')
</body>

</html>
