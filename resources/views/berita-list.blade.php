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
        @foreach ($daftarBerita as $id => $berita)
            <div class="flex items-start justify-between my-4">
                <img src="{{ $berita['image_url'] ?? asset('images/gray.png') }}" class="w-64 object-cover h-44" alt="">
                <div class="mx-5">
                    <div class="font-bold text-lg mb-2">{{ $berita['title'] }}</div>
                    <div class="text-sm">
                        {!! \Str::of(strip_tags($berita['body']))->limit(180, '...') !!}
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('berita.detail', ['idBerita' => $id]) }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    {{-- Pagination --}}
    <div class="flex justify-center mt-12">
        <div class="flex">
            @for ($i = 0; $i < round($totalBerita/4); $i++)
                <a style="border-radius: unset" href="{{ route('berita.list', ['page' => $i+1]) }}" class="btn {{ $page === ($i+1) ? 'btn-primary' : 'btn-primary-reverse' }}">{{ $i+1 }}</a>
            @endfor
        </div>
    </div>

</section>

@endsection