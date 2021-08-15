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
        Mata Pelajaran
    </div>
</div>

<section class="container-pad py-12">
    <div class="font-bold mb-5">MATA PELAJARAN</div>

    <div>
        <table id="datatable" class="display w-full">
            <thead>
                <tr>
                    <th>Nama Mata Pelajaran</th>
                    <th>Tingkat</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        {{ $item["name"] }}<br/>
                        Nama Singkatan : {{ $item['singkatan'] }}
                    </td>
                    <td>
                        Tingkat : {{ $item["tingkat"] }}<br/>
                        Kompetensi : {{ $item['kompetensi'] }}
                    </td>
                    <td>{{ $item["status"] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection