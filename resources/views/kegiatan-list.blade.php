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
        @foreach ($daftarKegiatan as $id => $kegiatan)
            <div class="flex items-start justify-between my-4">
                <div class="relative w-1/5">
                    <img src="{{ $kegiatan['image_url'] ?? asset('images/gray.png') }}" class="w-full object-cover h-44" alt="">
                    <div class="font-bold absolute bottom-2 right-2 bg-green-500 text-white text-sm px-2 py-1 rounded">{{ $kegiatan['created_at'] }}</div>
                </div>
                <div class="mx-5 w-4/5">
                    <div class="font-bold text-lg mb-3 -mt-1">{{ $kegiatan['title'] }}</div>
                    <div class="text-sm">
                        {!! \Str::of(strip_tags($kegiatan['body']))->limit(250, '...') !!}
                    </div>
                    <div class="mt-2">
                        <a href="{{ route('kegiatan.detail', ['idKegiatan' => $id]) }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

    {{-- Pagination --}}
    {{-- Pagination --}}
    <div class="flex justify-center mt-12">
        <div class="flex">
            @for ($i = 0; $i < round($totalKegiatan/4); $i++)
                <a style="border-radius: unset" href="{{ route('kegiatan.list', ['page' => $i+1]) }}" class="btn {{ $page === ($i+1) ? 'btn-primary' : 'btn-primary-reverse' }}">{{ $i+1 }}</a>
            @endfor
        </div>
    </div>

</section>

@endsection