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
        @foreach ($daftarPengumuman as $id => $pengumuman)
            <div class="flex items-start justify-between my-4">
                <img src="{{ $pengumuman['image_url'] ?? asset('images/gray.png') }}" class="w-64 object-cover h-44" alt="">
                <div class="mx-5">
                    <div class="text-sm text-gray-500">Diterbitkan : {{ $pengumuman['created_at'] }}</div>
                    <div class="font-bold text-lg mb-3">{{ $pengumuman['title'] }}</div>
                    <div class="text-sm">
                        {!! \Str::of(strip_tags($pengumuman['body']))->limit(250, '...') !!}
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('pengumuman.detail', ['idPengumuman' => $id]) }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                    </div>
                </div>
            </div>
        @endforeach

    {{-- Pagination --}}
    <div class="flex justify-center mt-12">
        <div class="flex">
            @for ($i = 0; $i < round($totalPengumuman/4); $i++)
                <a style="border-radius: unset" href="{{ route('pengumuman.list', ['page' => $i+1]) }}" class="btn {{ $page === ($i+1) ? 'btn-primary' : 'btn-primary-reverse' }}">{{ $i+1 }}</a>
            @endfor
        </div>
    </div>

</section>

@endsection