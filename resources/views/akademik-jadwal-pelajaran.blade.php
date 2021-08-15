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
        Jadwal Pelajaran
    </div>
</div>

<section class="container-pad py-12">
    <div class="font-bold mb-2">Jadwal Pelajaran Kelas {{ $data['kelas'] }}</div>
    <div class="mb-4">
        <form action="{{ route('akademik.jadwal-pelajaran') }}" method="GET">
            <label for="kelas">Kelas</label>
            <select name="kelas" class="py-2 px-3 border border-gray-400 rounded autoSubmitSelect" onchange="event.target.parentElement.submit()" id="kelas">
                <option {{ request()->kelas === "x-a" ? 'selected' : '' }} value="x-a">X-A</option>
                <option {{ request()->kelas === "x-b" ? 'selected' : '' }} value="x-b">X-B</option>
                <option {{ request()->kelas === "xi-ips" ? 'selected' : '' }} value="xi-ips">XI-IPS</option>
                <option {{ request()->kelas === "xii-ipa" ? 'selected' : '' }} value="xii-ipa">XII-IPA</option>
                <option {{ request()->kelas === "xii-ips" ? 'selected' : '' }} value="xii-ips">XII-IPS</option>
            </select>
            <button type="submit" id="btnJadpelKelas" hidden>
                Submit
            </button>
        </form>
    </div>

    <div>
        <table id="datatable" class="display w-full">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Pelajaran</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['data'] as $item)
                <tr>
                    <td>
                        {{ $item["hari"] }}
                    </td>
                    <td class="whitespace-pre-line">{{ $item["jadwal"] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection