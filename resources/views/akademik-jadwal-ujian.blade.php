@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        AKademik
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        Jadwal Ujian
    </div>
</div>

<section class="container-pad py-12">
    <div class="text-center font-semibold whitespace-pre-line leading-loose text-xl">
        Jadwal Ujian Sekolah (US)
        SMA NEGERI 1 TAMBANG
        Tahun Pelajaran 2020/2021
    </div>

    <div class="flex justify-center my-4">
        <img class="max-h-96" src="{{ !env("MOCKUP_MODE") ? asset('images/gambar ujian.jpg') : asset('images/gray.png') }}" alt="" srcset="">
    </div>

    <div class="font-bold mb-5">Jadwal Ujian</div>
    <div>
        <table id="datatable" class="display w-full">
            <thead>
                <tr>
                    <th rowspan="2">No.</th>
                    <th rowspan="2">Hari/Tanggal</th>
                    <th rowspan="2">Waktu</th>
                    <th colspan="2">Mata Pelajaran</th>
                </tr>
                <tr>
                    <th>IPA</th>
                    <th>IPS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">1</td>
                    <td rowspan="3">Senin, 29 Maret 2021</td>
                    <td>08.00 – 10.00</td>
                    <td>Pendidikan Pancasila Dan Kewarganegaraan</td>
                    <td>Pendidikan Pancasila Dan Kewarganegaraan</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>Matematika</td>
                    <td>Matematika</td>
                </tr>

                <tr>
                    <td rowspan="3">2</td>
                    <td rowspan="3">Selasa, 30 Maret 2021</td>
                    <td>08.00 – 10.00</td>
                    <td>Ekonomi</td>
                    <td>Geografi</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>Bahasa Indonesia</td>
                    <td>Bahasa Indonesia</td>
                </tr>

                <tr>
                    <td rowspan="3">3</td>
                    <td rowspan="3">Rabu, 31 Maret 2021</td>
                    <td>08.00 – 10.00</td>
                    <td>Pendidikan Agama Islam dan Budi Pekerti</td>
                    <td>Pendidikan Agama Islam dan Budi Pekerti</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>Kimia</td>
                    <td>Sosiologi</td>
                </tr>

                <tr>
                    <td rowspan="4">4</td>
                    <td rowspan="4">Kamis, 01 April 2021</td>
                    <td rowspan="2">08.00 – 10.00</td>
                    <td rowspan="2">Fisika</td>
                    <td>Biologi</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none"></td>
                    <td>Fisika</td>
                    <td style="display: none"></td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>Matematika Peminatan</td>
                    <td>Sejarah Peminatan</td>
                </tr>

                <tr>
                    <td rowspan="3">5</td>
                    <td rowspan="3">Senin, 05 April 2021</td>
                    <td>08.00 – 10.00</td>
                    <td>Bahasa Inggris</td>
                    <td>Bahasa Inggris</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>Sejarah Indonesia</td>
                    <td>Sejarah Indonesia</td>
                </tr>

                <tr>
                    <td rowspan="3">6</td>
                    <td rowspan="3">Selasa, 06 April 2021</td>
                    <td>08.00 – 10.00</td>
                    <td>Biologi</td>
                    <td>Ekonomi</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>Prakarya</td>
                    <td>Prakarya</td>
                </tr>

                <tr>
                    <td rowspan="3">7</td>
                    <td rowspan="3">Rabu, 07 April 2021</td>
                    <td>08.00 – 10.00</td>
                    <td>Seni Budaya</td>
                    <td>Seni Budaya</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td colspan="3" class="text-center bg-blue-100">Istirahat</td>
                </tr>
                <tr>
                    <td style="display: none;"></td>
                    <td style="display: none;"></td>
                    <td>10.30 – 12.30</td>
                    <td>PJOK</td>
                    <td>PJOK</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection