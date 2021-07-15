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
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatem pariatur officia, doloribus et voluptate accusantium ad delectus, laboriosam debitis perspiciatis,
        obcaecati fuga corrupti? Consequatur a ad eaque? Beatae error temporibus itaque commodi ab magnam illum,
        ullam soluta pariatur voluptatibus cumque amet minima aut non quae laboriosam molestias reprehenderit
        repellat libero aliquid rem enim necessitatibus deleniti. Libero nostrum perspiciatis delectus saepe
        ullam fugit ad! Beatae, in excepturi obcaecati eveniet dolore, blanditiis
        quos optio repudiandae sed illum eaque maxime consectetur sequi quibusdam doloribus.
        <br/>
        <br/>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatem pariatur officia, doloribus et voluptate accusantium ad delectus, laboriosam debitis perspiciatis,
        obcaecati fuga corrupti? Consequatur a ad eaque? Beatae error temporibus itaque commodi ab magnam illum,
        ullam soluta pariatur voluptatibus cumque amet minima aut non quae laboriosam molestias reprehenderit
        repellat libero aliquid rem enim necessitatibus deleniti. Libero nostrum perspiciatis delectus saepe
        ullam fugit ad! Beatae, in excepturi obcaecati eveniet dolore, blanditiis
        quos optio repudiandae sed illum eaque maxime consectetur sequi quibusdam doloribus.
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