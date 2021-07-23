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

</section>

@endsection