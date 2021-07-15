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
        Prestasi
    </div>
</div>

<section class="container-pad py-12">
    <div class="font-bold mb-5">PROFIL SMAN 1 Tambang</div>

    <div>
        <table id="datatable" class="display w-full">
            <thead>
                <tr>
                    <th>Nama Prestasi</th>
                    <th>Tingkat</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Hack Youtube</td>
                    <td>Kecamatan</td>
                    <td>2014</td>
                </tr>
                <tr>
                    <td>Hack Google</td>
                    <td>Nasional</td>
                    <td>2018</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection