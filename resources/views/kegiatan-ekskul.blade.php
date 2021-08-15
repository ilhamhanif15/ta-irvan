@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        Kegiatan
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        Daftar Ekstrakurikuler
    </div>
</div>

<section class="container-pad py-12">
    <div class="font-bold mb-5">Daftar Ekstrakurikuler</div>
    
    <div class="flex justify-center my-5">
        <img class="max-h-96" src="{{ env("MOCKUP_MODE") ? asset('images/gray.png') : asset('images/gambar ekskul.jpg') }}" alt="" srcset="">
    </div>

    <div>
        <table id="datatable" class="display w-full">
            <thead>
                <tr>
                    <th>Ekstrakurikuler</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>
                        {{ $item["name"] }}
                    </td>
                    <td>{{ $item["status"] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection