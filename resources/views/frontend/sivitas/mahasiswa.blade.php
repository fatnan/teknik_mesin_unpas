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
                <div class="col">
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
            </div>


 <div class="container">
   <div class="row mt-5">
     <div class="col">
      <table class="table table-hover table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Nrp</th>
            <th scope="col">Email</th>
            <th scope="col">Jurusan</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($mahasiswa as $mhs)
          <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->nrp}}</td>
            <td>{{$mhs->email}}</td>
            <td>{{$mhs->jurusan}}</td>
            <td><a href="" class="badge badge-primary">Details</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
   </div>
 </div>
</section>
</main>
@endsection