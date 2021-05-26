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
                               <a href="{{ url('/sivitas/dosen/index')}}" style="color:#333">Dosen</a>
                            </li>
                            <li class="breadcrumb-item active">
                                Ir. Toto Supriyono, MT.
                            </li>
                          </ol>
                    </nav>
                </div>
            </div>
            {{--  card  --}}
            <div class="row mt-5">
              <div class="col-sm pl-lg-3 mt-5">
                  <div class="section section-details-01">
                      <div class="card-deck-wrapper">
                          <div class="card-deck justify-content-center">
                              <div class="card card-inverse-01 col-xs-6 col-sm-4 ">
                                  <div class="card-block">
                                      <img class="card-img-top p-2" src="/images/toto-supriyono.jpg" alt="Card image cap">
                                      <div class="card-body">
                                        <ul class="list-unstyled" style="margin-left: -10px">
                                          <li>Nama :</li>
                                          <li>Jabtan :</li>
                                          <li>Email :</li>
                                          <li>Bidang Keahlian :</li>
                                          <p> Pendidikan </p>
                                          <li>S1 :</li>
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
              <div class="col-lg-2">
                  <div class="section section-right-01" style="margin-top: 50px">
                      <ul class="list-unstyled">
                          <li><a href="">Mahasiswa</a>
                          </li>
                          <hr>
                          <li><a href="">Alumni</a>
                          </li>
                          <hr>
                          <li><a href="">Dosen</a>
                          </li>
                          <hr>
                          <li><a href="">Staff</a>
                          </li>
                          <hr>
                          <li><a href="">Mitra</a>
                          </li>
                          <hr>
                          <li><a href="">Himpunan Mahasiswa</a>
                          </li>
                          <hr>
                      </ul>
                  </div>
              </div>
          </div>
        </div>
      </section>
    </main>
@endsection