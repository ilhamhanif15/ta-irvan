@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        <a href="{{ route('website.home') }}" class="link-primary text-blue-600">Beranda</a>
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        Berita
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-4">BERITA</div>
    <div class="grid grid-cols-2 gap-4">

        {{-- Berita --}}
        <div class="flex items-start justify-between my-4">
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
        <div class="flex items-start justify-between my-4">
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
        <div class="flex items-start justify-between my-4">
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
        <div class="flex items-start justify-between my-4">
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

    {{-- Pagination --}}
    <div class="flex justify-center mt-12">
        <div class="flex">
            <button class="btn btn-primary-reverse rounded-none">1</button>
            <button class="btn btn-primary-reverse rounded-none">2</button>
            <button class="btn btn-primary-reverse rounded-none">3</button>
        </div>
    </div>

</section>

@endsection