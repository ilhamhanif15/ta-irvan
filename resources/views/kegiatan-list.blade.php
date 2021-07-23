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
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Kegiatan Sosialisasi</div>
                <div class="text-sm">
                    Di era pendidikan abad 21, generasi muda diharapkan memiliki kemampuan akademis dan juga keterampilan dan talenta non akademis. Maka, kegiatan ekstrakurikuler adalah salah satu sarana bagi siswa untuk membantu perkembangan para siswa sesuai dengan kebutuhan, potensi, bakat dan minat siswa.
                </div>
                <div class="mt-2">
                    <a href="{{ route('kegiatan.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
        
        {{-- KEGIATAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Kegiatan Sosialisasi</div>
                <div class="text-sm">
                    Dalam rangka meningkatkan kesadaran dan kepatuhan masyarakat dalam berlalulintas, Satuan Lalulintas Polres melakukan sosialisasi tentang etika tertib berlalulintas di SMA Negeri I Tambang, pada Rabu pagi (17/03/2021) sekira pukul 09.00 wib.
                </div>
                <div class="mt-2">
                    <a href="{{ route('kegiatan.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
        
        {{-- KEGIATAN --}}
        <div class="flex items-start justify-between my-4">
            <div class="text-7xl">
                <i class="fa fa-calendar"></i>
            </div>
            <div class="mx-5">
                <div class="font-bold text-lg mb-3">Kegiatan Sosialisasi</div>
                <div class="text-sm">
                    Sebanyak 150 siswa kelas X mengikuti kegiatan outbond di taman agrowisata Sungai Pinang Nadin Kabupaten Kampar (Minggu/4 Agustus 2019). Menurut Waka. Kesiswaan SMAN 1 Tambang
                </div>
                <div class="mt-2">
                    <a href="{{ route('kegiatan.detail') }}" class="link-primary text-gray-500">Baca Selengkapnya...</a>
                </div>
            </div>
        </div>
    </div>

    {{-- Pagination --}}
    <div class="flex justify-center mt-12">
        <div class="flex">
            <button class="btn btn-primary-reverse rounded-none">1</button>
            <button class="btn btn-primary-reverse rounded-none">2</button>
            <button class="btn btn-primary-reverse rounded-none">3</button>
        </div>
    </div>

</section>

@endsection