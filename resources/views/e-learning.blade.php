@extends('layouts.app')

@push('head')
<style>
ul, #treeView {
  list-style-type: none;
}

#treeView {
  margin: 0;
  padding: 0;
}

.caret {
  cursor: pointer;
  -webkit-user-select: none; /* Safari 3.1+ */
  -moz-user-select: none; /* Firefox 2+ */
  -ms-user-select: none; /* IE 10+ */
  user-select: none;
}

.caret::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

.caret-down::before {
  -ms-transform: rotate(90deg); /* IE 9 */
  -webkit-transform: rotate(90deg); /* Safari */'
  transform: rotate(90deg);  
}

.nested {
  display: none;
  margin-left: 2em;
}

.active {
  display: block;
}
</style>
@endpush

@section("content")

@php
    if (env('MOCKUP_MODE', false)) {
        $data = [
            "1. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quo." => [
                "1.1. Semester 1" => [],
                "1.2. Semester 2" => []
            ],
            "2. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quo." => [
                "1.1. Semester 1" => [],
                "1.2. Semester 2" => []
            ],
            "3. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quo." => [
                "1.1. Semester 1" => [],
                "1.2. Semester 2" => []
            ],
            "4. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, quo." => [
                "1.1. Semester 1" => [],
                "1.2. Semester 2" => []
            ],
        ];
    } else {
        $data = [
            "1. Pendidikan Agama (Islam) dan Budi Pekerti" => [
                "1.1. Semester I" => [],
                "1.2. Semester II" => [
                    "SUMBER-SUMBER HUKUM ISLAM" => "storage/e-learning/1.2. Semester II -%20 SUMBER-SUMBER HUKUM ISLAM.pdf"
                ],
                "1.3. Semester III" => [],
                "1.4. Semester IV" => [],
                "1.5. Semester V" => [],
                "1.6. Semester VI" => [
                    "Pernikahan dalam Islam" => "storage/e-learning/1.6. Semester VI - Pernikahan dalam Islam.pptx"
                ],
            ],
            "2. Pendidikan Agama (Kristen) dan Budi Pekerti" => [
                " 2.1. Semester I" => [],
                " 2.2. Semester II" => [],
            ]
        ];
    }
@endphp

<section class="container-pad py-12">
    <div class="font-bold mb-5">BAHAN AJAR</div>
    
    <div class="text-gray-600 text-sm">Berikut ini bahan ajar yang dapat diunduh</div>
    <div class="border border-gray-300 p-4 my-3">
        <ul id="treeView">
            
            @foreach ($data as $key => $item)
                <li><span class="caret">{{ $key }}</span>
                    <ul class="nested">
                        @foreach ($item as $child_lvl_1_key => $child_lvl_1)
                            <li><span class="caret">{{ $child_lvl_1_key }}</span>
                                <ul class="nested">
                                    @foreach ($child_lvl_1 as $link_key => $link)
                                        <li>
                                            <a href="{{ $link }}" class="link-primary text-blue-500">- {{ $link_key }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach

        </ul>
    </div>
</section>

@endsection