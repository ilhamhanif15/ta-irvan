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
        <a href="{{ route('berita.list') }}" class="link-primary text-blue-600">Berita</a>
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        {{ $berita['title'] }}
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-3">BERITA</div>
    @if ($berita['image_url'])
        <img src="{{ $berita['image_url'] }}" class="w-full object-contain" alt="">
    @endif
    <div class="font-bold text-3xl mb-3 text-center mt-12">{{ $berita['title'] }}</div>

    <p class="my-5 whitespace-pre-line">
        {!! $berita['body'] !!}
    </p>

    <div class="mt-24 flex justify-between items-center">
        @if(request()->idBerita > 1)
            <a href="{{ route('berita.detail', ['idBerita' => request()->idBerita-1 ]) }}" class="link-primary">< Halaman Sebelumnya</a>
        @else
            <div></div>
        @endif

        @if(request()->idBerita < count($daftarBerita))
            <a href="{{ route('berita.detail', ['idBerita' => request()->idBerita+1 ]) }}" class="link-primary">Halaman Selanjutnya ></a>
        @endif
    </div>

</section>

@endsection