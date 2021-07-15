@extends('layouts.app')

@section("content")

<section class="container-pad py-12">
    <div class="font-bold mb-5">E-BOOKS</div>

    <div>
        <table id="datatable" class="display w-full">
            <thead>
                <tr>
                    <th>No. Judul</th>
                    <th>Nama Buku</th>
                    <th>Tahun Terbit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>System Architect</td>
                    <td>2020</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>System Architect</td>
                    <td>2021</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

@endsection