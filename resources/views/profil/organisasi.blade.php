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
                                    Organisasi
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 pl-lg-3">
                        <div class="section section-details-03">
                            <h1>Organisasi
                            </h1>
                            <img src="frontend/images/bagan.PNG" alt="" width="100%">

                            <h5>Ketua Jurusan</h5>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam numquam et quos deleniti
                                fugit? Ex impedit totam explicabo eveniet odio molestiae! Earum necessitatibus unde
                                corporis. Saepe blanditiis dolore officia laboriosam. </p>
                            <h5>Pembina</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum autem repellendus aut
                                voluptatibus inventore repudiandae est consequuntur quisquam quae, aperiam eos
                                recusandae quas vero beatae, deserunt praesentium soluta quaerat laudantium? </p>
                            <h5>Sekretaris Jurusan</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil excepturi tenetur magni
                                voluptate vero sunt, ullam esse culpa architecto officiis suscipit eos, illum modi,
                                debitis laborum incidunt veniam. Atque, consequatur! </p>
                            <h5>Pembina</h5>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, possimus. Commodi, sit
                                modi, nulla omnis culpa fugit consectetur quasi, quis perferendis laborum deleniti odio
                                iste quo aspernatur veniam reprehenderit deserunt! </p>
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