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
        Visi & Misi
    </div>
</div>

<section class="container-pad py-12">

    
    @if (env('MOCKUP_MODE', false))
        <div class="font-bold mb-4 text-2xl">VISI SMAN 1 Tambang</div>
        <p class="mb-16">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus laboriosam vitae esse atque quia necessitatibus?
        </p>
        
        <div class="font-bold mb-4 text-2xl">MISI SMAN 1 Tambang</div>
        <p class="mb-5">
        <ol class="list-decimal list-inside pl-5 space-y-2">
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores dolore ducimus eum iure, deleniti quidem beatae deserunt non! Eum, adipisci?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores dolore ducimus eum iure, deleniti quidem beatae deserunt non! Eum, adipisci?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores dolore ducimus eum iure, deleniti quidem beatae deserunt non! Eum, adipisci?</li>
            <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores dolore ducimus eum iure, deleniti quidem beatae deserunt non! Eum, adipisci?</li>
        </ol>
        </p>
    @else
        <div class="font-bold mb-4 text-2xl">VISI SMAN 1 Tambang</div>
        <p class="mb-16">
            “Menjadikan SMA Negeri 1 Tambang sebagai sekolah berprestasi,
            terampil, berakhlakul karimah dan berwawasan lingkungan.”
        </p>
        
        <div class="font-bold mb-4 text-2xl">MISI SMAN 1 Tambang</div>
        <p class="mb-5">
        <ol class="list-decimal list-inside pl-5 space-y-2">
            <li>Meningkatkan kualitas PBM</li>
            <li>Menumbuhkan semangat berwawasan keunggulan</li>
            <li>Mengambangkan kreasi dan daya nalar siswa</li>
            <li>Meningkatkan kemampuan profesionalisme pendidik dan tenaga
                kependidikan</li>
                <li>Menumbuhkan semangat kewirausahaan</li>
                <li>Meningkatkan kegiatan ekstrakurikuler</li>
                <li> Menumbuhkembangkan sikap cinta lingkungan</li>
        </ol>
        </p>
    @endif

</section>

@endsection