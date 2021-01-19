@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-3">
                        <nav>
                            <div class="social-nav">
                                <div class="social-01">
                                    <a href="#">
                                        <i class="fab fa-facebook-square facebook" style="font-size:30px;"></i>
                                    </a>
                                    <a href="#">
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
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Beranda
                                </li>
                                <li class="breadcrumb-item active">
                                    Sarjana
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 pl-lg-3">
                        <div class="section section-details-01">
                            <h1><?=ucfirst($jenis)?></h1>
                            <?=$content?>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section section-right-01">
                            <ul class="list-unstyled">
                                <ul class="list-unstyled">
                                    <h3>Terbaru</h3>
                                    <hr>
                                    <li><a href="pelatihanProg.html">Pelatihan</a>
                                    </li>
                                    <hr>
                                    <li><a href="sarjanaProg.html">Sarjana</a>
                                    </li>
                                    <hr>
                                    <li><a href="magisterProg.html">Magister</a>
                                    </li>
                                    <hr>
                                    <li><a href="doctoralProg.html">Doctoral</a>
                                    </li>
                                    <hr>
                                    <li><a href="postDoctoralProg.html">Post Doctoral</a>
                                    </li>
                                    <hr>
                                    <li><a href="beasiswa.html">Beasiswa</a>
                                    </li>
                                    <hr>
                                </ul>
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