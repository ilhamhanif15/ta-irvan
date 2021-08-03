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
        Sarana & Prasarana
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-7 text-xl text-center">SARANA & PRASARANA SMAN 1 TAMBANG</div>
    <div class="px-44">
      <table class="datatable w-full display">
          <thead>
            <tr>
              <th class="bg-blue-500 text-white">Nama</th>
              <th class="bg-blue-500 text-white">Total</th>
          
            </tr>
          </thead>
          <tbody>
            @if (env('MOCKUP_MODE', false))
              @foreach ([1,2,3,4,5] as $item)
                  <tr>
                    <td>Lorem, ipsum.</td>
                    <td>{{ $item }}</td>
                  </tr>
              @endforeach
            @else
              <tr>
                <td>Ruang Kelas</td>
                <td>24 Ruang</td>
              </tr>
              <tr>
                <td>Laboratorium Biologi</td>
                <td>1 Ruang</td>
              </tr>
              <tr>
                <td>Laboratorium Kimia</td>
                <td>1 Ruang</td>
              </tr>
              <tr>
                <td>Perpustakaan</td>
                <td>1 Ruang</td>
              </tr>
              <tr>
                <td>Laboratorium Fisika</td>
                <td>1 Ruang</td>
              </tr>
              <tr>
                <td>Laboratorium Komputer</td>
                <td>1 Ruang</td>
              </tr>
              <tr>
                <td>Sanitasi Siswa</td>
                <td>2 Ruang</td>
              </tr>
              <tr>
                <td>Sanitasi Guru</td>
                <td>2 Ruang</td>
              </tr>
            @endif
          </tbody>
      </table>
    </div>

    <div class="grid grid-cols-3 gap-10 mt-24 px-24">

        <div>
            <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/Headline/image-2.jpg') }}" alt="">
            <div class="text-center">{{ env('MOCKUP_MODE', false) ? "Lorem, ipsum dolor." : "Laboratorium" }}</div>
        </div>
        
        <div>
            <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">{{ env('MOCKUP_MODE', false) ? "Lorem, ipsum dolor." : "Lapangan" }}</div>
        </div>
        
        <div>
            <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">{{ env('MOCKUP_MODE', false) ? "Lorem, ipsum dolor." : "Ruang Ekskul" }}</div>
        </div>
        
        <div>
            <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/Headline/image-2.jpg') }}" alt="">
            <div class="text-center">{{ env('MOCKUP_MODE', false) ? "Lorem, ipsum dolor." : "Mushola" }}</div>
        </div>
        
        <div>
            <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">{{ env('MOCKUP_MODE', false) ? "Lorem, ipsum dolor." : "Kantin" }}</div>
        </div>
        
        <div>
            <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">{{ env('MOCKUP_MODE', false) ? "Lorem, ipsum dolor." : "Ruang OSIS" }}</div>
        </div>
    </div>

</section>

@endsection