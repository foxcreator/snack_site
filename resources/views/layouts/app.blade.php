<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Index - Gp Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/goldproductlogo.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <!--  <link href="assets/vendor/aos/aos.css" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="assets/img/goldproductlogo.png" alt="">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Головна<br></a></li>
                <li><a href="#about">Про нас</a></li>
                <li><a href="#services">Продукція</a></li>
                <li><a href="#contact">Контакти</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="https://t.me/Ydyrh67792" target="_blank">Замовити</a>

    </div>
</header>

<main class="main">
    @yield('content')
</main>

<footer id="footer" class="footer dark-background">

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">GOLDPRODUCT</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>вул. Володимира Вернадського, 27</p>
                        <p>Дніпро</p>
                        <p class="mt-3"><strong>Телефон:</strong> <span>+380 (97) 434-52-49</span></p>
                        <p><strong>Email:</strong> <span>goldproduct@ukr.net</span></p>
                    </div>

                </div>

                <div class="col-lg-2 col-md-3 footer-links">

                </div>

                <div class="col-lg-2 col-md-3 footer-links">

                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4>Ми у соціальних мережах</h4>
                    <div class="social-links d-flex mt-4">
                        <a href="https://t.me/Ydyrh67792"><i class="bi bi-telegram"></i></a>
                        <a href="https://www.instagram.com/goldproduct_snecks"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/goldproduct_snecks"><i class="bi bi-instagram"></i></a>
                        <a href="https://t.me/Ydyrh67792"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p>© <span>GoldProduct</span> <strong class="px-1 sitename">*</strong> <span>Усі права захищені</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Created by
                <a href="https://www.google.com/search?q=foxdevelop&sca_esv=9267af3241730e66&sca_upv=1&sxsrf=ADLYWIIqyOzXj5tNtcRYBa0dnANAgpfl5g%3A1722612778203&ei=KvysZo2EDN25wPAPnrHj4AQ&ved=0ahUKEwiNwevV0NaHAxXdHBAIHZ7YGEwQ4dUDCA8&uact=5&oq=foxdevelop&gs_lp=Egxnd3Mtd2l6LXNlcnAiCmZveGRldmVsb3AyChAAGLADGNYEGEcyChAAGLADGNYEGEcyChAAGLADGNYEGEdI2QRQAFgAcAF4AJABAJgBXaABXaoBATG4AQPIAQCYAgGgAgSYAwCIBgGQBgOSBwExoAfxAQ&sclient=gws-wiz-serp">
                    FoxDevelop
                </a>
            </div>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!--  <script src="assets/vendor/aos/aos.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>

