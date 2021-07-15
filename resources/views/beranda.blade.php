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

            <div class="swiper-slide">
                <img class="w-full object-cover screen-80-vh" src="{{ asset('images/Headline/image-1.jpg') }}" alt="">
            </div>

            <div class="swiper-slide">
                <img class="w-full object-cover screen-80-vh" src="{{ asset('images/Headline/image-2.jpg') }}" alt="">
            </div>

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
    <div class="grid grid-cols-4 gap-3 items-center py-16 container-pad bg-blueGray-700 text-white">
        <div class="justify-self-center">
            <img src="{{ asset('images/kepsek.jpg') }}" class="h-52 object-cover" alt="" srcset="">
            <div class="mt-1">Ibu yoona SPD</div>
        </div>

        <div class="col-span-3">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
            Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
            exercitationem veritatis iure reprehenderit officia eligendi aut! 
            Impedit, at? Laudantium quibusdam velit vel distinctio dolorum ex 
            hic obcaecati suscipit nulla aperiam. Dolorum, in reprehenderit. Eaque quibusdam reiciendis nulla?
        </div>
    </div>

    <div class="grid grid-cols-3 divide-x container-pad mt-8">
        
        {{-- Daftar Berita Acara --}}
        <div class="col-span-2">
            <div class="font-bold mb-5">Berita & Acara</div>
            <div class="grid grid-cols-1 gap-7">
    
                {{-- Berita --}}
                <div class="flex items-start justify-between">
                    <img src="{{ asset('images/Berita/berita-1.jpg') }}" class="object-cover h-32" alt="">
                    <div class="mx-5">
                        <div class="font-bold text-lg">Air Terjun yang terdapat di Bandung</div>
                        <div class="text-sm">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                            Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                            exercitationem veritatis iure reprehenderit officia eligendi aut!
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('berita.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                
                {{-- Berita --}}
                <div class="flex items-start justify-between">
                    <img src="{{ asset('images/Berita/berita-1.jpg') }}" class="object-cover h-32" alt="">
                    <div class="mx-5">
                        <div class="font-bold text-lg">Air Terjun yang terdapat di Bandung</div>
                        <div class="text-sm">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                            Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                            exercitationem veritatis iure reprehenderit officia eligendi aut!
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('berita.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                
                {{-- Berita --}}
                <div class="flex items-start justify-between">
                    <img src="{{ asset('images/Berita/berita-1.jpg') }}" class="object-cover h-32" alt="">
                    <div class="mx-5">
                        <div class="font-bold text-lg">Air Terjun yang terdapat di Bandung</div>
                        <div class="text-sm">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                            Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                            exercitationem veritatis iure reprehenderit officia eligendi aut!
                        </div>
                        <div class="mt-2">
                            <a href="{{ route('berita.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>


        {{-- Daftar Pengumuman --}}
        <div class="px-5">
            <div class="font-bold mb-5">Pengumuman</div>
            <div class="grid grid-cols-1 divide-y">

                {{-- Pengumuman --}}
                <a href="#" class="link-primary">
                    <div class="flex justify-between items-center py-3">
                        <div class="text-6xl">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div>
                            <div class="font-bold">Sosialisasi 2020/2021</div>
                            <div class="text-gray-600">Sosialisasi Sistem Informasi Sekolah</div>
                        </div>
                    </div>
                </a>
                
                {{-- Pengumuman --}}
                <a href="#" class="link-primary">
                    <div class="flex justify-between items-center py-3">
                        <div class="text-6xl">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div>
                            <div class="font-bold">Sosialisasi 2020/2021</div>
                            <div class="text-gray-600">Sosialisasi Sistem Informasi Sekolah</div>
                        </div>
                    </div>
                </a>
                
                {{-- Pengumuman --}}
                <a href="#" class="link-primary">
                    <div class="flex justify-between items-center py-3">
                        <div class="text-6xl">
                            <i class="fa fa-bullhorn"></i>
                        </div>
                        <div>
                            <div class="font-bold">Sosialisasi 2020/2021</div>
                            <div class="text-gray-600">Sosialisasi Sistem Informasi Sekolah</div>
                        </div>
                    </div>
                </a>

            </div>

            <button class="btn btn-green w-full mt-5">Pengumuman Lainnya</button>

            <hr class="border-1 border-gray-300 my-10"/>

            <div class="font-bold my-5">Kalender Pendidikan</div>
            <div id="calendar"></div>
        </div>

    </div>

</section>

@endsection