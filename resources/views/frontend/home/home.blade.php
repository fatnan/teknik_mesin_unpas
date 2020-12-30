@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
    <header>
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators ">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
                <li data-target="#header-carousel" data-slide-to="3"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="/images/WhatsApp Image 2020-08-16 at 17.24.59.jpeg"
                        alt="Universitas Pasundan">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/WhatsApp Image 2020-08-16 at 19.44.15.jpeg"
                        alt="Universitas Pasundan">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="/images/01.jpg" alt="Universitas Pasundan">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 pb-0" src="/images/go-car.png" alt="Universitas Pasundan">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <span class="fa fa-chevron-circle-left" style="font-size: 40px;"></span>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <span class="fa fa-chevron-circle-right" style="font-size:40px;"></span>
            </a>
        </div>
    </header>

    <main>
        <!-- box about -->
        <div class="container">
            <section class="section-about row justify-content-center" id="about">
                <div class="container">
                    <div class="row justify-content-center">
                        <img src="/images/sign.png" alt="">
                        <h1 class="title-news">Berita</h1>
                    </div>    
                </div>
            </section>
        </div>
        <section class="section-conten">
            <div class="container">
                <div class="row">
                    <div class="col-text-center section-about-heading">
                    </div>
                </div>
            </div>
        </section>
        <!-- content item -->
        <section class="section-content-item" id="contenItem">
            <div class="container">
                <div class="section-content-news row justify-content-center">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">              
                            <div class="item-img">
                                <a href="/berita/pmb-fakultas-teknik-universitas-pasundan">
                                    <img src="/images/banner-pendaftaran-MHS-baru.jpeg" alt="" width="100%"
                                        height="200px">
                                </a>
                            </div>
                            <div class=" item-judul">
                                <a>Pendaftaran Mahasiswa Baru Fakultas Teknik UNPAS</a>                    
                                <ul class="list-unstyled">
                                    <li class="post-date">
                                        <i class="far fa-calendar-alt"
                                            style="color: #333; font-weight: lighter; font-size: small;"> 25 September
                                            2020</i>
                                    </li>
                                </ul>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <a href="/berita/pmb-fakultas-teknik-universitas-pasundan">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                            <a href="/berita/Mobil-Listrik-Karya-Mahasiswa-Mesin-Unpas">
                                <img src="/images/IIMS_LISTRIK1_MABUA_MEDIA.jpg" alt="" width="100%"
                                    height="200px">
                            </a>
                            </div>
                            <div class="item-judul">
                                <a>Mobil Balap listrik Karya Mahasiswa Unpas Bandung Mejeng di IIMS</a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 12 Agustus 2020</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/berita/Mobil-Listrik-Karya-Mahasiswa-Mesin-Unpas">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                            <a href="/frontend/berita/teknik-mesin-unpas-ciptakan-traktor-portable.html">
                                <img src="/images/Screen-Shot-2019-07-26-at-10.36.57-300x229.png" alt=""
                                    width="100%">
                            </a>
                            </div>
                            <div class="item-judul">
                                <a>Teknik Mesin Fakultas Teknik Unpas, Ciptakan Traktor Portable
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 26 Juli 2019</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/frontend/berita/teknik-mesin-unpas-ciptakan-traktor-portable.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                            <a href="/frontend/berita/Projek-Sweeper-Mahasiswa-Mesin.html">
                                <img src="/images/swipper.jpg" alt="" width="100%">
                            </a>
                            </div>
                            <div class="item-judul">
                                <a>Projek Sweeper Mahasiswa Teknik Mesin Unpas</a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 28 Februari 2020</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/frontend/berita/Projek-Sweeper-Mahasiswa-Mesin.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>                      
                    </div>
                </div>
            </div>
            <!-- selengkapnya -->
            <div class="container">
                <div class="section-details row justify-content-center">
                    <div class="details-button mt-5">
                        <a href="/frontend/berita/news.html" class="btn btn-details btn-sm ">
                            Selengkapnya
                        </a>
                    </div>
                </div>
        </section>
        <!-- sambutan  -->
        <div class="container">
            <section class="section-sambutan row justify-content-center" id="sambutan">
                <div class="container">
                    <div class="row justify-content-center">
                        <img src="/images/sign.png" alt="">
                        <h1 class="title-news">Sambutan</h1>
                    </div>    
                </div>
            </section>
        </div>
        <section class="section-01">
            <div class="container">
                <div class="row font-size-03">
                    <div class="col-12 text-center-hidden" style="margin-top: 100px;">
                        <h2 class="font-size-01 font-weight-bold pt-4 mx-3"> Rektor</h2>
                        <p class="font-size-02 mx-3"> Prof. Dr. Ir. H. Eddy Jusuf Sp, M.Si., M.Kom</p>
                        <div class="col-12">
                            <img class="float-left mr-3" src="/images/pimpinan unpas teknik.jpg">
                            <p dir="ltr" class="font-size-04">
                                Assalamu’alaikum Warahmatullaahi Wabarokatuh.
                                <br>
                                Tak ada yang tidak berubah. Begitulah sunatullahnya. Tak ada yang diam dan stagnan. Tak
                                jadi soal, apakah sekedar mengalun tenang, atau justru menohok tajam. Yang tak pernah
                                berubah, adalah perubahan, adalah perubahan itu sendiri. Bahwa kehidupan di dunia selalu
                                sambung-menyambung dalam alur yang kita namakan sejarah, sejak entah kapan, serta akan
                                berakhir entah kapan pula. Substansi dari perubahan, memang dapat kita prediksi. Namun
                                hasil akhir suatu episode perubahan, pada hakikatnya adalah hak preogatif Sang Maha
                                Pemilik Sejarah Allah Subahanahu wa Taala.
                                <br>
                                Wassalamu’alaikum Warahmatullaahi Wabarokatuh.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 text-center-hidden-02">
                        <h2 class="font-size-01 font-weight-bold pt-4 mx-3"> Dekan</h2>
                        <p class="font-size-02 mx-3">Dr. Ir. Yusman Taufik, MP.</p>
                        <div class="col-12">
                            <img class="float-left mr-3" src="/images/dekan.png">
                            <p dir="ltr" class="font-size-04">
                                Assalamu’alaikum Warahmatullaahi Wabarokatuh.
                                <br>
                                Selamat datang kepada seluruh mahasiswa baru, yang resmi menjadi mahasiswa Universitas Pasundan (Unpas). 
                                Dengan penuh keramahan dan kehangatan kami menyambut Anda semua yang akan turut menentukan perjalanan hidup Anda dan sejarah Unpas.
                                Anda telah menjadi orang-orang terpilih dari ribuan kepeminatan yang ingin kuliah di Program Studi yang Anda pilih dan terdaftar saat ini. Sekali lagi, selamat. 
                                <br>
                                Wassalamu’alaikum Warahmatullaahi Wabarokatuh.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 text-center-hidden mb-5">
                        <h2 class="font-size-01 font-weight-bold pt-4 mx-3"> Ketua Prodi</h2>
                        <p class="font-size-02 mx-3"> Dr. Ir. Sugiharto, MT.</p>

                        <div class="col-12">
                            <img class="float-left mr-3" src="/images/ketua prodi.png">
                            <p dir="ltr" class="font-size-04">
                                Assalamu’alaikum Warahmatullaahi Wabarokatuh.
                                <br>
                                Saat ini, hampir semua bidang industri memanfaatkan mesin untuk efisiensi dan memaksimalkan produksinya. 
                                Itu sebabnya kebutuhan akan tenaga profesional dalam bidang teknik mesin masih sangat tinggi.

                                Universitas Pasundan menyelenggarakan Program Studi Teknik Mesin dengan akreditasi A BAN-PT untuk mencetak sumber daya yang mampu berkiprah di bidang manufaktur, desain & bangun produk, konstruksi dan perancangan, hingga konversi energi. 
                                
                                Lulusan teknik mesin berpeluang mengambil tempat-tempat strategis di berbagai industri manufaktur, pembangkitan energi, perusahaan minyak dan gas, otomotif, hingga jasa konsultasi, desain, & konstruksi. 
                                
                                <br>
                                Wassalamu’alaikum Warahmatullaahi Wabarokatuh.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- award-->
        <div class="container">
            <section class="section-award row justify-content-center" id="award">
                <div class="container">
                    <div class="row justify-content-center">
                        <img src="/images/sign.png" alt="">
                        <h1 class="title-news">Penghargaan</h1>
                    </div>    
                </div>
            </section>
        </div>

        <section class="section-content-award" id="contenAward">
            <section class="section-content-award-details">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card-deck">
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/images/KAN21-300x200.png" class="card-img-top" alt="...">
                                        </div>
                                        <div class="flip-card-back">
                                            <a href="sertifikat.html">
                                                <h5 class="card-title">Akreditasi BAN-PT</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/images/KAN21-300x200.png" class="card-img-top" alt="...">
                                        </div>
                                        <div class="flip-card-back">
                                            <a href="">
                                                <h5 class="card-title" ">Akreditasi BAN-PT</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <img src="/images/KAN21-300x200.png" class="card-img-top" alt="...">
                                        </div>
                                        <div class="flip-card-back">
                                            <a href="">
                                                <h5 class="card-title">Akreditasi BAN-PT</h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="section-details row justify-content-center">
                        <div class="details-button mt-5">
                            <a href="penghargaan.html" class="btn btn-details btn-sm ">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
            </section>
        </section>

        <!-- viedo -->
        <div class="container">
            <section class="section-video row justify-content-center" id="video">
                <div class="container">
                    <div class="row justify-content-center">
                        <img src="/images/sign.png" alt="">
                        <h1 class="title-video">Video</h1>
                    </div>    
                </div>
            </section>
        </div>

        <!-- conten video -->
        <section class="section-content-video" id="contenVideo">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="card-deck justify-content-center">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="/frontend/berita/universitas-pasundan-profil.html">
                                <img class="card-01" src="/images/profil-unpas.png" alt="" width="100%">
                            </a>
                            <a class="link" href="universitas-pasundan-profil.html" style="font-weight:bold;">Profil
                                Universitas
                                Pasundan Bandung</a>
                            <p style="color: #ddd;">Universitas Pasundan (UNPAS) berdiri pada tanggal 14 November
                                1960, keberadaan dan
                                pengembangannya tidak lepas dari tujuan dan cita-cita Paguyuban Pasundan.</p>

                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <a href="/frontend/berita/pendaftaran-wisuda-online-UNPAS.html">
                                <img class="card-01" src="/images/image-pendaftaran.png" alt="" width="100%">
                            </a>

                            <a class="link" href="pendaftaran-wisuda-online-UNPAS.html"
                                style="font-weight:bold;">Pendaftaran Wisuda Online
                                UNPAS</a>
                            <p style="color: #ddd;">Prosedur pendaftaran wisuda online Fakultas Teknik Universitas
                                Pasundan
                                Gelombang II 2018/2019
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="container">
                <div class="section-details row justify-content-center">
                    <div class="details-button mt-5">
                        <a href="konten-video.html" class="btn btn-details-02  ">
                            Selengkapnya
                        </a>
                    </div>
                </div>
        </section>

        <!-- partner -->
        <section class="section-header-partner">
            <div class="container">
                <section class="section-partner">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <h2>PARTNER</h2>
                            <p>universities that trust us</p>
                        </div>
                        <div class="col-12 col-lg-8">
                            <img src="/images/NS Devil.png" alt="" class="img-partner">
                            <img src="/images/Mongolia.png" alt="" class="img-partner">
                            <img src="/images/Guangdong.png" alt="" class="img-partner">
                            <img src="/images/Hebei Normal.png" alt="" class="img-partner">
                            <img src="/images/Kanazawa.png" alt="" class="img-partner">
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- scroll to top button -->
        <a class="top-bar hide" href="" id="myBtn">
            <span class="fas fa-angle-up fa-2x"></span>
        </a>
    </main>
@endsection