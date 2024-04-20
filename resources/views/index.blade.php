<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Academic</title>

    <!-- Favicons -->
    <link href="{{ Vite::asset('resources/assets/frontend/img/favicon.png') }}" rel="icon">
    <link href="{{ Vite::asset('resources/assets/frontend/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    @vite(['resources/assets/shared/js/app.js', 'resources/assets/frontend/js/app.js'])

    <!-- =======================================================
    * Template Name: Mentor
    * Updated: Jan 29 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-around">
        <h1 class="logo me-auto">
            <a href="{{ route('home') }}">Academic</a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a class="active" href="{{ route('home') }}">
                        Accueill
                    </a>
                </li>
                <li>
                    <a href="#">
                        Nos cours
                    </a>
                </li>
                <li>
                    <a href="#">
                        Nos formation
                    </a>
                </li>
                <li>
                    <a href="#">
                        Nous contacter
                    </a>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <a href="#" class="get-started-btn">
            S'inscrire
        </a>
        <a href="#" class="get-started-btn">
            Se connecter
        </a>
    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 footer-contact">
                    <h3>
                        Academic
                    </h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 footer-links">
                    <h4>
                        Lien utiles
                    </h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">
                                Accueill
                            </a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">
                                Nos cours
                            </a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">
                                Nos formations
                            </a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="#">
                                Nous contacter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>
                        Join Our Newsletter
                    </h4>
                    <p>
                        Tamen quem nulla quae legam multos aute sint culpa legam noster magna
                    </p>
                    <form action="" method="post">
                        <input type="email" name="email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="container d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="#" class="twitter">
                <i class="bx bxl-twitter"></i>
            </a>
            <a href="#" class="facebook">
                <i class="bx bxl-facebook"></i>
            </a>
            <a href="#" class="instagram">
                <i class="bx bxl-instagram"></i>
            </a>
        </div>
    </div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>
</body>
</html>
