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
                                Sertifikat
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 pl-lg-3">
                    <div class="section section-details-01">
                        <img src="/images/akreditas.jpg" width="100%" alt="">
                        <br>
                        <img src="/images/ban-pt.jpg" width="100%" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section section-right"></div>
                    <ul class="list-unstyled">
                        <h3>Terbaru</h3>
                        <hr>
                        <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                            -</li>
                        <br>
                        <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                            -</li>
                        <br>
                        <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                            -</li>
                        <br>
                        <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                            -</li>
                    </ul>
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