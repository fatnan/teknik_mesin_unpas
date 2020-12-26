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
                                    Visi & Misi
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 pl-lg-3">
                        <div class="section section-details-02">
                            <h1>Visi & Misi
                            </h1>

                            <img src="/images/WhatsApp Image 2020-08-16 at 17.24.59.jpeg" alt="" width="100%">

                            <h5>VISI PRODI TEKNIK MESIN</h5>
                            <p>Menjadi penyelenggara pendidikan tinggi Teknik Mesin sepuluh besar nasional dan melangkah
                                menuju komunitas
                                akademik peringkat internasional yang mengusung nilai kesundaan dan keislaman pad atahun
                                2021.</p>

                            <h5>MISI PRODI TEKNIK MESIN</h5>
                            <li>Menyelenggarakan pendidikan tinggi yang berorientasi untuk menghasilkan
                                ilmuan,praktisi
                                industri dan wirausahawan yang profesional dalam bidang teknik mesin.</li>
                            <li>Menyelenggarakan penelitian untuk mengembangkan ilmu dan teknologi dalam bidang teknik
                                mesin.</li>
                            <li>Ikut berperan aktif dalam pengabdian kepada masyarakat dengan menyebarluaskan aplikasi
                                keteknikan untuk
                                mendorong dan membantu perkembangan industri kecil,menengah dan besar.</li>
                            <li>Bekerjasama dalam bidang pendidikan,penelitian dan pengabdian kepada masyarakat dengan
                                institusi dalam dan luar negeri.</li>

                            <h5>TUJUAN :</h5>
                            <li>Menghasilkan lulusan yang kompeten dalam bidang Teknik Mesin serta mampu memecahkan
                                setiap permasalahan di lingkungan kerja.</li>
                            <li>Menghasilkan penelitian-penelitian yang dapat diaplikasikan bagi perkembangan industri
                                yang berkaitan dengan bidang Teknik Mesin.</li>
                            <li>Mendorong terciptanya penerapan dan aplikasi teknologi tepat guna untuk mendukung
                                perkembangan industri kecil dan menengah sebagai bentuk pengabdian kepada masyarakat.
                            </li>
                            <li>Menghasilkan kerjasama dalam bidang pendidikan,penelitian dan pengabdian kepada
                                masyarakat dengan institusi.</li>
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