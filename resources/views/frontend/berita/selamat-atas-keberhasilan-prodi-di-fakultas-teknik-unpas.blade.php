@extends('frontend.layouts.master')

@section('title')
    
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
                            <h1>Selamat atas keberhasilan Prodi di Fakultas Teknik UNPAS
                            </h1>
                            <h6>Sumber : nimda
                                <br>
                                Sabtu, 05 September 2020</h6>
                            <img src="/images/Background-Rapat-Perbaikan-SITI-SAPTO-Fakultas-Teknik-UNPAS-1030x726.png"
                                alt="" width="100%">
                            <div class="artikel pt-3">
                                <p>
                                    Pada Bulan Juli lalu Program Studi Teknik Informatika, Teknik Lingkungan, dan Teknik
                                    Perencanaan Wilayah dan Kota bersama petugas dari Badan Akreditasi Nasional
                                    Perguruan Tinggi(BAN-PT) menjalankan program akreditasi. Akreditasi yang merupakan
                                    sebuah pengakuan terhadap lembaga pendidikan yang di berikan oleh badan berwenang
                                    ini menjadi sebuah penentuan apakah Fakultas Teknik UNPAS terkhusus Prodi yang tadi
                                    telah di sebutkan sudah memenuhi syarat kebakuan atau kriteria yang di berikan oleh
                                    BAN PT.
                                </p>
                                <p>
                                    Pada awalnya Prodi Teknik Informatika terlebih dahulu yang menjalankan akreditasi
                                    ini dengan proses yang cukup rumit karena Prodi Teknik Informatika harus melaporkan
                                    segala sesuatu yang melibatkan pengembangan kurikulum, proses kegiatan belajar
                                    mengajar, hingga kualitas lulusan yang di rangkum dalam bentuk laporan Borang.
                                    Setelah Borang tersebut di terima oleh pihak BAN-PT maka proses berlanjut ke sesi
                                    presentasi dan wawancara dimana Borang tersebut di pastikan lagi keasliannya dengan
                                    melakukan sesi tanya jawab oleh pihak terkait seperti mahasiswa, dosen, alumni,
                                    staff, dsbnya. Akreditasi selanjutnya di lakukan oleh Prodi Teknik Lingkungan,
                                    karena di Fakultas Teknik terdapat Laboratorium untuk kegiatan praktek maka proses
                                    survey pun di lakukan walaupun secara Online karena terbatas Pandemi oleh karena itu
                                    proses Akreditasi di lakukan secara Online. Setelah Teknik Lingkungan selesai maka
                                    Prodi Selanjutnya adalah Teknik Perencanaan Wilayah dan Kota, dengan Proses yang
                                    sama Prodi Teknik PWK ini berhasil melewati akreditasi dengan lancar dan aman tidak
                                    kurang sedikitpun.
                                </p>
                                <p>
                                    Semua tenaga dan pikiran sudah di kerahkan dengan maksimal alhamdulillah akhir
                                    Agustus kemaren hasil Akreditasi sudah keluar, hasil yang cukup membanggakan karena
                                    Prodi Teknik Informatika dapat mempertahankan kualitas mutunya dengan perolehan
                                    akreditasi B, untuk Teknik Lingkungan yang awalnya terakreditasi B saat ini sudah
                                    berubah menjadi Akreditasi A begitu pula Teknik Perencanaan Wilayah dan Kota yang
                                    berubah menjadi A, hasil tersebut sangatlah memuaskan dan Fakultas Teknik bangga
                                    atas keberhasilan ketiga Prodi yang melaksanakan Akreditasi. Semoga hasil ini tidak
                                    membutakan kita semua karena berbangga diri, karena dengan Akreditasi yang baik maka
                                    tanggung jawab akan semakin besar yaitu mempertahankan kualitas tersebut dan di
                                    buktikan dengan kepuasan segala aspek atau pihak yang ada di lingkungan Fakultas
                                    Teknik. Aminnn.
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