<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- ICONS --}}
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('icon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('icon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('icon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('icon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('icon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('icon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('icon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('icon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('icon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('icon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('icon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('icon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <title>Website SMAN 1 TAMBANG</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('swiper.6.5.6/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('datatable/datatables.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        @stack('head')
    </head>
    <body class="font-verdana">
        @include('layouts.header')

        @yield('content')

        <footer class="py-10 px-32 mt-32 bg-blue-900">
            <div class="flex justify-between items-start space-x-5">
                <div class="text-white w-2/5">
                    <div class="flex flex-col justify-between space-y-10">
                        <div>
                            <div class="font-bold text-lg mb-2">Layanan Lainnya</div>
                            <hr class="border-2 border-blue-300 mb-5 w-16"/>
                            <div class="flex flex-col text-sm leading-loose">
                                <div>
                                    <a class="btn hover:text-blue-300" href="{{ route('berita.list') }}">Berita</a>
                                </div>
                                <div>
                                    <a class="btn hover:text-blue-300" href="{{ route('pengumuman.list') }}">Pengumuman</a>
                                </div>
                                <div>
                                    <a class="btn hover:text-blue-300" href="{{ route('kegiatan.list') }}">Agenda Kegiatan</a>
                                </div>
                            </div>
                        </div>

                        <div>
                            Hak Cipta © 2021
                        </div>
                    </div>
                </div>

                <div class="self-center w-1/5">
                    <img src="{{ asset('images/logo.jpg') }}" class="w-44" alt="" srcset="">
                </div>

                <div class="w-2/5 text-white text-right">
                    <div class="font-bold text-lg mb-2">Layanan Informasi</div>
                    <div class="flex justify-end">
                        <hr class="border-2 border-blue-300 mb-5 w-16"/>
                    </div>
                    <div class="flex flex-col text-sm leading-loose">
                        <div class="font-bold">SMA NEGERI 1 TAMBANG</div>
                        <div>Jl. Pekanbaru - Bangkinang Km. 29</div>
                        <div>Riau, Indonesia</div>
                        <div>Telepon : +62 812-7092-6523</div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{ asset('swiper.6.5.6/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('datatable/datatables.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @stack('after_script')
    </body>
</html>
