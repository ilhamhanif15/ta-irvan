<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Config;
use App\DataCollection\DataSekolah;

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
}
