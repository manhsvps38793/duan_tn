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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic-all/ckeditor.js"></script>


    {{-- --}}
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
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script> --}}
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            ClassicEditor
                .create(document.querySelector('#adnews-newsContent'), {
                    toolbar: {
                        items: [
                            'heading', '|',
                            'bold', 'italic', 'underline', 'strikethrough', '|',
                            'link', 'blockQuote', 'code', '|',
                            'bulletedList', 'numberedList', '|',
                            'insertTable', 'mediaEmbed', '|',
                            'imageUpload', '|',
                            'undo', 'redo'
                        ]
                    },
                    simpleUpload: {
                        uploadUrl: '/api/upload-image',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        }
                    },
                    heading: {
                        options: [
                            { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                            { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                            { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                        ]
                    }
                })
                .catch(error => {
                    console.error('There was a problem initializing the editor.', error);
                });
        });
    </script>
</body>

</html>