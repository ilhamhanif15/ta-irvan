<?php

namespace App\View\Components\Route;

use Illuminate\View\Component;
use Request;
use Arr;
use Route;

class WebsiteNavbar extends Component
{
    public $viewType;
    public $routes;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($viewType = 'desktop', $routes = [])
    {
        $this->viewType = $viewType;
        $this->routes = [
            "BERANDA" => [
                "name" => "Beranda",
                "type" => "single",
                "url" => route('website.home'),
                "isActive" => Route::is('website.home'),
            ],
            "PROFIL" => [
                "name" => "Profil",
                "type" => "multi",
                "group" => [
                    "Profil" => [
                        "name" => "Profil Sekolah",
                        "url" => route('profil.index'),
                    ],
                    "Program" => [
                        "name" => "Program",
                        "url" => route('profil.program'),
                    ],
                    "Sarana & Prasarana" => [
                        "name" => "Sarana & Prasarana",
                        "url" => route('profil.sarana-and-prasarana'),
                    ],
                    "Sejarah" => [
                        "name" => "Sejarah",
                        "url" => route('profil.sejarah'),
                    ],
                    "Struktur Organisasi" => [
                        "name" => "Struktur Organisasi",
                        "url" => route('profil.struktur-organisasi'),
                    ],
                    "Visi & Misi" => [
                        "name" => "Visi & Misi",
                        "url" => route('profil.visi-misi'),
                    ],
                    "Guru & Staff" => [
                        "name" => "Guru & Staff",
                        "url" => route('profil.guru-and-staff'),
                    ],
                ],
                "isActive" => Route::is('profil.*'),
            ],
            "AKADEMIK" => [
                "name" => "Akademik",
                "type" => "multi",
                "group" => [
                    "Matpel" => [
                        "name" => "Mata Pelajaran",
                        "url" => route('akademik.mata-pelajaran'),
                    ],
                    "Jadpel" => [
                        "name" => "Jadwal Pelajaran",
                        "url" => route('akademik.jadwal-pelajaran'),
                    ],
                    "Jaduj" => [
                        "name" => "Jadwal Ujian",
                        "url" => route('akademik.jadwal-ujian'),
                    ],
                    "Prestasi" => [
                        "name" => "Prestasi",
                        "url" => route('akademik.prestasi'),
                    ],
                    "Kurikulum" => [
                        "name" => "Kurikulum Pendidikan",
                        "url" => route('akademik.kurikulum'),
                    ],
                ],
                "isActive" => Route::is('akademik.*'),
            ],
            "KEGIATAN" => [
                "name" => "Kegiatan",
                "type" => "multi",
                "group" => [
                    "Kegev" => [
                        "name" => "Kegiatan & Event",
                        "url" => route('kegiatan.list'),
                    ],
                    "eksul" => [
                        "name" => "Daftar Ekstrakurikuler",
                        "url" => route('kegiatan.daftar-ekskul')
                    ],
                ],
                "isActive" => Route::is('kegiatan.*'),
            ],
            "E-LEARNING" => [
                "name" => "E-Learning",
                "type" => "single",
                "url" => route('e-learning'),
                "isActive" => Route::is('e-learning'),
            ],
            "E-BOOKS" => [
                "name" => "E-Books",
                "type" => "single",
                "url" => route('e-books'),
                "isActive" => Route::is('e-books'),
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.route.website-navbar');
    }
}
