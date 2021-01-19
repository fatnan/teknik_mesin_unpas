@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
<main>
    <section class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-text-center section-about-heading">
                </div>
            </div>
        </div>
    </section>
    <!-- video -->
    <section class="section-details-07">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-4 col-lg-12 ">
                    <div class="card card-02">
                        <iframe class="card card-video-details-02" src="https://www.youtube.com/embed/2dEgl8dbekk"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    <div class="title">
                        <h1 style="font-weight: bold;">Profil Universitas
                            Pasundan Bandung</h1>
                        <div class="social-nav">
                            <div class="social-01">
                                <a href="#">
                                    <i class="fab fa-facebook-square facebook" style="font-size:30px;"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UC5iPjAkeo4yNS7_lefGEYMw/videos">
                                    <i class="fab fa-youtube-square youtube" style="font-size:30px;"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram-square instagram" style="font-size:30px;"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter-square twitter" style="font-size:30px"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-line line" style="font-size:30px"></i>
                                </a>
                            </div>
                        </div>

                        <h6 style="font-weight: bold;">Senin, 21 September 2020 </h6>
                        <p>
                            Universitas Pasundan (UNPAS) berdiri pada tanggal 14 November 1960, keberadaan dan
                            pengembangannya tidak lepas dari tujuan dan cita-cita Paguyuban Pasundan, sebagai
                            organisasi induk yang lahir tahun 1913, sehingga esensi dan eksistensinya tidak terlepas
                            dari garapan pengabdian Paguyuban Pasundan, terutama dalam turut mencerdaskan kehidupan
                            dan kesejahteraan bangsa Indonesia. UNPAS telah tumbuh dan berkembang menjadi sebuah
                            universitas terkemuka dan memiliki predikat sebagai salah satu perguruan tinggi terbaik
                            di indonesia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- card link -->
    <section class="section-content-terkait1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <h3>Terkait</h3>
                    <hr>
                    <div class="card-deck">
                        <div class="card card-terkait text-center">
                            <a href="">
                                <img src="/images/logo unpas.png" alt="" width="30%">
                            </a>
                            <p>Teknik Mesin Unpas</p>
                        </div>
                        <div class="card card-terkait text-center">
                            <a href="">
                                <img src="/images/logo unpas.png" alt="" width="30%">
                            </a>
                            <p>Teknik Mesin Unpas</p>
                        </div>
                        <div class="card card-terkait text-center">
                            <a href="">
                                <img src="/images/logo unpas.png" alt="" width="30%">
                            </a>
                            <p>Teknik Mesin Unpas</p>
                        </div>
                        <div class="card card-terkait text-center">
                            <a href="">
                                <img src="/images/logo unpas.png" alt="" width="30%">
                            </a>
                            <p>Teknik Mesin Unpas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- scroll to top button -->
    <a class="top-bar hide" href="" id="myBtn">
        <span class="fas fa-angle-up fa-2x"></span>
     </a>
</main>
@endsection