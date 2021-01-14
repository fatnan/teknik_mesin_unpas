@extends('frontend.layouts.master')

@section('title')
    Teknik Mesin Unpas
@endsection

@section('content')
{{--  header  --}}
<header>
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators ">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
            <li data-target="#header-carousel" data-slide-to="3"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/WhatsApp Image 2020-08-16 at 17.24.59.jpeg"
                    alt="Universitas Pasundan">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/WhatsApp Image 2020-08-16 at 19.44.15.jpeg"
                    alt="Universitas Pasundan">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="/images/01.jpg" alt="Universitas Pasundan">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 pb-0" src="/images/go-car.png" alt="Universitas Pasundan">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <span class="fa fa-chevron-circle-left" style="font-size: 40px;"></span>
        </a>
        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <span class="fa fa-chevron-circle-right" style="font-size:40px;"></span>
        </a>
    </div>
</header>
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
                            <div class="col-lg-12 col-md-6">
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
    
    <div class="container">
        <hr>
    </div>
    <!-- scroll to top button -->
    <a class="top-bar hide" href="" id="myBtn">
        <span class="fas fa-angle-up fa-2x"></span>
    </a>
@endsection