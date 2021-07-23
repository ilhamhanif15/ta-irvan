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
        Kurikulum Pendidikan
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-6 text-lg">KURIKULUM PENDIDIKAN</div>
    
    <p>
        Kurikulum SMA Negeri 1 Tambang disusun dengan mengacu pada
        Standar Isi (SI) dan Standar Kompentensi Lulusan (SKL) yang telah 
        ditetapkan oleh BSNP dan model-model pembelajaran atau program yang
        dihasilkan oleh Pusat Kurikulum.
        Kurikulum SMA Negeri 1 Tambang menjadi acuan bagi satuan
        pendidikan dalam melaksanakan pendidikan dan pembelajaran dengan
        mengedepankan prinsip pengembangan Kurikulum 2013 dengan
        penyesuaian terhadap pemanfaatan analisis kondisi ril SMA Negeri 1
        Tambang dan Analisis Kondisi Lingkungan Sekolah.
        Kurikulum SMA Negeri 1 Tambang disusun agar sekolah memiliki
        pedoman penyelenggaraan kegiatan pembelajaran dan pemenuhan 8 Standar
        Nasional Pendidikan (SNP) dalam rangka mencapai tujuan pendidikan
        nasional. Oleh sebab itu pengembangan Kurikulum SMA Negeri 1 Tambang
        memperhatikan unsur-unsur sebagai berikut:
        <ol class="space-y-2 list-decimal list-inside pl-4 pt-2">
            <li>Peningkatan iman dan takwa serta akhlak mulia</li>
            <li>Keragaman potensi dan karakteristik daerah dan lingkungan</li>
            <li>Tuntutan pembangunan daerah dan nasional</li>
            <li>Tuntutan dunia kerja</li>
            <li> Perkembangan ilmu pengetahuan, teknologi, dan seni</li>
            <li> Agama</li>
            <li> Dinamika perkembangan global</li>
            <li> Penerapan kegiatan pembelajaran dengan pendekatan pendidikan
            berkarakter.</li>
            <li>Pengembangan kegiatan ekstra kurikuler yang dapat mengembangkan
            potensi diri peserta didik, serta pengembangan kegiatan pramuka sebagai
            ekstra kurikuler wajib yang harus diikuti.</li>
            <li> Persatuan nasional dan nilai-nilai kebangsaan</li>
            <li> Kondisi sosial budaya masyarakat setempat</li>
            <li>Kesetaraan Gender</li>
            <li>Karakteristik satuan pendidikan</li>
            <li>Integrasi Nilai-nilai Karakter Bangsa</li>
            
        </ol>
    </p>
</section>

@endsection