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
        // Get the modal
        var modal = document.getElementById("nav-barcode");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("barcode-nav");
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function () {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
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
        // Set a variable for our button element.
        const scrollToTopButton = document.getElementById('myBtn');

        // Let's set up a function that shows our scroll-to-top button if we scroll beyond the height of the initial window.
        const scrollFunc = () => {
        // Get the current scroll value
        let y = window.scrollY;
        
        // If the scroll value is greater than the window height, let's add a class to the scroll-to-top button to show it!
        if (y > 0) {
            scrollToTopButton.className = "top-bar show";
        } else {
            scrollToTopButton.className = "top-bar hide";
        }
        };

        window.addEventListener("scroll", scrollFunc);

        const scrollToTop = () => {
        // Let's set a variable for the number of pixels we are from the top of the document.
        const c = document.documentElement.scrollTop || document.body.scrollTop;
        
        // If that number is greater than 0, we'll scroll back to 0, or the top of the document.
        // We'll also animate that scroll with requestAnimationFrame:
        // https://developer.mozilla.org/en-US/docs/Web/API/window/requestAnimationFrame
        if (c > 0) {
            window.requestAnimationFrame(scrollToTop);
            // ScrollTo takes an x and a y coordinate.
            // Increase the '10' value to get a smoother/slower scroll!
            window.scrollTo(0, c - c / 20);
        }
        };

        // When the button is clicked, run our ScrolltoTop function above!
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
</body>

</html>