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
        Struktur Organisasi
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-5 text-2xl">STRUKTUR ORGANISASI SMAN 1 Tambang</div>
    <img src="{{ asset('images/Berita/berita-1.jpg') }}" class="h-full w-full object-contain" alt="">

</section>

@endsection