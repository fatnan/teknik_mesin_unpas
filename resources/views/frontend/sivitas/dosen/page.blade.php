@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
<style>
    @media only screen and (max-width: 600px) {
        .section-sambutan .title-news{
           font-size: px   
        }
    }
</style>
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
                                    Sivitas
                                </li>
                                <li class="breadcrumb-item">
                                <a href="{{ url('/sivitas/dosen/index')}}" style="color:#333">Dosen</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Ir. Toto Supriyono, MT.
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- title   -->
            <div class="container">
                <section class="section-sambutan row justify-content-center mt-5" id="sambutan">
                    <div class="container">
                        <div class="row justify-content-center">
                            <img src="/images/sign.png" alt="">
                            <h1 class="title-news">Riwayat Dosen</h1>
                        </div>    
                    </div>
                </section>
            </div>
                {{--  card  --}}
                <div class="row mt-5">
                    <div class="col-sm pl-lg-3 mt-5">
                        <section class="section section-details-01 " style="margin-top: 100px;">
                            <section class="section-01 pb-5">
                                <div class="container">
                                    <div class="row font-size-03">
                                        <div class="col-12 text-center-hidden">
                                            <h2 class="font-size-01 font-weight-bold pt-4 mx-3"  style="font-size: 25px"> Dosen Tetap</h2>
                                            <p class="font-size-02 mx-3"> Ir. Toto Supriyono, MT.</p>
                                            <div class="col-12">
                                                <img class="float-left mr-3" src="/images/toto-supriyono.jpg" style="max-height: 50%">
                                                <p dir="ltr" class="font-size-04">
                                                    <ul class="list-unstyled">
                                                        <li>Nama : Ir. Toto Supriyono, MT.</li>
                                                        <li>kehalian :</li>
                                                        <li>S1 :</li>
                                                        <li>S2 :</li>
                                                        <li>S3 :</li>
                                                    </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </div>
                    <div class="col-lg-2">
                        <div class="section section-right-01" style="margin-top: 50px">
                            <ul class="list-unstyled">
                                <li><a href="">Mahasiswa</a>
                                </li>
                                <hr>
                                <li><a href="">Alumni</a>
                                </li>
                                <hr>
                                <li><a href="">Dosen</a>
                                </li>
                                <hr>
                                <li><a href="">Staff</a>
                                </li>
                                <hr>
                                <li><a href="">Mitra</a>
                                </li>
                                <hr>
                                <li><a href="">Himpunan Mahasiswa</a>
                                </li>
                                <hr>
                            </ul>
                        </div>
                    </div>
                </div>      
            </div>
        </section>
    </main>
@endsection