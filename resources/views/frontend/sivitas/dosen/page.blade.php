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
                                Sivitas
                            </li>
                            <li class="breadcrumb-item">
                                Dosen
                            </li>
                            <li class="breadcrumb-item active">
                                Ir. Toto Supriyono, MT.
                            </li>
                          </ol>
                    </nav>
                </div>
            </div>
          </div>
         {{--  card  --}}
          <div class="row justify-content-center">
            <div class="col-sm-8 pl-lg-3">
              <div class="section section-details-01">
                <div class="card-wrapper">
                  <div class="row justify-content-center">
                    <div class="card col-xs-6 col-md-4">
                      <img class="card-img-top p-2" src="/images/toto-supriyono.jpg">
                      <div class="list">
                        <ul style="list-style-type:none;">
                          <li>Nama :</li>
                          <li>Jabtan :</li>
                          <li>Email :</li>
                          <li>Bidang Keahlian :</li>
                          <p> Pendidikan </p>
                          <li>S1</li>
                          <li>S2 :</li>
                          <li>S3 :</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>  
          </div>
      </section>
    </main>
@endsection