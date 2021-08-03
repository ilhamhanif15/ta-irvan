@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        <a href="{{ route('kegiatan.list') }}" class="link-primary text-blue-500">Kegiatan</a>
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        {{ $kegiatan['title'] }}
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-3">KEGIATAN</div>
    <div class="font-bold text-3xl mb-3 text-center mt-12">{{ $kegiatan['title'] }}</div>

    <p class="my-5 whitespace-pre-line">
        {!! $kegiatan['body'] !!}
    </p>

    <img src="{{ $kegiatan['image_url'] ?? asset('images/gray.png') }}" class="w-full object-contain" alt="">



</section>

@endsection