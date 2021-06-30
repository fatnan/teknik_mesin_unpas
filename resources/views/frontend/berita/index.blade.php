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
                                    <a href="" class="Berita-Utama active">Berita Utama</a>
                                    <a href="/berita/kategori/prodi/index" class="Penelitian">Prodi</a>
                                    <a href="/berita/kategori/akademik/index" class="Akademik">Akademik</a>
                                    <a href="/berita/kategori/penelitian/index" class="Institusi">Penelitian</a>
                                    <a href="/berita/kategori/pengabdian/index" class="Profil">Pengabdian Pada Masyarakat</a>
                                </li>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-sm-4">
                        <div class="search-news">
                            <form action="">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i
                                                class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="text">
                        <h1>Berita Utama</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>
        <!-- content item -->
        <section class="section-content-item-category" id="contenItem">
            <div class="container">
                <div class="section-content-news row justify-content-center">
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">              
                            <div class="item-img">
                                <a href="/berita/pmb-fakultas-teknik-universitas-pasundan.html">
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
                                    <a href="/berita/pmb-fakultas-teknik-universitas-pasundan.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                            <a href="/berita/mobil-listrik.html">
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
                                    <a href="/berita/mobil-listrik.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                            <a href="/berita/teknik-mesin-unpas-ciptakan-traktor-portable.html">
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
                                    <a href="/berita/teknik-mesin-unpas-ciptakan-traktor-portable.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                            <a href="/berita/Projek-Sweeper-Mahasiswa-Mesin.html">
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
                                    <a href="/berita/Projek-Sweeper-Mahasiswa-Mesin.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>                      
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                                <a href="/berita/Penghargaan-di-IMI-Jabar-Awards-2019.html">
                                    <img src="/images/2.jpg" alt="" width="100%" height="200px">
                                </a>
                            </div>
                            <div class=" item-judul">
                                <a>Kart Team HMM Unpas Kembali Mendapat Penghargaan di IMI Jabar Awards
                                    2019
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 02 April 2020</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/berita/Penghargaan-di-IMI-Jabar-Awards-2019.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                                <a href="/berita/new-normal-starter-kit.html">
                                    <img src="/images/New-Normal-Starter-Kit-Udah-pada-tau-belum.png" alt=""
                                        width="100%" height="200px">
                                </a>
                            </div>
                            <div class=" item-judul">
                                <a>
                                New Normal Starter Kit, Udah pada tau belum..?
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 26 Juli 2020</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/berita/new-normal-starter-kit.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                                <a href="/berita/Rapat-Perbaikan-SITI-SAPTO-Fakultas-Teknik-UNPAS.html">
                                    <img src="/images/Background-Rapat-Perbaikan-SITI-SAPTO-Fakultas-Teknik-UNPAS-1030x726.png"
                                        alt="" width="100%" height="200px">
                                </a>
                            </div>
                            <div class=" item-judul">
                                <a> Rapat Perbaikan SITI-SAPTO Fakultas Teknik UNPAS
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 25 September 2020</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/berita/Rapat-Perbaikan-SITI-SAPTO-Fakultas-Teknik-UNPAS.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="card-item">
                            <div class="item-img">
                                <a href="/berita/selamat-atas-keberhasilan-prodi-di-fakultas-teknik-unpas.html">
                                    <img src="/images/Background-Aartikel-Selamat-atas-keberhasilan-Prodi-di-Fakultas-Teknik-UNPAS.png"
                                        alt="" width="100%" height="200px">
                                </a>
                            </div>
                            <div class=" item-judul">
                                <a>
                                    Selamat atas keberhasilan Prodi di Fakultas Teknik UNPAS
                                </a>
                            </div>
                            <ul class="list-unstyled">
                                <li class="post-date">
                                    <i class="far fa-calendar-alt"
                                        style="color: #333; font-weight: lighter; font-size: small;"> 05 September 2020</i>
                                </li>
                            </ul>
                            <div class="container">
                                <div class="row">
                                    <a href="/berita/selamat-atas-keberhasilan-prodi-di-fakultas-teknik-unpas.html">Baca Berita <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <div class="container pt-4">
            <hr>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                          <span class="sr-only">Previous</span>
                        </a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                          <span aria-hidden="true">&raquo;</span>
                          <span class="sr-only">Next</span>
                        </a>
                      </li>
                    </ul>
                  </nav>
            </div>
        </div>
        <!-- scroll to top button -->
        <a class="top-bar hide" href="" id="myBtn">
            <span class="fas fa-angle-up fa-2x"></span>
        </a>
    </main>
@endsection