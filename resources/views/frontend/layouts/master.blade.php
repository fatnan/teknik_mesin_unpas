<!DOCTYPE html>
<html lang="en" id="about">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Universitas Pasundan Fakultas Teknik Mesin, Tentang Teknik Mesin, Tentang Teknik Universitas Pasundan ">
        <meta name="author" content="Teknik Mesin Unpas">
        <link rel="icon" type="image/png" href="/images/logo unpas.png">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="/styles/main.css">
        <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">

    </head>

<body>
   @include('frontend.layouts.navbar')

    @yield('content')

    @include('frontend.layouts.footer')

    <script src="/fontawesome-free/js/fontawesome.min.js"></script>
    <script src="/jquery/jquery-3.5.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.js"></script>
    <script src="/retina/retina.min.js"></script>
    <!-- navbar barcode -->
    <script>
        var modal = document.getElementById("nav-barcode");
        var img = document.getElementById("barcode-nav");
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        var span = document.getElementsByClassName("close")[0];
        span.onclick = function () {
            modal.style.display = "none";
        }
    </script>
    <!-- sticky -->
    <script>
        window.onscroll = function () {
            myFunction()
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
     <!-- scroll to top button -->
     <script>
        const scrollToTopButton = document.getElementById('myBtn');
        const scrollFunc = () => {
        let y = window.scrollY;
        if (y > 0) {
            scrollToTopButton.className = "top-bar show";
        } else {
            scrollToTopButton.className = "top-bar hide";
        }
        };
        window.addEventListener("scroll", scrollFunc);
        const scrollToTop = () => {
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            window.scrollTo(0, c - c / 20);
        }
        };
        scrollToTopButton.onclick = function(e) {
        e.preventDefault();
        scrollToTop();
        }
    </script>
    {{--  scroll navbar shadow  --}}
    <script>
        $(window).scroll(function() {
            if ($(window).scrollTop() > 10) {
                $('#navbar').addClass('scrollnav');
            } else {
                $('#navbar').removeClass('scrollnav');
            }
        });
    </script>
    {{--  modal images  --}}
    <script>
        $(".gallery img").click(function(){
            $("#full-image").attr("src", $(this).attr("src"));
            $('#image-viewer').show();
          });
          
          $("#image-viewer .close").click(function(){
            $('#image-viewer').hide();
          });
          
    </script>
</body>

</html>