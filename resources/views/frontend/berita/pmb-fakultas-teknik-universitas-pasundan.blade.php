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
                                Berita
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 pl-lg-3">
                    <div class="section section-details-01">
                        <h1>
                            Pendaftaran Mahasiswa Baru Fakultas Teknik UNPAS
                        </h1>
                        <h6>Sumber : nimda
                            <br>
                            Kamis, 25 September 2020</h6>
                        <img src="/images/banner-pendaftaran-MHS-baru.jpeg" alt="" width="100%">
                        <div class="artikel pt-3">
                            <p>
                                Semester ganjil tahun akademik 2020-2021 sudah dimulai bagi para mahasiswa Teknik
                                UNPAS angkatan diatas 2020, seperti angkatan 2019, 2018, 2017 dan lainnya. Berbeda
                                dengan para kakak-kakaknya, mahasiswa baru Teknik angkatan 2020 baru akan memulai
                                perkuliahannya pada awal bulan oktober nanti, tepatnya tanggal 05 Oktober 2020. Para
                                mahasiswa baru Teknik UNPAS tentunya sudah melalui tahap demi tahap untuk dapat
                                masuk ke Fakultas Teknik UNPAS. Untuk menjadi mahasiswa Teknik Universitas Pasundan,
                                khususnya Fakultas Teknik terdapat dua cara.
                            </p>
                            <p>
                                Cara yang pertama adalah Ujian Saringan Masuk atau biasa disingkat USM. USM ini
                                adalah metode test untuk dapat masuk ke Fakultas Teknik Universitas Pasundan, dan
                                Fakultas lainnya yang juga terdapat di Universitas Pasundan. Biasanya USM dilakukan
                                di kampus Universitas Pasundan. Namun karena situasi yang saat ini masih belum
                                kondusif terkait pandemic covid-19, pelaksanaan USM pun dilaksanakan secara
                                daring(online).
                            </p>
                            <p>
                                Sedangkan yang kedua adalah PMDK, PMDK program adalah penerimaan mahasiswa jalur
                                akademik. Langkah pertama untuk dapat mengikuti jalur PMDK ini adalah, calon
                                mahasiswa baru membayar biaya pendaftaran terlebih dahulu, kemudian mengisi
                                formulir, untuk lebih lengkapnya bisa di cek di website <a
                                    href="https://www.teknik.unpas.ac.id/">www.teknik.unpas.ac.id.</a>
                                Persyaratan-persyaratan PMDK lainnya pun dipenuhi secara online.
                            </p>
                            <p>
                                Masing-masing USM dan PMDK memiliki 3 gelombang yang bisa diikuti oleh para calon
                                mahasiswa baru. Informasi-informasi USM, PMDK, ataupun informasi mengenai mahasiswa
                                baru biasanya pun di share melalui media sosial @fakultasteknikunpas dan media
                                sosial jurusan Teknik UNPAS.
                            </p>
                            <p>
                                Cukup daftar dari rumah aja, kemudian kalian bisa ikut tahap demi tahap jalur USM
                                ataupun PMDK. Begitupula dengan kuliah untuk para mahasiswa tahun akademik 2020-2021
                                dilaksanakan secara daring, cukup dari rumah saja. Bersama-sama tetap mencerdaskan
                                generasi penerus bangsa, dan diri sendiri dalam situasi yang saat ini masih
                                ditangani bersama.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-4">
                    <div class="row">
                        <div class="col-12 pb-2">
                            <h3>Terbaru</h3>
                            <hr>
                        </div>
                        <div class="col-12 py-2">
                            <div class="row">
                                <div class="col-4">
                                    <a href="">
                                        <img class="img-fluid" src="/images/New-Normal-Starter-Kit-Udah-pada-tau-belum.png" width="100%" alt="">
                                    </a>
                                </div>
                                <div class="col-8 mr-0">
                                    <a href="" class="font-weight-bold" style="color: #000;">New Normal Starter Kit, Udah pada tau belum..?</a>
                                </div>
                            </div>                             
                        </div>
                        <div class="col-12 py-2">
                            <div class="row">
                                <div class="col-4">
                                    <a href="">
                                        <img class="img-fluid" src="/images/IIMS_LISTRIK1_MABUA_MEDIA.jpg" width="100%" alt="">
                                    </a>
                                </div>
                                <div class="col-8 mr-0">
                                    <a href="" class="font-weight-bold" style="color: #000;">Mobil Balap listrik Karya Mahasiswa Unpas Bandung Mejeng di IIMS</a>
                                </div>
                            </div>                             
                        </div>
                        <div class="col-12 py-2">
                            <div class="row">
                                <div class="col-4">
                                    <a href="">
                                        <img class="img-fluid" src="/images/Screen-Shot-2019-07-26-at-10.36.57-300x229.png" width="100%" alt="">
                                    </a>
                                </div>
                                <div class="col-8 mr-0">
                                    <a href="" class="font-weight-bold" style="color: #000;">Teknik Mesin Fakultas Teknik Unpas, Ciptakan Traktor Portable</a>
                                </div>
                            </div>                             
                        </div>
                        <div class="col-12 py-2">
                            <div class="row">
                                <div class="col-4">
                                    <a href="">
                                        <img class="img-fluid" src="/images/swipper.jpg" width="100%" alt="">
                                    </a>
                                </div>
                                <div class="col-8 mr-0">
                                    <a href="" class="font-weight-bold" style="color: #000;">Projek Sweeper Mahasiswa Mesin</a>
                                </div>
                            </div>                             
                        </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-content-terkait pt-5 pb-5">
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