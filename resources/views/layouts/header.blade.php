{{-- TOP BAR --}}
<div class="flex justify-between container-pad items-center py-4 w-full bg-blue-900 text-white text-xs md:text-base">
    <div class="flex space-x-5">
        <div>
            <i class="fa fa-phone"></i> +62 812-7092-6523
        </div>
        {{-- <div>
            <i class="fa fa-envelope"></i> sekolah@gmail.com
        </div> --}}
        <div>
            <i class="fa fa-map-marker"></i> Jl. Pekanbaru - Bangkinang Km. 29
        </div>
    </div>

    <div class="flex space-x-4">
        <i class="fa fa-facebook-square"></i>
        <i class="fa fa-twitter"></i>
        <i class="fa fa-google"></i>
    </div>
</div>

{{-- MENU NAVBAR --}}
<div class="container-pad sticky top-0 bg-white flex justify-between items-center shadow-lg z-30">
    <div class="py-4 md:mr-8">
        <a href="{{ route('website.home') }}" class="flex items-center">
            <span class="sr-only">Logo</span>
            <img class="h-8 w-auto sm:h-12" src="{{ asset('images/logo.jpg') }}" alt="">
            <div class="text-primary font-bold ml-2">SMAN 1 TAMBANG</div>
        </a>
    </div>

    <nav class="hidden md:flex justify-between items-center md:space-x-5 lg:space-x-7 text-center">
        <x-route.website-navbar view-type="desktop" />
    </nav>

    <div class="md:hidden">
        <button id="_btnMenuBar" type="button" class="btn text-2xl">
            <i class="fa fa-bars"></i>
        </button>
    </div>
</div>

{{-- MOBILE SIDEBAR MENU --}}
<div id="_sideNavBar" class="h-full w-0 fixed z-40 top-0 left-0 overflow-x-hidden bg-white shadow-lg transition-all duration-500">
    <div class="flex justify-between items-center container-pad py-5">
        <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logo.jpg') }}" alt="">
        <div class="text-primary font-bold ml-2">SMAN 1 TAMBANG</div>
        <button id="_sideNavBarCloseBtn" type="button" class="btn">
            <i class="fa fa-close"></i>
        </button>
    </div>
    <hr/>
    <nav class="flex flex-col space-y-5 container-pad py-10">
        <x-route.website-navbar view-type="mobile" />
    </nav>
</div>
