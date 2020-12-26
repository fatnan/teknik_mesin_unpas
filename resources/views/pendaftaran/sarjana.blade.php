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
                                    Sarjana
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 pl-lg-3">
                        <div class="section section-details-01">
                            <h1>Sarjana
                            </h1>
                            <h6>Oleh :
                                <br>
                                Rabu, 12 Agustus 2020</h6>
                            <img src="#" alt="" width="100%">
                            <br><br>
                            <h5>VISI PRODI TEKNIK MESIN</h5>
                            <p>Menjadi penyelenggara pendidikan tinggi Teknik Mesin sepuluh besar nasional dan melangkah
                                menuju komunitas
                                akademik peringkat internasional yang mengusung nilai kesundaan dan keislaman pad atahun
                                2021.</p>
                            <br>
                            <h5>MISI PRODI TEKNIK MESIN</h5>
                            <p>Menyelenggarakan pendidikan tinggi yang berorientasi untuk menghasilkan ilmuan,praktisi
                                industri dan wirausahawan yang profesional dalam bidang teknik mesin.</li>
                                <p>Menyelenggarakan penelitian untuk mengembangkan ilmu dan teknologi dalam bidang
                                    teknik mesin.</p>
                                <p>Ikut berperan aktif dalam pengabdian kepada masyarakat dengan menyebarluaskan
                                    aplikasi keteknikan untuk
                                    mendorong dan membantu perkembangan industri kecil,menengah dan besar.</p>
                                <p>Bekerjasama dalam bidang pendidikan,penelitian dan pengabdian kepada masyarakat
                                    dengan institusi dalam dan luar negeri.</p>
                                <br>
                                <h5>TUJUAN:</h5>
                                <p>Menghasilkan lulusan yang kompeten dalam bidang Teknik Mesin serta mampu memecahkan
                                    setiap permasalahan di lingkungan kerja.</p>
                                <p>Menghasilkan penelitian-penelitian yang dapat diaplikasikan bagi perkembangan
                                    industri yang berkaitan dengan bidang Teknik Mesin.</p>
                                <p>Mendorong terciptanya penerapan dan aplikasi teknologi tepat guna untuk mendukung
                                    perkembangan industri kecil dan menengah sebagai bentuk pengabdian kepada
                                    masyarakat.</li>
                                    <p>Menghasilkan kerjasama dalam bidang pendidikan,penelitian dan pengabdian kepada
                                        masyarakat dengan institusi.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section section-right-01">
                            <ul class="list-unstyled">
                                <h3>Terbaru</h3>
                                <hr>
                                <li><a href="pelatihan.html">Pelatihan</a>
                                </li>
                                <hr>
                                <li><a href="magang.html">Magang</a>
                                </li>
                                <hr>
                                <li><a href="sarjana.html">Sarjana</a>
                                </li>
                                <hr>
                                <li><a href="magister.html">Magister</a>
                                </li>
                                <hr>
                                <li><a href="doctoral.html">Doctoral</a>
                                </li>
                                <hr>
                                <li><a href="postDoctoral.html">Post Doctoral</a>
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