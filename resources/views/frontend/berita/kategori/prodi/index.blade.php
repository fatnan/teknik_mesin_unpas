@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
    <main>
        <section class="section-navbar-header"></section>
        <section class="section-navbar-content">
            <div class="container">
                <div class="row">
                    <div class="col p-3">
                        <nav>
                            <ol class="breadcrumb navbar-breadcrumb">
                                <li class="breadcrumb-navbar">
                                    <a href="{{ url ('/berita/index') }}" class="Berita-Utama active">Berita Utama</a>
                                    <a href="{{ url ('/berita/kategori/prodi/index') }}" class="Penelitian">Prodi</a>
                                    <a href="{{ url ('/berita/kategori/akademik/index') }}" class="Akademik">Akademik</a>
                                    <a href="{{ url ('/berita/kategori/penelitian/index') }}" class="Institusi">Penelitian</a>
                                    <a href="{{ url ('/berita/kategori/pengabdian/index') }}" class="Profil">Pengabdian Pada Masyarakat</a>
                                </li>
                        </nav>
                    </div>
                </div>
            </div>
        <section class="section-details-header" style="margin-top: -30px; background: #fff"></section>
        <section class="section-details-content" style="background: #fff">
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
                                    Prodi
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="container">
                        <hr style="margin-top: -30px">
                    </div>
                </div>
            </div>
        </section>
        
    </main>
@endsection