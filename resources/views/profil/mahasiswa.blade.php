@extends('layouts.master')

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
                                    Mahasiswa
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 pl-lg-3">
                        <div class="section section-details-04">
                            <h1>Mahasiswa
                            </h1>
                            <img src="images/WhatsApp Image 2020-08-16 at 17.24.59.jpeg" alt="" width="100%">
                            <h5>Organisasi Kemahasiswaan</h5>

                            <p>Sebagai sarana untuk mewadahi kegiatan berorganisasi, UPI menyediakan organisasi
                                mahasiswa sebagai berikut:</p>
                            <p>Di Tingkat Universitas disebut Presiden KM UPI dan Dewan Perwakilan Mahasiswa (DPM/MPM),
                                yang bertugas mengkoordinasikan seluruh kegiatan mahasiswa untuk semua fakultas.</p>
                            <p>Disamping itu di tingkat Universitas juga ada Unit Kegiatan Kemahasiswaan (UKM), yaitu
                                unit yang menghimpun mahasiswa dari berbagai fakultas yang mewakili perhatian pada
                                bidang yang sama. Unit kegiatan mahasiswa ini meliputi kegiatan olah raga kegiatan
                                kesenian dan kegiatan khusus Menwa, Pramuka, Pencinta Alam dan sebagainya.</p>
                            <p>Di tingkat Fakultas ada Badan Eksekutif Mahasiswa (BEM) dan Senat Mahasiswa (SM). BPM
                                adalah lembaga legislatif mahasiswa sedangakan Senat Mahasiswa fakultas adalah lembaga
                                eksekutif mahasiswa di tingkat Fakultas.</p>
                            <p>Di tingkat Jurusan ada Himpunan Mahasiswa Jurusan (HMJ). HMJ adalah pembantu SM dalam
                                melaksanakan tugasnya</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section section-right-01">
                            <ul class="list-unstyled">
                                <h3>Terbaru</h3>
                                <hr>
                                <li><a href="sejarah-01.html">Sejarah</a>
                                </li>
                                <hr>
                                <li><a href="visi&misi-01.html">Visi & Misi</a>
                                </li>
                                <hr>
                                <li><a href="organisasi-01.html">Organisasi</a>
                                </li>
                                <hr>
                                <li><a href="mahasiswa-01.html">Mahasiswa</a>
                                </li>
                                <hr>
                                <li><a href="lulusan-01.html">Lulusan</a>
                                </li>
                                <hr>
                                <li><a href="dosen-01.html">Dosen</a>
                                </li>
                                <hr>
                                <li><a href="sarana&prasarana-01.html">Sarana & Prasarana</a>
                                </li>
                                <hr>
                            </ul>
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