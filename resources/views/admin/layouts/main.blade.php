<!DOCTYPE html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Tailwind --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- My style --}}
    <link rel="stylesheet" href="{{ asset('css/my-style/main.css') }}">

    <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('/js/trix.js') }}"></script>

    <title>@yield('title')</title>

</head>

<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

    @include('admin.components.header')

    <main>

        <div class="flex flex-col md:flex-row">
            @include('admin.components.sidebar')

            <section>
                <div id="main" class="main-content flex-1 mt-12 md:mt-2 pb-24 md:pb-5">

                    <div class="bg-gray-800 pt-3">
                        <div class="bg-gradient-to-r from-indigo-900 to-gray-800 p-4 shadow text-2xl text-white">
                            <h1 class="font-bold pl-2">{{ $content_title }}</h1>
                        </div>
                    </div>

                    @yield('content')

                    @include('admin.components.footer')

                </div>
            </section>

        </div>
    </main>

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/index.min.js') }}"></script>

    {{-- My Script --}}
    <script src="{{ asset('js/my-script/admin.js') }}"></script>
    <script src="{{ asset('js/my-script/post.js') }}"></script>

    {{-- Sweetalert2 --}}
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    {{-- Flowbite --}}
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

    <script>
        @if (session('success'))
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2500
            })
        @endif

        @if (session('failed'))
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: "{{ session('failed') }}",
                showConfirmButton: false,
                timer: 2500
            })
        @endif
    </script>


</body>

</html>
