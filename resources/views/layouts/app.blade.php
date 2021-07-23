<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sekolah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('swiper.6.5.6/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('datatable/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @stack('head')
    </head>
    <body>
        @include('layouts.header')

        @yield('content')

        <footer class="py-32">

        </footer>

        <script src="{{ asset('swiper.6.5.6/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('datatable/datatables.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('after_script')
    </body>
</html>
