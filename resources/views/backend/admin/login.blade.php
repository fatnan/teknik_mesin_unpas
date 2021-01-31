<!DOCTYPE html>
<html lang="en" id="details">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/login/frontend/images/logo unpas.png">
    <title>Teknik Mesin Unpas</title>
    <link rel="stylesheet" href="/login/frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/login/frontend/styles/main.css">
    <link rel="stylesheet" href="/login/frontend/libraries/fontawesome-free/css/all.min.css">
</head>

<body>
    <!-- topnav -->
    <div class="topnav topnav-login">
        <div class="container ">
            {{-- <ul class="list-unstyled">
                <li><a href="bantuan.html">Bantuan</a></li>
                <li><a href="index.html">Beranda</a></li>
            </ul> --}}
        </div>
    </div>
    <main>
        <section class="section section-login-header">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <img class="float-left col-12 col-md-8 pb-2 " src="/login/frontend/images/logo-login.png" alt="">
                        <div class="card card-login  col-lg-4 col-md-3" style="width:100%">
                            <form action="{{route('store.login')}}" method="post">
                                @csrf 
                                <p class="text-center">Masuk untuk memulai aplikasi</p>
                                <input class="input" type="text" name="username" placeholder="Username" required>
                                <br>
                                <input class="input-01" type="password" name="password" placeholder="Password" required><br>
                                <span class="psw text-center" style="color: #fff; font-size: 10px;">Lupa nama pengguna dan
                                    <a href="#" style="color: #fff;">password ?</a></span>
                                <input class="btn btn-01" type="submit" value="Login">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="copyright-login">
        <div class="container ">
            <div class="row justify-content-center">
                <i class="far fa-copyright"> Copyright 2020 All Right Reserved by Teknik Mesin UNPAS</i>
            </div>
        </div>
    </footer>




    <script src="/login/frontend/libraries/fontawesome-free/js/fontawesome.min.js"></script>
    <script src="/login/frontend/libraries/jquery/jquery-3.5.1.min.js"></script>
    <script src="/login/frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="/login/frontend/libraries/retina/retina.min.js"></script>

</body>

</html>