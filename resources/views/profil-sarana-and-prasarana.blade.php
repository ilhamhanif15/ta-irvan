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

    <div class="font-bold mb-7 text-xl">SARANA & PRASARANA SMAN 1 TAMBANG</div>
    <p>
        <table class="table-auto m-5">
            <thead>
              <tr>
                <th class="bg-blue-500">Nama</th>
                <th class="bg-blue-500">Total</th>
           
              </tr>
            </thead>
            <tbody>
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
            </tbody>
          </table>
    </p>

    <div class="grid grid-cols-3 gap-10 mt-24 px-24">

        <div>
            <img src="{{ asset('images/Headline/image-2.jpg') }}" alt="">
            <div class="text-center">Laboratorium</div>
        </div>
        
        <div>
            <img src="{{ asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">Lapangan</div>
        </div>
        
        <div>
            <img src="{{ asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">Ruang Ekskul</div>
        </div>
        
        <div>
            <img src="{{ asset('images/Headline/image-2.jpg') }}" alt="">
            <div class="text-center">Mushola</div>
        </div>
        
        <div>
            <img src="{{ asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">Kantin</div>
        </div>
        
        <div>
            <img src="{{ asset('images/Headline/image-1.jpg') }}" alt="">
            <div class="text-center">Ruang OSIS</div>
        </div>
    </div>

</section>

@endsection