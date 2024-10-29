<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Kider - Preschool Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="{{asset('build/lib/animate/animate.min.css')}}" rel="stylesheet" />
    <link href="{{asset('build/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('build/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{asset('build/css/style.css')}}" rel="stylesheet" />
</head>

<body>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
        <a href="{{ url('/') }}" class="navbar-brand">
            <h1 class="m-0 text-primary d-flex align-items-center">
                <img class="img-fluid rounded-circle me-2" src="{{ asset('build/img/logo - Copy.png') }}" alt="Logo"
                    style="width: 50px; height: 50px;">
                EduBuzzKids
            </h1>


        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}"
                    style="font-size:x-large">Home</a>
                <a href="{{ url('/worksheets') }}"
                    class="nav-item nav-link {{ request()->is('worksheets') ? 'active' : '' }}"
                    style="font-size:x-large">worksheets</a>
                <a href="{{ url('/about') }}" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}"
                    style="font-size:x-large">About Us</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}"
                    style="font-size:x-large">Contact Us</a>
                <a href="https://www.youtube.com/user/edubuzzkids"
                    class="nav-item nav-link {{ request()->is('videos') ? 'active' : '' }}"
                    style="font-size:x-large">Videos</a>


            </div>
            <!-- <a href="" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Join Us<i
                    class="fa fa-arrow-right ms-3"></i></a> -->
        </div>
    </nav>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    <div class=" text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #ffb616;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="text-white mb-4">
                        <i class="fa fa-map-marker-alt me-3"></i>123
                        Street, New York, USA
                    </p>
                    <p class="text-white mb-4">
                        <i class="fa fa-phone-alt me-3"></i>+012 345
                        67890
                    </p>
                    <p class="text-white mb-4">
                        <i class="fa fa-envelope me-3"></i>info@example.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <a class="btn btn-link text-white mb-4" href="{{ url('/about') }}">About Us</a>
                    <a class="btn btn-link text-white mb-4" href="{{ url('/contact') }}">Contact Us</a>
                    <a class="btn btn-link text-white mb-4" href="{{ url('/policy') }}">Privacy Policy</a>
                    <a class="btn btn-link text-white mb-4" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Video Gallery</h3>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <div
                                style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden; border-radius: 50%;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 50%;"
                                    src="https://www.youtube.com/embed/LH76IS_Qoi4" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden; border-radius: 50%;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 50%;"
                                    src="https://www.youtube.com/embed/zkqxpCXcQJI" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden; border-radius: 50%;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 50%;"
                                    src="https://www.youtube.com/embed/udxSNNEEeZw" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden; border-radius: 50%;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 50%;"
                                    src="https://www.youtube.com/embed/1rWAKJCH4ic4" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden; border-radius: 50%;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 50%;"
                                    src="https://www.youtube.com/embed/AOhLhy3rIx0" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                        <div class="col-4">
                            <div
                                style="position: relative; width: 100%; padding-bottom: 100%; overflow: hidden; border-radius: 50%;">
                                <iframe
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; border-radius: 50%;"
                                    src="https://www.youtube.com/embed/o2Z7FkJFPkc" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Newsletter</h3>
                    <p class="text-white mb-4">
                        Dolor amet sit justo amet elitr clita ipsum
                        elitr est.
                    </p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <!-- <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy;
                        <a class="border-bottom" href="{{ url('/') }}">EduBuzzKids</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By
                        <a class="border-bottom" href="https://www.cloudeyetech.com/">CloudEye Technologies</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ url('/') }}">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('build/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('build/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('build/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('build/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('build/js/main.js')}}"></script>
</body>

</html>