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
        Program
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-4">PROGRAM SMAN 1 TAMBANG</div>
    <div class="grid grid-cols-1 gap-5">
        
        {{-- PROGRAM --}}
        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">A. Program Kerja Wakil Bidang Kesiswaan adalah:</div>
                <div class="text-sm">
                    <ol class="space-y-2">
                        <ul>a. Penerimaan siswa baru</ul>
                        <ul>b. Pembinaan kesiswaan (ada 10 bidang)</ul>
                        <ul>c. Kegiatan ekstrakurikuler  </ul>
                        <ul>
                            d. Layanan bimbingan dan konseling</ul>
                            <ul>
                                e. Pembinaan prestasi unggulan</ul>
                                <ul>f. Pelacakan alumni</ul>

                    </ol>
                </div>
            </div>
        </div>
        
        {{-- PROGRAM --}}
        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">

                    B. Program Kerja Wakil Bidang Akademik adalah:
                    </div>
                <div class="text-sm">
                    <ol class="space-y-2">
                        <ul>a. Penyusunan dan pengembangan KTSP dan Kalender akademik </ul>
                        <ul> b. Proses pembelajaran</ul>
                        <ul>c. Kegiatan ekstrakurikuler  </ul>
                        <ul>c. Penilaian hasil belajar</ul>
                        <ul> d. Pendayagunaan pendidik</ul>
                        <ul> e. Pengangkatan PTK baru</ul>
                        <ul>f. Peningkatan kompetensi SDM PTK</ul>
                        <ul>g. Pengembangan RSBI</ul>
                    </ol>
                </div>
            </div>
        </div>
        
        {{-- PROGRAM --}}
        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">C. Program Kerja Wakil Bidang Sarana Prasarana adalah:</div>
                <div class="text-sm">
                    <ol class="space-y-2">
                        <ul>a. Perencanaan sarana dan prasarana belajar</ul>
                        <ul class="pl-5">i. Sarana belajar terdiri dari: perabot, perkakas, alat, media, buku dan sumber belajar, dan sarana pendukung lainnya</ul>
                        <ul class="pl-5">ii. Prasarana belajar terdiri dari: ruang belajar, ruang lab, ruang perpustakaan, ruang pimpinan, ruang administrasi, tempat ibadah, tempat olahraga, taman, dan prasarana lainnya.</ul>
                        <ul>b. Pengelolaan sarana dan prasarana belajar</ul>
                        <ul>c. Perencanaan keuangan dan pembiayaan</ul>
                        <ul>d. Pengelolaan keuangan dan pembiayaan</ul>
                        
                    </ol>
                </div>
            </div>
        </div>

        <div class="flex items-start justify-between my-4">
            <div>
                <div class="font-bold text-lg mb-3">

                    D. Program Kerja Wakil Bidang Humas adalah:
                    </div>
                <div class="text-sm">
                    <ol class="space-y-2">
                        <ul>
                            a. Kerjasama dan kemitraan dengan sekolah lain, perguruan tinggi, instansi pemerintah, serta dunia usaha/industri</ul>
                        <ul> b. Peran serta masyarakat dan pemberdayaan alumni
                        </ul>
                        <ul>
                            c. Pengembangan kultur sekolah
                              </ul>
                        <ul>
                            d. Pemberdayaan budaya dan lingkungan</ul>
                        <ul> 
                            e. Publikasi dan informasi</ul>
                    </ol>
                </div>
            </div>
        </div>

</section>

@endsection