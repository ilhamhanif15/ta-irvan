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
        Kurikulum Pendidikan
    </div>
</div>

<section class="container-pad py-12">

    <div class="font-bold mb-6 text-lg">KURIKULUM PENDIDIKAN</div>
    @if (env('MOCKUP_MODE', false))
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum laboriosam odio odit, non ullam aliquam eveniet doloremque eum possimus fugiat. Debitis quasi molestias nam officiis iure possimus aperiam ab. Molestias ducimus repellat ullam, commodi eius soluta facere harum architecto odio inventore? Laboriosam consequuntur illum veniam nam est? Impedit, accusamus ipsum. Officia quos, dolores ratione illo, sed ut quia iure aliquam debitis in provident deleniti ab nisi! Velit recusandae, cumque deleniti alias vitae placeat accusamus nesciunt aliquid, iusto totam numquam voluptate enim dolorem quidem repudiandae ipsum a earum officia, quas veritatis perferendis. Eligendi facilis commodi voluptas repudiandae, earum dolorum voluptates vero in voluptate deleniti consectetur velit iure beatae rem distinctio laborum recusandae pariatur illo tempore odio possimus autem quae. Quibusdam modi laudantium quis in aperiam vel voluptates sequi, repellendus voluptatum dolore molestias nisi obcaecati libero consectetur error? Quos nisi inventore possimus quasi adipisci, odit repellat sint quaerat tempore obcaecati. Voluptatem recusandae eos corporis aut. Vel eius commodi suscipit, aliquid adipisci dignissimos porro iusto, pariatur quae, laboriosam accusantium repellat quasi consequatur amet vitae enim molestias? Doloribus quam quidem quos, architecto pariatur quia, non illum reprehenderit sapiente dignissimos nemo ratione delectus eos, deserunt explicabo rem velit obcaecati impedit doloremque veritatis et placeat fugit? Facere velit cumque iusto, maiores qui vitae, dolores nemo mollitia neque ratione corrupti voluptatem sed nihil quis quam reiciendis quod vel unde, sapiente atque ipsum. Omnis, earum! Non error labore animi officiis? Numquam adipisci nobis inventore, impedit itaque placeat natus cupiditate voluptatum est libero soluta distinctio autem dolore fugit sapiente!
        </p>
    @else
        <p>
            Kurikulum SMA Negeri 1 Tambang disusun dengan mengacu pada
            Standar Isi (SI) dan Standar Kompentensi Lulusan (SKL) yang telah 
            ditetapkan oleh BSNP dan model-model pembelajaran atau program yang
            dihasilkan oleh Pusat Kurikulum.
            Kurikulum SMA Negeri 1 Tambang menjadi acuan bagi satuan
            pendidikan dalam melaksanakan pendidikan dan pembelajaran dengan
            mengedepankan prinsip pengembangan Kurikulum 2013 dengan
            penyesuaian terhadap pemanfaatan analisis kondisi ril SMA Negeri 1
            Tambang dan Analisis Kondisi Lingkungan Sekolah.
            Kurikulum SMA Negeri 1 Tambang disusun agar sekolah memiliki
            pedoman penyelenggaraan kegiatan pembelajaran dan pemenuhan 8 Standar
            Nasional Pendidikan (SNP) dalam rangka mencapai tujuan pendidikan
            nasional. Oleh sebab itu pengembangan Kurikulum SMA Negeri 1 Tambang
            memperhatikan unsur-unsur sebagai berikut:
            <ol class="space-y-2 list-decimal list-inside pl-4 pt-2">
                <li>Peningkatan iman dan takwa serta akhlak mulia</li>
                <li>Keragaman potensi dan karakteristik daerah dan lingkungan</li>
                <li>Tuntutan pembangunan daerah dan nasional</li>
                <li>Tuntutan dunia kerja</li>
                <li> Perkembangan ilmu pengetahuan, teknologi, dan seni</li>
                <li> Agama</li>
                <li> Dinamika perkembangan global</li>
                <li> Penerapan kegiatan pembelajaran dengan pendekatan pendidikan
                berkarakter.</li>
                <li>Pengembangan kegiatan ekstra kurikuler yang dapat mengembangkan
                potensi diri peserta didik, serta pengembangan kegiatan pramuka sebagai
                ekstra kurikuler wajib yang harus diikuti.</li>
                <li> Persatuan nasional dan nilai-nilai kebangsaan</li>
                <li> Kondisi sosial budaya masyarakat setempat</li>
                <li>Kesetaraan Gender</li>
                <li>Karakteristik satuan pendidikan</li>
                <li>Integrasi Nilai-nilai Karakter Bangsa</li>
                
            </ol>
        </p>
    @endif
</section>

@endsection