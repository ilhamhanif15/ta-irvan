@extends('layouts.app')

@push('head')
    <style>
        .screen-80-vh {
            height: 80vh;
        }
    </style>
@endpush

@section("content")

<section>
    <div class="swiper-container single-swiper w-full">
        <div class="swiper-wrapper">

            @foreach ($banners as $banner)
                <div class="swiper-slide">
                    <img class="w-full object-cover screen-80-vh" src="{{ $banner }}" alt="">
                </div>
            @endforeach

        </div>
        <div class="hidden md:absolute top-1/2 left-0 custom-swiper-button-prev z-10">
            <i class="fa fa-angle-left text-primary ml-5"></i>
        </div>
        <div class="hidden md:absolute top-1/2 right-0 custom-swiper-button-next z-10">
            <i class="fa fa-angle-right text-primary mr-5"></i>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<section>
    
    {{-- KEPSEK --}}
    <div class="grid grid-cols-5 gap-3 items-center py-16 container-pad bg-blueGray-700 text-white">
        <div class="justify-self-center self-start mt-5">
            <img src="{{ asset('images/profile-picture.webp') }}" class="h-52 object-cover" alt="" srcset="">
            <div class="mt-1">{{ $kepsekName }}</div>
        </div>

        <div class="col-span-4 whitespace-pre-line text-sm">
            {!! $sambutanText !!}
        </div>
    </div>

    <div class="grid grid-cols-3 divide-x container-pad mt-8">
        
        {{-- Daftar Berita Acara --}}
        <div class="col-span-2">
            <div class="font-bold mb-5">Berita & Acara</div>
            <div class="grid grid-cols-1 gap-7">
    
                {{-- Berita --}}
                @foreach ($daftarBerita as $id => $berita)
                    <div class="flex items-start justify-between">
                        <img src="{{ $berita['image_url'] ?? asset('images/gray.png') }}" class="w-64 object-cover h-44" alt="">
                        <div class="mx-5">
                            <div class="font-bold text-lg">{{ $berita['title'] }}</div>
                            <div class="text-sm mt-2">
                                {!! \Str::of(strip_tags($berita['body']))->limit(170, '...') !!}
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('berita.detail', ['idBerita' => $id]) }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
    
            </div>
            <div class="flex justify-end mr-7">
                <a href="{{ route('berita.list') }}" class="btn btn-blue w-full mt-5 block text-center">Lihat Berita Lainnya</a>
            </div>
        </div>


        {{-- Daftar Pengumuman --}}
        <div class="px-5">
            <div class="font-bold mb-5">Pengumuman</div>
            <div class="grid grid-cols-1 divide-y">

                {{-- Pengumuman --}}
                @foreach ($daftarPengumuman as $id => $pengumuman)
                    <a href="{{ route('pengumuman.detail', ['idPengumuman' => $id]) }}" class="link-primary">
                        <div class="flex justify-between items-center py-3">
                            {{-- <div class="text-6xl">
                                <i class="fa fa-bullhorn"></i>
                            </div> --}}
                            <div>
                                <div class="text-sm text-gray-500">diterbitkan : {{ $pengumuman['created_at'] }}</div>
                                <div class="font-bold text-lg">{{ $pengumuman['title'] }}</div>
                                <div class="text-gray-600">
                                    {!! \Str::of(strip_tags($pengumuman['body']))->limit(100, '...') !!}
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>

            <a href="{{ route('pengumuman.list') }}" class="btn btn-green w-full block text-center mt-5">Pengumuman Lainnya</a>

            <hr class="border-1 border-gray-300 my-10"/>

            <div class="font-bold my-5">Kalender Pendidikan</div>
            <div id="calendar"></div>
        </div>

    </div>

</section>

@endsection