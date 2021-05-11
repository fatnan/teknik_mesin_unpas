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
                           Gallery
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="section-gallery row justify-content-center" id="gallery">
            <div class="container">
                <div class="row justify-content-center">
                    <img src="/images/sign.png" alt="">
                    <h1 class="title-news">Gallery</h1>
                </div>    
            </div>
        </section>
    </div>
    <div class="jumbotron">
        <div class="container">
            <div class="row ">
                <div class="ju">
                        <div class="gallery">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 pl-lg-3">
                                    <div class="row justify-content-center">    
                                        <img src="https://source.unsplash.com/800x1000/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x900/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x700/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x650/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x550/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x600/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x800/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x750/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x650/?nature,water" alt="" width="300" height="200">
                                        <img src="https://source.unsplash.com/800x00/?nature,water" alt="" width="300" height="200">
                                    </div>
    
                                    <div id="image-viewer">
                                        <span class="close">&times;</span>
                                        <img class="modal-content" id="full-image">
                                        <!-- Left and right controls -->
                                       
                                        </a>
                                    </div>
                                </div>                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</section>
</main>
    <!-- scroll to top button -->
    <a class="top-bar hide" href="" id="myBtn">
        <span class="fas fa-angle-up fa-2x"></span>
    </a>
@endsection