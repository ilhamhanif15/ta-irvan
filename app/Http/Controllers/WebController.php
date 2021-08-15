<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\DataCollection\DataSekolah;
use Str;

class WebController extends Controller
{
    private $dataSekolah = [];

    public function __construct()
    {
        // $this->prefixDataSekolah = env('MOCKUP_MODE', false) ? 'data_sekolah_mockup' : 'data_sekolah';
        $this->dataSekolah = env('MOCKUP_MODE', false) ? DataSekolah::getMockup() : DataSekolah::get();
    }

    // HOME PAGE
    public function homeView()
    {
        return view('beranda', [
            "banners" => $this->dataSekolah['beranda']['banners'],
            "daftarBerita" => collect($this->dataSekolah['berita'])->take(4),
            "daftarKegiatan" => collect($this->dataSekolah['kegiatan'])->take(3),
            "daftarPengumuman" => collect($this->dataSekolah['pengumuman'])->take(4),
            "kepsekName" => $this->dataSekolah['beranda']['kepsekName'],
            "sambutanText" => $this->dataSekolah['beranda']['sambutanText'],
        ]);
    }
    
    // BERITA & ACARA
    public function beritaDetail($idBerita)
    {
        $daftarBerita = $this->dataSekolah['berita'];

        return view('berita-detail', [
            "daftarBerita" => $daftarBerita,
            "berita" => $daftarBerita[$idBerita] ?? null
        ]);
    }
    
    public function beritaList(Request $request)
    {
        $daftarBerita = collect($this->dataSekolah['berita']);
        $totalBerita = $daftarBerita->count();

        $page = $request->page ?? 1;
        $limit = 4;

        $daftarBerita = $daftarBerita->skip( ($page-1)*$limit )->take($limit);

        return view('berita-list', [
            "daftarBerita" => $daftarBerita,
            "totalBerita" => $totalBerita,
            "page" => (int) $page
        ]);
    }
    
    
    // KEGIATAN
    public function kegiatanDetail($idKegiatan)
    {
        $daftarKegiatan = $this->dataSekolah['kegiatan'];

        return view('kegiatan-detail', [
            "daftarKegiatan" => $daftarKegiatan,
            "kegiatan" => $daftarKegiatan[$idKegiatan] ?? null,
        ]);
    }
    
    public function kegiatanList(Request $request)
    {
        $daftarKegiatan = collect($this->dataSekolah['kegiatan']);
        $totalKegiatan = $daftarKegiatan->count();

        $page = $request->page ?? 1;
        $limit = 4;

        $daftarKegiatan = $daftarKegiatan->skip( ($page-1)*$limit )->take($limit);

        return view('kegiatan-list', [
            "daftarKegiatan" => $daftarKegiatan,
            "totalKegiatan" => $totalKegiatan,
            "page" => (int) $page
        ]);
    }
    
    // PENGUMUMAN
    public function pengumumanDetail($idPengumuman)
    {
        $daftarPengumuman = $this->dataSekolah['pengumuman'];

        return view('pengumuman-detail', [
            "daftarPengumuman" => $daftarPengumuman,
            "pengumuman" => $daftarPengumuman[$idPengumuman] ?? null,
        ]);
    }
    
    public function pengumumanList(Request $request)
    {
        $daftarPengumuman = collect($this->dataSekolah['pengumuman']);
        $totalPengumuman = $daftarPengumuman->count();

        $page = $request->page ?? 1;
        $limit = 4;

        $daftarPengumuman = $daftarPengumuman->skip( ($page-1)*$limit )->take($limit);

        return view('pengumuman-list', [
            "daftarPengumuman" => $daftarPengumuman,
            "totalPengumuman" => $totalPengumuman,
            "page" => (int) $page
        ]);
    }

    // PENCARIAN
    public function searchList(Request $request)
    {
        $searchKeyword = Str::lower($request->s ?? '');

        $dataBerita         = $this->_searchFunction($this->dataSekolah['berita'], $searchKeyword, "berita", "idBerita");
        $dataKegiatan       = $this->_searchFunction($this->dataSekolah['kegiatan'], $searchKeyword, "kegiatan", "idKegiatan");
        $dataPengumuman     = $this->_searchFunction($this->dataSekolah['pengumuman'], $searchKeyword, "pengumuman", "idPengumuman");

        $datas = [
            ...$dataBerita,
            ...$dataKegiatan,
            ...$dataPengumuman,
        ];

        $totalData = count($datas);

        $page = $request->page ?? 1;
        $limit = 4;

        $dataList = collect($datas)->skip( ($page-1)*$limit )->take($limit);

        return view('search', [
            "datas" => $dataList,
            "searchKeyword" => $searchKeyword,
            "totalData" => $totalData,
            "page" => (int) $page
        ]);
    }

    private function _searchFunction($dataCollection, $keyword, $type, $idParamDetail)
    {
        $dataReturn = [];
        foreach ($dataCollection as $id => $data) {
            if (Str::contains( Str::lower($data['title']) , $keyword)) {
                $temp           = $data;
                $temp['id']     = $id;
                $temp['type']   = $type;
                $temp['route']  = route($type.'.detail', [$idParamDetail => $id]);
                array_push($dataReturn, $temp);
            }
        }

        return $dataReturn;
    }


    // PRESTASI
    public function prestasiView()
    {
        return view('profil-prestasi', [
            "data" => $this->dataSekolah['prestasi-sekolah']
        ]);
    }

    // Profil Guru & Staff
    public function guruAndStaffView()
    {
        return view('profil-guru-and-staff', [
            "data" => $this->dataSekolah['guru-and-staff']
        ]);
    }

    // MATA PELAJARAN
    public function mataPelajaranView()
    {
        return view('akademik-mata-pelajaran', [
            "data" => $this->dataSekolah['mata-pelajaran']
        ]);
    }

    // JADWAL PELAJARAN
    public function jadwalPelajaranView(Request $request)
    {
        $default_class = "x-a";
        $kelas = $request->kelas ?? $default_class;
        $dataKelas = $this->dataSekolah['jadwal-pelajaran'][$kelas] ?? ["data" => [], "kelas" => "-"];

        return view('akademik-jadwal-pelajaran', [
            "data" => $dataKelas
        ]);
    }

    public function jadwalUjianView()
    {
        return view('akademik-jadwal-ujian');
    }

    public function daftarEkskulView()
    {
        return view('kegiatan-ekskul', [
            "data" => $this->dataSekolah['daftar-ekskul']
        ]);
    }
}
