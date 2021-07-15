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
        Program
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-4">PROGRAM SMAN 1 TAMBANG</div>
    <div class="grid grid-cols-1 gap-5">
        
        {{-- PROGRAM --}}
        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">Program Penyuluhan</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
            </div>
        </div>
        
        {{-- PROGRAM --}}
        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">Program Penyuluhan</div>
                <div class="text-sm">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias tempora nulla quos praesentium eaque. 
                    Asperiores, nihil odio. Cupiditate, repudiandae libero alias vel 
                    exercitationem veritatis iure reprehenderit officia eligendi aut!
                </div>
            </div>
        </div>
        
        {{-- PROGRAM --}}
        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">Program Penyuluhan</div>
                <div class="text-sm">
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