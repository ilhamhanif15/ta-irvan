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
        Sejarah
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-7 text-xl">SEJARAH SMAN 1 TAMBANG</div>
    @if (env('MOCKUP_MODE', false))
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nesciunt praesentium nihil consequatur, fugiat accusantium quis quaerat, quasi voluptatum aspernatur labore repellendus deserunt pariatur alias nostrum dicta maxime recusandae velit inventore molestiae quo culpa! Ipsam consectetur culpa illum dolorum molestias? Earum ad vero recusandae quia sint necessitatibus neque repudiandae impedit!
            <br/><br/>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nesciunt praesentium nihil consequatur, fugiat accusantium quis quaerat, quasi voluptatum aspernatur labore repellendus deserunt pariatur alias nostrum dicta maxime recusandae velit inventore molestiae quo culpa! Ipsam consectetur culpa illum dolorum molestias? Earum ad vero recusandae quia sint necessitatibus neque repudiandae impedit!
            <br/><br/>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo nesciunt praesentium nihil consequatur, fugiat accusantium quis quaerat, quasi voluptatum aspernatur labore repellendus deserunt pariatur alias nostrum dicta maxime recusandae velit inventore molestiae quo culpa! Ipsam consectetur culpa illum dolorum molestias? Earum ad vero recusandae quia sint necessitatibus neque repudiandae impedit!
            <br/><br/>
        </p>
    @else
        <p>
            SMA Negeri 1 Tambang awalnya bernama Yayasan Lembaga
            Pendidikan Desa (YLPT) didirikan pada tahun 1985 dan kemudian disahkan
            pada hari kamis tanggal 24 Desember 1987. Lembaga pendidikan ini
            dibangun atas dasar usulan masyarakat setempat yang mengharapkan
            dibangunkan sekolah demi kesejahteraan anak-anak mereka agar menjadi
            cerdas dan berdiri YLPT merupakan tujuan dan harapan masyarakat desa
            Sungai Pinang pada saat ini. Dalam pembangunan di sekolah ini juga tak
            lepas dari peran serta masyarakat sekitar yang turut mendukung kesuksesan
            pembangunan sekolah menengah di bumi melayu ini.
            
            <br/>
            <br/>
            
            Sekolah Menengah Atas Tambang ini berdiri di atas lahan seluas
            2.000 m2 yang memiliki gedung permanen terletak dilokasi yang cukup
            strategis dengan lingkungan yang asri dan nyaman untuk ketenangan belajar
            tepatnya dijalan raya Pekanbaru-Bangkinang dan desa Sungai Pinang lebih
            Kurang 29 km dari kota Pekanbaru. Di daerah Kabupaten Kampar nama
            sekolah diseragamkan berdasarkan nama dari masing-masing kecamatan.
            Oleh sebab itu, sekolah yang dibangun bersebelahan dengan kantor camat
            Tambang ini diberi nama kecematan desa Sungai Pinang tempat lokasi itu
            sendiri.
            <br/>
            <br/>

            Pada tahun 2000 sekolah ini berganti status menjadi sekolah
            menengah negeri. Dalam perkembangannya, sekolah ini mengalami
            kemajuan yang sangat pesat dan menjadi salah satu basis pendidikan
            menengah Tambang pada waktu itu. Keberadaannya di dalam pedesaan
            tidak menyurutkan semangat seluruh komponen sekolah dan masyarakat
            disekitarnya untuk terus berbenah menuju perubahan positif. Inilah yang
            membuat SMA Negeri 1 Tambang itu sendiri mencapai prestasi, baik
            prestasi tingkat kecamatan maupun maupun prestasi tingkat provinsi.
        </p>
    @endif

</section>

@endsection