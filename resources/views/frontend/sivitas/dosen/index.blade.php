@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
<main>
    <style>
        .jumbotron-card{
            background: #f5f5f5;
            padding: 20px
        }
        .card-inverse-01{
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            border: none;
            border-radius: 5px;
        }
        .card-inverse-01:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
    </style>
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
                            <li class="breadcrumb-item active">
                                Dosen
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="section-title-content">
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-4">
                       <h1 class=" title-01 text-center " style="font-size: 48px">DAFTAR DOSEN</h1>
                       <hr style="max-inline-size: 50%;  border: 1px solid black; border-radius:20px; outline-width: 20px;  background-color: black;">
                </div>
            </div>
            {{--  card  --}}
            <div class="row mt-5">
                <div class="col-sm pl-lg-3 mt-5">
                    <div class="section section-details-01">
                        <div class="card-deck-wrapper" style="background:#F3F3F3">
                            <div class="card-deck justify-content-center" style=" padding:10%;">
                                <div class="card card-inverse-01 text-center col-xs-6 col-sm-3" style="">
                                    <div class="card-block">
                                        <img class="card-img-top p-2" src="/images/toto-supriyono.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"style="font-size: 14px">IR. TOTO SUPRIYONO, MT.</h5>
                                            <p><cite title="Source Title" style="font-size: small;">Dosen Tetap</cite></p>
                                            <a href="{{ url('/sivitas/dosen/page')}}" class="btn btn-primary">lihat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-inverse-01 text-center col-xs-6 col-sm-3 ">
                                    <div class="card-block">
                                        <img class="card-img-top p-2" src="/images/no-photo.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"style="font-size: 14px">IR. RACHMAD HARTONO, MT.</h5>
                                            <p><cite title="Source Title" style="font-size: small;">Dosen Tetap</cite></p>
                                            <a href="#" class="btn btn-primary">lihat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-inverse-01 text-center col-xs-6 col-sm-3 ">
                                    <div class="card-block">
                                        <img class="card-img-top p-2" src="/images/no-photo.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"style="font-size: 14px">IR. BRM. DJOKO WIDODO, MT.</h5>
                                            <p><cite title="Source Title" style="font-size: small;">Dosen Tetap</cite></p>
                                            <a href="#" class="btn btn-primary">lihat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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