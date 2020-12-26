@extends('layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
    <!-- header -->
    <header>
        <div id="header-carousel" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/WhatsApp Image 2020-08-16 at 17.24.59.jpeg"
                        alt="Universitas Pasundan">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/WhatsApp Image 2020-08-16 at 19.44.15.jpeg"
                        alt="Universitas Pasundan">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/01.jpg" alt="Universitas Pasundan">
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
                        <img src="images/sign.png" alt="">
                        <h1 class="title-news">Tentang Unpas</h1>
                    </div>    
                </div>
            </section>
        </div>

        <!-- content item -->
        <section class="content-about">
            <div class="jumbotron content-about">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xs-3 col-md-12 pt-5">
                            <p>Universitas Pasundan Bandung (UNPAS) berdiri sejak tanggal 14 November 1960. UNPAS
                                merupakan
                                perguruan tinggi
                                swasta yang mendapatkan akreditasi A serta meraih ranking ke-3 perguruan tinggi swasta
                                se-Indonesia versi 4Icu.</p>
                            <p>Mahasiswa UNPAS bukan saja berasal dari 33 Provinsi yang ada di Indonesia tetapi juga
                                dari
                                mahasiswa
                                asing negara-negara sahabat, seperti Thailand, Singapura, Somalia, Hunggaria, Polandia,
                                Taiwan, Turki,
                                Korea Selatan, Malaysia, Kanada, Timor Leste, Uzbekistan, Jerman, Jepang, China,
                                Tajikstan,
                                Estonia,Yunani,
                                Spanyol, Lithuania, Australia dan Kirgistan. Sampai saat ini Universitas Pasundan
                                memiliki 7
                                Fakultas,
                                25 Program Studi S1, 7 Program Studi Pascasarjana (S2) dan 3 Program Doktor (S3).</p>

                            <div class="container">
                                <div class="section-details row justify-content-center">
                                    <div class="details-button mt-5">
                                        <a href="sejarah-01.html" class="btn btn-details btn-sm ">
                                            Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <section class="section-profil row justify-content-center" id="profil">
                <div class="container">
                    <div class="row justify-content-center">
                        <img src="images/sign.png" alt="">
                        <h1 class="tittle-profil">Profil</h1>
                    </div>    
                </div>
            </section>
        </div>
        <section class="section section-conten-profil">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-4 col-lg-12 ">
                        <div class="card-video">
                            <iframe class="card-video-details" src="https://www.youtube-nocookie.com/embed/T349zzyGsr8"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- link -->
        
        <section class="section section-header-link">
            <div class="container">
                <section class="section section-link">
                    <div class="section-link-item justify-content-center">
                        <div class="card-deck ">
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-link text-center">
                                    <div class="card-item-link">
                                        <p>Visi & Misi</p>
                                        <a href="visi&misi.html">
                                            <img src="images/logo unpas.png" width="40%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-link text-center">
                                    <div class="card-item-link">
                                        <p>Organisasi</p>
                                        <a href="">
                                            <img src="images/logo unpas.png" width="40%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-link text-center">
                                    <div class="card-item-link">
                                        <p>Mahasiswa</p>
                                        <a href="">
                                            <img src="images/logo unpas.png" width="40%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-link text-center">
                                    <div class="card-item-link">
                                        <p>Lulusan</p>
                                        <a href="">
                                            <img src="images/logo unpas.png" width="40%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-link text-center">
                                    <div class="card-item-link">
                                        <p>Dosen</p>
                                        <a href="">
                                            <img src="images/logo unpas.png" width="40%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-2">
                                <div class="card card-link text-center">
                                    <div class="card-item-link">
                                        <p>Sarana & Prasarana</p>
                                        <a href="">
                                            <img src="images/logo unpas.png" width="40%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
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