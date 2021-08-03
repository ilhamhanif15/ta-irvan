@extends('layouts.app')

@section("content")

@php
  
@endphp

<div class="container-pad pt-8 flex space-x-5">
    <div>
        Profil
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-5 text-2xl">PROFIL SMAN 1 Tambang</div>
    <img src="{{ env('MOCKUP_MODE', false) ? asset('images/gray.png') : asset('images/psekolah/smaneg1.jpg') }}" class="max-h-96 w-full object-cover" alt="">

    <div class="grid grid-cols-4 gap-4 my-8">
        <div class="border rounded py-2 px-3 shadow" style="height: max-content">
          <div class="py-2 px-3 text-center uppercase font-bold mb-8 bg-green-500 text-white">
            PROFIL SEKOLAH
          </div>
          @if ( env('MOCKUP_MODE', false) )
          <div class="flex flex-col space-y-4">
            <div class="w-full h-5 bg-gray-400"></div>
            <div class="w-full h-5 bg-gray-400"></div>
            <div class="w-full h-5 bg-gray-400"></div>
            <div class="w-full h-5 bg-gray-400"></div>
            <div class="w-full h-5 bg-gray-400"></div>
          </div>
          @else
            <div class="flex flex-col space-x-1 space-y-4">
                <div class="flex items-center space-x-2"><i class="fa fa-user" aria-hidden="true"></i><b>Kepsek</b> : Khairullah</div>
                <div class="flex items-center space-x-2"><i class="fa fa-mobile" aria-hidden="true"></i><b>Operator</b> : Hendra Feri</div>
                <div class="flex items-center space-x-2"><i class="fa fa-star" aria-hidden="true"></i><b>Akreditasi</b> : A</div>
                <div class="flex items-center space-x-2"><i class="fa fa-book" aria-hidden="true"></i><b>Kurikulum</b> : Kurikulum 2013</div>
                <div class="flex items-center space-x-2"><i class="fa fa-clock-o" aria-hidden="true"></i><b>Waktu</b> : Pagi</div>
            </div>
          @endif
        </div>

        <div class="col-span-3 bg-gray-100">

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')"><i class="fa fa-building"></i> {{ env('MOCKUP_MODE', false) ? 'Tab 1' : 'Profil' }}</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')"><i class="fa fa-server"></i> {{ env('MOCKUP_MODE', false) ? 'Tab 2' : 'Rekapitulasi' }}</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')"><i class="fa fa-envelope"></i> {{ env('MOCKUP_MODE', false) ? 'Tab 3' : 'Kontak' }}</button>
              </div>
              
              <div id="London" class="tabcontent">

                @if ( env('MOCKUP_MODE', false) )
                <div class="grid grid-cols-4 gap-4 my-8">

                  <div class="col-span-2 bg-white">
                    <h3 class="bg-blue-400 p-2 text-white">Lorem, ipsum dolor.</h3>
                    <div class="px-3 py-4 leading-loose">
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                    </div>
                  </div>

                <div class="col-span-2">
                  
                  <div class="bg-white">
                    <h3 class="bg-blue-400 p-2 text-white">Lorem, ipsum.</h3>
                    <div class="px-3 py-4 leading-loose">
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                    </div>
                  </div>
                

                  <div class="bg-white mt-5">
                    <h3 class="bg-blue-400 p-2 text-white">Lorem ipsum dolor sit.</h3>
                    <div class="px-3 py-4 leading-loose">
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                      <div class="w-full h-8 bg-gray-400 my-2"></div>
                    </div>
                  </div>

                </div>

              </div>
                @else
                  <div class="grid grid-cols-4 gap-4 my-8">

                      <div class="col-span-2 bg-white">
                        <h3 class="bg-blue-400 p-2 text-white">Identitas Sekolah</h3>
                        <div class="px-3 py-4 leading-loose">
                          <h1><b>NPSN</b> : 10400371.</h1>
                          <h1><b>Status</b> : Negeri</h1>
                          <h1><b>Bentuk Pendidikan</b> : SMA</h1>
                          <h1><b>Status Kepemilikan</b> : Pemerintah Daerah</h1>
                          <h1><b>SK Pendirian Sekolah</b> : 1111/109.22/pr/2000</h1>
                          <h1><b>Tanggal SK Pendirian</b> : 1987-12-24</h1>
                          <h1><b>SK Izin Operasional</b> : 1111/109.22/pr/2000</h1>
                          <h1><b>Tanggal SK Izin Operasional</b> : 2000-12-14</h1>
                        </div>
                      </div>

                    <div class="col-span-2">
                      
                      <div class="bg-white">
                        <h3 class="bg-blue-400 p-2 text-white">Data Pelengkap</h3>
                        <div class="px-3 py-4 leading-loose">
                          <h1><b>Kebutuhan Khusus Dilayani</b> : Tidak ada</h1>
                          <h1><b>Nama Bank</b> : BANK RIAU KEPRI</h1>
                          <h1><b>Cabang KCP/Unit</b> : -</h1>
                          <h1><b>Rekening Atas Nama</b> : SMA NEGERI 1 TAMBANG</h1>
                        </div>
                      </div>
                    

                      <div class="bg-white mt-5">
                        <h3 class="bg-blue-400 p-2 text-white">Data Rinci</h3>
                        <div class="px-3 py-4 leading-loose">
                          <h1><b>Status BOS</b> : Bersedia Menerima</h1>
                          <h1><b>Waku Penyelenggaraan</b> : Pagi</h1>
                          <h1><b>Sertifikasi ISO</b> : Belum Bersertifikat</h1>
                          <h1><b>Sumber Listrik</b> : PLN</h1>
                          <h1><b>Daya Listrik</b> : 3000</h1>
                          <h1><b>Akses Internet</b> : Telkomsel Flash</h1>
                        </div>
                      </div>

                    </div>

                  </div>
                @endif
                
              </div>
              
              <div id="Paris" class="tabcontent">
                @if ( env('MOCKUP_MODE', false) )

                  @foreach ([1, 2, 3] as $item)
                    <h3 class="bg-blue-400 p-2 mt-10 text-white">Lorem ipsum dolor sit.</h3>
                    <div class="px-3 py-4 bg-white">
                      <table class="datatable display w-full">
                          <thead>
                            <tr >
                              <th>lorem Col 1</th>
                              <th>lorem Col 2</th>
                              <th>lorem Col 3</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Lorem.</td>
                              <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus omnis rerum non pariatur, voluptatem voluptas!</td>
                              <td>Lorem, ipsum.</td>
                            </tr>
                          </tbody>
                      </table>
                    </div>
                  @endforeach

                @else
                  <h3 class="bg-blue-400 p-2 mt-10 text-white">Data PTK dan PD</h3>
                  <div class="px-3 py-4 bg-white">
                    <table class="datatable display w-full">
                        <thead>
                          <tr >
                            <th>Uraian</th>
                            <th>Guru</th>
                            <th>Tendik</th>
                            <th>PTK</th>
                            <th>PD</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Laki-laki</td>
                            <td>19</td>
                            <td>6</td>
                            <td>25</td>
                            <td>229</td>
                          </tr>
                          <tr>
                            <td>Perempuan</td>
                            <td>30</td>
                            <td>6</td>
                            <td>36</td>
                            <td>209</td>
                          </tr>
                          <tr>
                            <td>total</td>
                            <td>49</td>
                            <td>12</td>
                            <td>61</td>
                            <td>438</td>
                          </tr>
                        </tbody>
                    </table>
                    <div class="mt-2">Keterangan :</div>
                    <ol class="list-disc list-inside">
                        <li>Data Rekap Per Tanggal 23 Juli 2021</li>
                        <li>Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk.</li>
                        <li>Singkatan : </li>
                    </ol>
                    <ol class="list-decimal list-inside pl-5">
                        <li>PTK = Guru ditambah Tendik </li> 
                        <li>PD = Peserta Didik </li>
                    </ol>
                  </div>

                  <h3 class="bg-blue-400 p-2 mt-5 text-white">Data Sarpas</h3>
                  <div class="px-3 py-4 bg-white">
                    <table class="datatable display w-full">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis Sarpas</th>
                          <th>Jml 2020 Ganjil</th>
                          <th>Jml 2020 Genap</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ruang Kelas</td>
                            <td>24</td>
                            <td>24</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ruang Perpustakaan</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ruang Laboratorium</td>
                            <td>6</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ruang Praktik</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ruang Pimpinan</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Ruang Guru</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Ruang Ibadah</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ruang UKS</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Ruang Toilet</td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Ruang Gudang</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Ruang Sirkulasi</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Tempat Bermain / Olahraga</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Ruang TU</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Ruang Konseling</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Ruang OSIS</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Ruang Bangunan</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <h3 class="bg-blue-400 p-2 mt-5 text-white">Data Sanitasi</h3>
                  <div class="px-3 py-4 bg-white">
                    <table class="datatable display w-full">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Variabel</th>
                          <th>Uraian</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Sumber Air</td>
                          <td>Sumur terlindungi</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Sumber air minum</td>
                          <td>Sumur terlindungi</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Kecukupan air bersih</td>
                          <td>Cukup Sepanjang Waktu</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Sekolah menyediakan jamban yang dilengkapi dengan fasilitas pendukung untuk digunakan oleh siswa berkebutuhan khusus</td>
                          <td>Ya</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Tipe Jamban</td>
                          <td>Cubluk tanpa tutup</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok</td>
                          <td>tidak pernah</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Jumlah tempat cuci tangan</td>
                          <td>15</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>Jumlah tempat cuci tangan rusak</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>Apakah sabun dan air mengalir pada tempat cuci tangan</td>
                          <td>Ya</td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>Sekolah memiliki saluran pembungan air limbah dari jamban</td>
                          <td>Ada saluran pembuangan air limbah ke selokan/kali/sungai</td>
                        </tr>
                        <tr>
                          <td>11</td>
                          <td>Sekolah pernah menguras tangki septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja</td>
                          <td>Ya</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                @endif

                  
              </div>
              
              <div id="Tokyo" class="tabcontent">
                
                @if (env('MOCKUP_MODE', false))
                  <h3 class="bg-blue-400 p-2 mt-5 text-white">Lorem, ipsum.</h3>
                  <div class="bg-white px-3 py-4 leading-loose">
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                      <div class="w-full h-5 bg-gray-400 my-2"></div>
                  </div>

                  <h3 class="bg-blue-400 p-2 mt-5 text-white">Lorem, ipsum.</h3>
                  <div class="bg-white px-3 py-4 flex justify-center">
                    <div class="w-full h-64 bg-gray-400"></div>
                  </div>

                @else
                  <h3 class="bg-blue-400 p-2 mt-5 text-white">Kontak Utama</h3>
                  <div class="bg-white px-3 py-4 leading-loose">
                      <div><b>Alamat</b> : Jl. Pekanbaru - Bangkinang Km. 29 </div>
                      <div><b>RT / RW</b> : 1 / 2</div>
                      <div><b>Dusun</b> : -</div>
                      <div><b>Desa / Kelurahan</b> : Sungai Pinang</div>
                      <div><b>Kecamatan</b> : Kec. Tambang</div>
                      <div><b>Kabupaten</b> : Kab. Kampar</div>
                      <div><b>Provinsi</b> : Prov. Riau</div>
                      <div><b>Kode Pos</b> : 28462</div>
                      <div><b>Lintang</b> : 0</div>
                      <div><b>Bujur</b> : 101</div>
                  </div>
                  
                  <h3 class="bg-blue-400 p-2 mt-5 text-white">Peta Lokasi</h3>
                  <div class="bg-white px-3 py-4 flex justify-center">
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="440" id="gmap_canvas" src="https://maps.google.com/maps?q=Sman%201%20tambang&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://getasearch.com">getasearch</a><br><style>.mapouter{position:relative;text-align:right;height:440px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google map into website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:440px;width:600px;}</style></div></div>
                  </div>
                @endif


              </div>
        </div>
    </div>


            {{-- <div class="bg-blue-400">Identitas Sekolah</div>
            <div>NPSN : 10400371</div>
            <div>Status : Negeri</div>
            <div>Bentuk Pendidikan : SMA</div>
            <div>Status Kepemilikan : Pemerintah Daerah</div>
            <div>SK Pendirian Sekolah : 1111/109.22/pr/2000</div>
            <div>Tanggal SK Pendirian : 1987-12-24</div>
            <div>SK Izin Operasional : 1111/109.22/pr/2000</div>
            <div>Tanggal SK Izin Operasional : 2000-12-14</div>
        </div>

        <div class="col-span-2 bg-gray-100">
            <div class="bg-blue-400">Data Pelengkap</div>
            <div>Kebutuhan Khusus Dilayani : Tidak ada</div>
            <div>Nama Bank : BANK RIAU KEPRI</div>
            <div>Cabang KCP/Unit : -</div>
            <div>Rekening Atas Nama : SMA NEGERI 1 TAMBANG</div>
      
      <div class="flex flex-col bg-gray-100 mt-10">
        <div class="bg-blue-400">Data Rinci</div>
        <div>Status BOS : Bersedia Menerima</div>
        <div>Waku Penyelenggaraan : Pagi</div>
        <div>Sertifikasi ISO : Belum Bersertifikat</div>
        <div>Sumber Listrik : PLN</div>
        <div>Daya Listrik : 3000</div>
        <div>Akses Internet : Telkomsel Flash</div>
      </div>
    </div> --}}
    
</section>

@endsection

@push('after_script')
<script>


function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

//trigger opencity
document.getElementsByClassName('tablinks')[0].click()
        
</script>
@endpush
