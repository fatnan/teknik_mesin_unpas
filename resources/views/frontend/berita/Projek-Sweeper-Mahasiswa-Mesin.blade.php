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
                            <h1>Projek Sweeper Mahasiswa Mesin
                            </h1>
                            <h6>Oleh : nimda
                                <br>
                                Jumat, 28 Februari 2020</h6>
                            <img src="/images/swipper.jpg" alt="" width="100%">
                            <div class="artikel pt-3">
                                <p>
                                    3 Mahasiswa Angkatan 15 Teknik Mesin Universitas Pasundan yaitu Ari, Fatur, dan
                                    Saeful berkesempatan untuk menangani projek Sweeper sekaligus menjadi topik tugas
                                    akhir yang di berikan oleh Bapak Farid selaku dosen Teknik Mesin. Ari selaku ketua
                                    dari tim Projek ini pada awalnya tidak menyangka akan menerima projek sweeper ini
                                    sebagai tugas akhir, karena pada awalnya Ari menginginkan topik tugas akhirnya
                                    berhubungan dengan otomotif. Setelah menerima projek tersebut tepatnya bulan
                                    September 2019 lalu, Ari dan Timnya mulai membagi-bagi tugas dimana Ari menjadi
                                    ketua yang mengkoordinasikan lalu Saeful sebagai design gambar dan Fatur sebagai
                                    perangkai perangkat Sweeper.
                                </p>
                                <p>
                                    Sudah berjalan sekitar 4 bulan lebih Projek Sweeper ini di mulai dan sudah mulai
                                    terlihat bagaimana wujud akhir dari sweeper yang mereka bangun, harapan Ari dan Tim
                                    mesin prototype mesin Sweeper tersebut dapat selesai pada bulan Maret 2020 nanti dan
                                    sudah dapat diuji coba di jalanan, lalu apa yang membedakan Sweeper buatan Ari dan
                                    Tim dengan Sweeper lainnya..?, Menurut Ari banyak Sweeper yang di pakai di jalanan
                                    tersebut hanya dapat di jalankan di perkotaan dan jalan-jalan besar saja namun Mesin
                                    Sweeper buatan Ari dan Timnya mampu untuk membersihkan jalanan di gang-gang sempit
                                    seperti wilayah pelosok kota.
                                </p>
                                <p>
                                    Mesin Sweeper yang dapat di jalankan oleh 2 orang dimana orang pertama menjadi supir
                                    lalu orang kedua sebagai penyapu pendukung di jalanan membuat Sweeper ini dapat
                                    berkerja lebih maksimal, walaupun dalam proses pengerjaan sweeper tersebut banyak
                                    kendala yang di temui oleh Ari dan Tim tetap saja mereka pantang menyerah karena
                                    menurut mereka projek Sweeper ini sudah di terima dan di setujui bersama-sama oleh
                                    karena itu harus selesai bagaimanapun caranya. Ari sebagai ketua tim juga tidak
                                    henti-hentinya memotivasi timnya agar terus konsisten menggarap projek sweeper ini.
                                </p>
                                <p>
                                    Banyak konsep-konsep yang diajarkan di kelas untuk menunjang projek sweeper ini
                                    dimana salah satunya adalah mekanika fluida dimana mekanika fluida adalah ilmu
                                    tentang pengukuran tekanan, dan masih banyak konsep lainnya. Terdapat 3 aspek
                                    penting yang ada pada mesin Sweeper ini yang pertama adalah mesin penghisap kotoran,
                                    lalu ada sapu yang di pasang pada kanan dan kiri mesin, dan yang terakhir adalah
                                    semprotan air untuk membersihkan area yang sudah dibersihkan. Dengan bermodal tekad
                                    dan semangat projek sweeper ini sudah mencapai setengah jalan menuju prototype yang
                                    di harapkan dimana nantinya dapat di produksi masal dan dapat di kembangkan lagi.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="section section-right"></div>
                        <ul class="list-unstyled">
                            <h3>Terbaru</h3>
                            <hr>
                            <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                                -</li>
                            <br>
                            <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                                -</li>
                            <br>
                            <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                                -</li>
                            <br>
                            <li><a href=""><img src="/images/logo unpas.png" alt="" width="20%"></a>
                                -</li>
                        </ul>
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