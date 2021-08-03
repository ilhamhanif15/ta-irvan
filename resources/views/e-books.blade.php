@extends('layouts.app')

@section("content")

@php
    if (env('MOCKUP_MODE', false)) {
        $data = [
            [
                "1",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, minima?",
                "2018"
            ],
            [
                "2",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, minima?",
                "2018"
            ],
            [
                "3",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, minima?",
                "2018"
            ],
            [
                "4",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, minima?",
                "2018"
            ],
            [
                "5",
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, minima?",
                "2018"
            ],
        ];
    } else {
        $data = [
            [
                "1",
                "BUKU SEKOLAH ELEKTRONIK (BSE) K-13 KELAS : XII",
                "2019"
            ],
            [
                "2",
                "BUKU SEKOLAH ELEKTRONIK (BSE) K-13 KELAS : XI",
                "2019"
            ],
            [
                "3",
                "BUKU SEKOLAH ELEKTRONIK (BSE) K-13 KELAS : X",
                "2019"
            ],
        ];
    }
@endphp

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
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item[0] }}</td>
                    <td>{{ $item[1] }}</td>
                    <td>{{ $item[2] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection