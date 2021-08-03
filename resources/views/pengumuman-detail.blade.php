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
        <a href="{{ route('pengumuman.list') }}">Pengumuman</a>
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        {{ $pengumuman['title'] }}
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-3">PENGUMUMAN</div>
    <div class="font-bold text-3xl mb-3 text-center mt-12">{{ $pengumuman['title'] }}</div>

    <p class="my-5 whitespace-pre-line">
        {!! $pengumuman['body'] !!}
    </p>

    {{-- <img src="{{ asset('images/Berita/berita-1.jpg') }}" class="max-h-96 w-full object-cover" alt=""> --}}
    
    <div class="mt-24 flex justify-between items-center">
        @if(request()->idPengumuman > 1)
            <a href="{{ route('pengumuman.detail', ['idPengumuman' => request()->idPengumuman-1 ]) }}" class="link-primary">< Halaman Sebelumnya</a>
        @else
            <div></div>
        @endif

        @if(request()->idPengumuman < count($daftarPengumuman))
            <a href="{{ route('pengumuman.detail', ['idPengumuman' => request()->idPengumuman+1 ]) }}" class="link-primary">Halaman Selanjutnya ></a>
        @endif
    </div>
</section>

@endsection