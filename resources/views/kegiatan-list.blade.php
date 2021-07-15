@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        Kegiatan
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-4">KEGIATAN/EVENT SMAN 1 TAMBANG</div>
    <div class="grid grid-cols-1 gap-5">
        
        {{-- KEGIATAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Kegiatan Sosialisasi</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
                <div class="mt-2">
                    <a href="{{ route('kegiatan.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
        
        {{-- KEGIATAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Kegiatan Sosialisasi</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
                <div class="mt-2">
                    <a href="{{ route('kegiatan.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
        
        {{-- KEGIATAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Kegiatan Sosialisasi</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
                <div class="mt-2">
                    <a href="{{ route('kegiatan.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
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