<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/boxicons.css">

    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/nice-select.min.css">
    <!-- Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Carousel Default CSS -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Dark CSS -->
    <link rel="stylesheet" href="assets/css/dark.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Surya - Coworking Office Space</title>

    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>

<body>

    <!-- Start Preloader Area -->
    <div class="preloader">
        <div class="loader">
            <div class="shadow"></div>
            <div class="box"></div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <!-- <div class="header-information">Header Information</div> -->

    <div class="top-header-area active">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-9">
                    <ul class="top-header-content">
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="mailto:suryacoworking@gmail.com">suryacoworking@gmail.com</a>
                        </li>

                        <li>
                            <i class='bx bx-support'></i>
                            <a href="tel:+916001083238">+916001083238</a>
                        </li>


                    </ul>
                </div>

                <div class="col-lg-5 col-md-3">
                    <ul class="top-header-optional">
                        <li>
                            <a href="https://www.facebook.com/suryabusinesscentre" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="https://https://www.instagram.com/suryabusinesscentre/" target="_blank">
                                <i class='bx bxl-instagram-alt'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="/">
                            <img src="assets/images/suryalogo.svg" class="black-logo" alt="image" width="150">
                            <img src="assets/images/suryalogo.svg" class="white-logo" alt="image" width="150">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="assets/images/suryalogo.svg" class="black-logo" alt="image" width="150">
                        <img src="assets/images/suryalogo.svg" class="white-logo" alt="image" width="150">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="/" class="nav-link @yield('home')">
                                    Home

                                </a>


                            </li>

                            <li class="nav-item">
                                <a href="/about" class="nav-link @yield('about')">About</a>
                            </li>

                            <li class="nav-item">
                                <a href="/workspaces" class="nav-link @yield('workspaces')">Workspaces</a>
                            </li>
                            <li class="nav-item">
                                <a href="/pricing" class="nav-link @yield('pricing')">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="/services" class="nav-link @yield('services')">Amenities</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a href="/blog" class="nav-link @yield('blog')">
                                    Blog
                                </a>
                            </li> -->

                            <li class="nav-item">
                                <a href="/contact" class="nav-link @yield('contact')">Contact</a>
                            </li>
                        </ul>

                        <!-- <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="workspaces.html" class="default-btn">Add Your Space <i class='bx bx-plus'></i><span></span></a>
                            </div>

                            <div class="option-item">
                                <a href="login.html" class="optional-btn">Login <i class='bx bxs-user'></i><span></span></a>
                            </div>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>

        <!-- <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>

                <div class="container">
                    <div class="option-inner">
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="workspaces.html" class="default-btn">Add Your Space <i class='bx bx-plus'></i><span></span></a>
                            </div>

                            <div class="option-item">
                                <a href="login.html" class="optional-btn">Login <i class='bx bxs-user'></i><span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!-- End Navbar Area -->

    @yield("content")

    <!-- Start Footer Area -->
    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <div class="widget-logo">
                            <a href="/">
                                <img src="assets/images/suryalogo.svg" width="75%" alt="image">
                            </a>
                        </div>
                        <p>A professional work space, inspiring great minds in creating great things. We host people from diverse backgrounds such as digital nomads, entrepreneurs, freelancers, corporate employees and startup enthusiasts.</p>

                        <ul class="widget-info">
                            <li>
                                <i class='bx bxs-phone'></i>
                                <a href="tel:0023567890">+916001083238</a>
                            </li>

                            <li>
                                <i class='bx bx-envelope-open'></i>
                                <a href="mailto:suryacoworking@gmail.com">suryacoworking@gmail.com</a>
                            </li>
                            <li>
                                <i class='bx bx-map'></i><a>503, Orion Towers, GS Rd, Christian Basti, Guwahati, Assam 781005</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Our Company</h3>

                        <ul class="footer-links-list">
                            <li><a href="/about">About Us</a></li>
                            <li><a href="/pricing">Pricing</a></li>
                            <!-- <li><a href="">Careers</a></li> -->
                            <li><a href="">Blogs</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>Our Workspaces</h3>

                        <ul class="footer-links-list">
                            <li><a href="/workspaces">Coworking</a></li>
                            <li><a href="/workspaces">Dedicated Office</a></li>
                            <li><a href="/workspaces">Hot Desking</a></li>
                            <li><a href="/workspaces">Virtual Office</a></li>
                            <li><a href="/workspaces">Meeting Rooms</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="single-footer-widget">
                        <h3>All Support</h3>

                        <ul class="footer-links-list">
                            <li><a href="/contact">Help Desk</a></li>
                            <li><a href="/book-tour">Book A Tour</a></li>

                        </ul>

                        <ul class="widget-social">
                            <li>
                                <a href="https://www.facebook.com/suryabusinesscentre" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/suryabusinesscentre/" target="_blank">
                                    <i class='bx bxl-instagram-alt'></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <div class="container">
                <div class="copyright-area-content">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <p>
                                Copyright @<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Surya All Rights Reserved. Developed by
                                <a href="https://infinityymedia.com/" target="_blank">
                                    Infinityymedia
                                </a>
                            </p>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <ul>
                                <li>
                                    <a href="#">Terms of Service</a>
                                </li>
                                <li>
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class='bx bx-chevron-up'></i>
    </div>
    <!-- End Go Top Area -->

    <!-- Jquery Slim JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Meanmenu JS -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Jquery Appear JS -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- Odometer JS -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- Nice Select JS -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ajaxchimp JS -->
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>
    <!-- Form Validator JS -->
    <script src="assets/js/form-validator.min.js"></script>
    <!-- Contact JS -->
    <script src="assets/js/contact-form-script.js"></script>
    <!-- Wow JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>

</html>