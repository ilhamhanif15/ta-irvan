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
        Pengumuman
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-4">PENGUMUMAN</div>
    <div class="grid grid-cols-1 gap-5">
        
        {{-- PENGUMUMAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl mr-3">
                <i class="fa fa-bullhorn"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Pengumuman Hasil Ujian</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
                <div class="mt-2">
                    <a href="{{ route('pengumuman.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
        
        {{-- PENGUMUMAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl mr-3">
                <i class="fa fa-bullhorn"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Pengumuman Hasil Ujian</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
                <div class="mt-2">
                    <a href="{{ route('pengumuman.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
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