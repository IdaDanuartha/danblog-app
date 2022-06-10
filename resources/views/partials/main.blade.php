<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Tailwind --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- My Style --}}
    <link href="{{ asset('css/my-style/main.css') }}" rel="stylesheet">

    {{-- Froala Editor --}}
    <link href="{{ asset('../node_modules/froala-editor/css/froala_editor.pkgd.min.css') }}" rel="stylesheet"
        type="text/css" />

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
</head>

<body class="dark:bg-gray-700">
    @include('partials.components.navbar')

    @yield('main')

    @include('partials.components.footer')

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {{-- Froala Editor --}}
    <script type="text/javascript" src="{{ asset('../node_modules/froala-editor/js/froala_editor.pkgd.min.js') }}">
    </script>

    {{-- My Script --}}
    <script src="{{ asset('js/my-script/main.js') }}"></script>

    {{-- Owl Carousel --}}
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    {{-- Flowbite --}}
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</body>

</html>
