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
        @foreach ($data as $item)
            <div class="grid grid-cols-3 items-center gap-4 my-4">
                <div class="justify-self-center">
                    <img src="{{ $item['image_url'] }}" class="object-cover h-64 mt-8" alt="">
                </div>
                <div class="mx-5 col-span-2">
                    <div class="font-bold text-lg mb-2">{{ $item['name'] }}</div>
                    <div class="text-sm leading-loose">
                        Jabatan     : <strong>{{ $item['jabatan'] }}</strong><br/>
                        Ditugaskan  : {{ $item['tgl_ditugaskan'] }}<br/>
                        Nomor       : {{ $item['nomor'] }}<br/>
                        <br/>
                        Lahir       : {{ $item['lahir'] }}<br/>
                        NUPTK       : {{ $item['nuptk'] }}<br/>
                        NIP         : {{ $item['nip'] }}<br/>
                    </div>
                </div>
            </div>
        @endforeach

</section>

@endsection