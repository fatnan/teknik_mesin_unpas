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
                                    Lulusan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 pl-lg-3">
                        <div class="section section-details-05">
                            <h1>Lulusan
                            </h1>

                            <img src="/images/WhatsApp Image 2020-08-16 at 17.24.59.jpeg" alt="" width="100%">
                            <h5>Lulusan Teknik Mesin Unpas Bandung</h5>
                            <p>Saat ini, hampir semua bidang industri memanfaatkan mesin untuk efisiensi dan
                                memaksimalkan produksinya. Itu sebabnya kebutuhan akan tenaga profesional dalam bidang
                                teknik mesin masih sangat tinggi.</p>
                            <p>Universitas Pasundan menyelenggarakan Program Studi Teknik Mesin dengan akreditasi A
                                BAN-PT untuk mencetak sumber daya yang mampu berkiprah di bidang manufaktur, desain &
                                bangun produk, konstruksi dan perancangan, hingga konversi energi.</p>
                            <p>Lulusan teknik mesin berpeluang mengambil tempat-tempat strategis di berbagai industri
                                manufaktur, pembangkitan energi, perusahaan minyak dan gas, otomotif, hingga jasa
                                konsultasi, desain, & konstruksi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, fugit earum tempora
                                quaerat provident nesciunt, illum adipisci iure consequuntur quam soluta facere quod
                                minima impedit, minus debitis reiciendis ab eveniet? </p>

                            <h5>Karir Lulusan Teknik mesin</h5>
                            <p>Berkat prospek kerja yang luas, terdapat banyak karir yang dapat kalian pilih, mulai dari
                                teknisi, mekanik, peneliti, konsultan, insinyur pemipaan, insinyur pengelasan, petugas
                                pemeliharaan, sales produk teknik, tenaga pengajar, hingga abdi negara. Selain itu,
                                kalian pun dapat bekerja di sektor lain, seperti finansial, perbankan, pertanian, dan
                                lainnya yang tidak terkait permesinan.</p>
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