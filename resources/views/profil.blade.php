@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        Profil
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-5 text-2xl">PROFIL SMAN 1 Tambang</div>
    <img src="{{ asset('images/psekolah/smaneg1.jpg') }}" class="max-h-96 w-full object-cover" alt="">

    <div class="grid grid-cols-4 gap-4 my-8">
        <div class="flex flex-col space-x-1 space-y-4">
            <h1><i class="fa fa-user" aria-hidden="true"></i> Kepsek  : Khairullah</h1>
            <h1><i class="fa fa-mobile" aria-hidden="true"></i> Operator : Hendra Feri</h1>
            <h1><i class="fa fa-star" aria-hidden="true"></i>Akreditasi : A</h1>
            <h1><i class="fa fa-book" aria-hidden="true"></i> Kurikulum : Kurikulum 2013</h1>
            <h1><i class="fa fa-clock-o" aria-hidden="true"></i> Waktu : Pagi</h1>
        </div>

        <div class="col-span-3 bg-gray-100">

            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'London')">Profil</button>
                <button class="tablinks" onclick="openCity(event, 'Paris')">Rekapitulasi</button>
                <button class="tablinks" onclick="openCity(event, 'Tokyo')">Kontak</button>
              </div>
              
              <div id="London" class="tabcontent">

                <div class="grid grid-cols-4 gap-4 my-8">

                 <div class="col-span-2 bg-white">
                  <h3 class="bg-blue-400 p-2 text-white">Identitas Sekolah</h3>
                  <h1 class="pt-2">NPSN : 10400371.</h1>
                  <h1>Status : Negeri</h1>
                  <h1>Bentuk Pendidikan : SMA</h1>
                  <h1>Status Kepemilikan : Pemerintah Daerah</h1>
                  <h1>SK Pendirian Sekolah : 1111/109.22/pr/2000</h1>
                  <h1>Tanggal SK Pendirian : 1987-12-24</h1>
                  <h1>SK Izin Operasional : 1111/109.22/pr/2000</h1>
                  <h1>Tanggal SK Izin Operasional : 2000-12-14</h1>
                 </div>

              <div class="col-span-2 bg-white">
                <h3 class="bg-blue-400 p-2 text-white">Data Pelengkap</h3>
                <h1 class="pt-2">Kebutuhan Khusus Dilayani : Tidak ada</h1>
                <h1>Nama Bank : BANK RIAU KEPRI</h1>
                <h1>Cabang KCP/Unit : -</h1>
                <h1>Rekening Atas Nama : SMA NEGERI 1 TAMBANG</h1>
              

              <div class="flex flex-col mt-10">

                <h3 class="bg-blue-400 p-2 text-white">Data Rinci</h3>
                <h1 class="pt-2">Status BOS : Bersedia Menerima</h1>
                <h1>Waku Penyelenggaraan : Pagi</h1>
                <h1>Sertifikasi ISO : Belum Bersertifikat</h1>
                <h1>Sumber Listrik : PLN</h1>
                <h1>Daya Listrik : 3000</h1>
                <h1>Akses Internet : Telkomsel Flash</h1>
              </div>
            </div>

                </div>
              </div>
              
              <div id="Paris" class="tabcontent">
                  <h3 class="bg-blue-400 p-2 mt-10 text-white">Data PTK dan PD</h3>
                <table class="table-auto">
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
                      <tr class="bg-emerald-200">
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
                  <div class="mt-2">Keterangan:</div>
                  <ol class="list-disc list-inside">
                      <li>Data Rekap Per Tanggal 23 Juli 2021</li>
                      <li>Penghitungan PTK adalah yang sudah mendapat penugasan, berstatus aktif dan terdaftar di sekolah induk.</li>
                      <li>Singkatan : </li>
                    </ol>
                    <ol class="list-decimal list-inside pl-5">
                        <li>PTK = Guru ditambah Tendik </li> 
                        <li>PD = Peserta Didik </li>
                           </ol>

                           <h3 class="bg-blue-400 p-2 mt-5 text-white">Data Sanitasi</h3>

                           <div class="table w-full ...">
                            <div class="table-row-group">
                              <div class="table-row">
                                <div class="table-cell ...">No</div>
                                <div class="table-cell ...">Nama Variabel</div>
                                <div class="table-cell ...">Uraian</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">1</div>
                                <div class="table-cell ...">Sumber Air</div>
                                <div class="table-cell ...">Sumur Terlindungi</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">2</div>
                                <div class="table-cell ...">Sumber air minum</div>
                                <div class="table-cell ...">Sumur Terlindungi</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">3</div>
                                <div class="table-cell ...">Kecukupan air bersih</div>
                                <div class="table-cell ...">Cukup Sepanjang Waktu</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">4</div>
                                <div class="table-cell ...">Sekolah menyediakan jamban yang dilengkapi dengan fasilitas pendukung untuk digunakan oleh siswa berkebutuhan khusus</div>
                                <div class="table-cell ...">Ya</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">5</div>
                                <div class="table-cell ...">Tipe Jamban</div>
                                <div class="table-cell ...">Cubluk tanpa tutup</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">6</div>
                                <div class="table-cell ...">Jumlah hari dalam seminggu siswa mengikuti kegiatan cuci tangan berkelompok</div>
                                <div class="table-cell ...">tidak pernah</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">7</div>
                                <div class="table-cell ...">Jumlah tempat cuci tangan</div>
                                <div class="table-cell ...">15</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">8</div>
                                <div class="table-cell ...">Jumlah tempat cuci tangan rusak</div>
                                <div class="table-cell ...">0</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">9</div>
                                <div class="table-cell ...">Apakah sabun dan air mengalir pada tempat cuci tangan</div>
                                <div class="table-cell ...">Ya</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">10</div>
                                <div class="table-cell ...">Sekolah memiliki saluran pembungan air limbah dari jamban</div>
                                <div class="table-cell ...">Ada saluran pembuangan air limbah ke selokan/kali/sungai</div>
                              </div>
                              <div class="table-row">
                                <div class="table-cell ...">11</div>
                                <div class="table-cell ...">Sekolah pernah menguras tangki septik dalam 3 hingga 5 tahun terakhir dengan truk/motor sedot tinja</div>
                                <div class="table-cell ...">Ya</div>
                              </div>
                            </div>
                          </div>
                  
              </div>
              
              <div id="Tokyo" class="tabcontent">
                <div class="flex flex-col">
                    <h3 class="bg-blue-400 p-2 mt-5 text-white">Kontak Utama</h3>
                    <div> Alamat : Jl. Pekanbaru - Bangkinang Km. 29 </div>
                    <div>RT / RW : 1 / 2</div>
                    <div>Dusun : -</div>
                    <div>Desa / Kelurahan : Sungai Pinang</div>
                    <div>Kecamatan : Kec. Tambang</div>
                    <h1>Kabupaten : Kab. Kampar</h1>
                    <h1>Provinsi : Prov. Riau</h1>
                    <h1>Kode Pos : 28462</h1>
                    <h1>Lintang : 0</h1>
                    <h1>Bujur : 101</h1>
                </div>
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
        
</script>
@endpush
