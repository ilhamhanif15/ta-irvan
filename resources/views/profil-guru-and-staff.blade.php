@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        <a href="{{ route('profil.index') }}" class="link-primary text-blue-600">Profil</a>
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        Guru & Staff
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-4">PROFIL GURU & STAFF SMAN 1 TAMBANG</div>
    <div class="grid grid-cols-1 divide-y">
        
        {{-- GURU/STAFF --}}
        <div class="grid grid-cols-3 items-center gap-4 my-4">
            <div class="justify-self-center">
                <img src="{{ asset('images/kepsek.jpg') }}" class="object-cover h-64 mt-8" alt="">
            </div>
            <div class="mx-5 col-span-2">
                <div class="font-bold text-lg mb-3">Ibu Yoona</div>
                <div class="text-sm">
                    Jabatan : Kepala Sekolah
                    <br/>
                    <br/>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
            </div>
        </div>
        
        {{-- GURU/STAFF --}}
        <div class="grid grid-cols-3 items-center gap-4 my-4">
            <div class="justify-self-center">
                <img src="{{ asset('images/kepsek.jpg') }}" class="object-cover h-64 mt-8" alt="">
            </div>
            <div class="mx-5 col-span-2">
                <div class="font-bold text-lg mb-3">Ibu Yoona</div>
                <div class="text-sm">
                    Jabatan : Kepala Sekolah
                    <br/>
                    <br/>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
            </div>
        </div>

</section>

@endsection