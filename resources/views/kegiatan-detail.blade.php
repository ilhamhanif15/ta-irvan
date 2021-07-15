@extends('layouts.app')

@section("content")

<div class="container-pad pt-8 flex space-x-5">
    <div>
        <a href="{{ route('kegiatan.list') }}">Kegiatan</a>
    </div>
    <div>
        <i class="fa fa-angle-right"></i>
    </div>
    <div>
        Detail
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-3">KEGIATAN</div>
    <div class="font-bold text-3xl mb-3 text-center mt-12">Kegiatan/Event SMAN 1 Tambang</div>

    <p class="my-5">
        Bandung, 17 Juli 2021 <br/><br/>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatem pariatur officia, doloribus et voluptate accusantium ad delectus, laboriosam debitis perspiciatis,
        obcaecati fuga corrupti? Consequatur a ad eaque? Beatae error temporibus itaque commodi ab magnam illum,
        ullam soluta pariatur voluptatibus cumque amet minima aut non quae laboriosam molestias reprehenderit
        repellat libero aliquid rem enim necessitatibus deleniti. Libero nostrum perspiciatis delectus saepe
        ullam fugit ad! Beatae, in excepturi obcaecati eveniet dolore, blanditiis
        quos optio repudiandae sed illum eaque maxime consectetur sequi quibusdam doloribus. Veniam mollitia eveniet delectus porro eaque aperiam

        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatem pariatur officia, doloribus et voluptate accusantium ad delectus, laboriosam debitis perspiciatis,
        obcaecati fuga corrupti? Consequatur a ad eaque? Beatae error temporibus itaque commodi ab magnam illum,
        ullam soluta pariatur voluptatibus cumque amet minima aut non quae laboriosam molestias reprehenderit
        repellat libero aliquid rem enim necessitatibus deleniti. Libero nostrum perspiciatis delectus saepe
        ullam fugit ad! Beatae, in excepturi obcaecati eveniet dolore, blanditiis
        quos optio repudiandae sed illum eaque maxime consectetur sequi quibusdam doloribus. Veniam mollitia eveniet delectus porro eaque aperiam

        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatem pariatur officia, doloribus et voluptate accusantium ad delectus, laboriosam debitis perspiciatis,
        obcaecati fuga corrupti? Consequatur a ad eaque? Beatae error temporibus itaque commodi ab magnam illum,
        ullam soluta pariatur voluptatibus cumque amet minima aut non quae laboriosam molestias reprehenderit
        repellat libero aliquid rem enim necessitatibus deleniti. Libero nostrum perspiciatis delectus saepe
        ullam fugit ad! Beatae, in excepturi obcaecati eveniet dolore, blanditiis
        quos optio repudiandae sed illum eaque maxime consectetur sequi quibusdam doloribus. Veniam mollitia eveniet delectus porro eaque aperiam
    </p>

    <img src="{{ asset('images/Berita/berita-1.jpg') }}" class="max-h-96 w-full object-cover" alt="">

</section>

@endsection