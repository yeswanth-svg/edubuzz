<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'Edubuzz-kids')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{asset('favicon.gif')}}" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">



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

    <!-- jQuery (if not already included) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style type="text/css">
        #search-form {
            position: relative;
            top: 0;
            left: 21%;
            /* Adjust this value based on your design needs */
        }

        @media (max-width: 1200px) {
            #search-form {
                left: 15%;
                /* Adjust for medium screens */
            }
        }

        @media (max-width: 992px) {
            #search-form {
                left: 10%;
                /* Adjust for smaller screens */
            }
        }

        @media (max-width: 768px) {
            #search-form {
                left: 5%;
                /* Centered or close to the edge for tablets */
            }
        }

        @media (max-width: 576px) {
            #search-form {
                left: 0;
                /* Full width for mobile screens */
                width: 100%;
            }

            #search-form .form-control {
                width: calc(100% - 50px);
                /* Adjust to fit the screen while considering the button */
            }

            #search-form .btn {
                width: 50px;
                /* Keep button size consistent */
            }
        }

        footer {
            background: #ffb616;
            padding: 34px 0 0 0;
        }

        footer .footer-container {
            width: 80%;
            margin: auto;
        }

        footer .wrap-1 {
            padding-left: 30%;
        }

        footer .wrap-1 h3 {
            font-size: 26px;
            margin-bottom: 21px;
            color: #fff;
        }

        footer .wrap-1 ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        footer .wrap-1 a {
            color: #fff;
            text-decoration: none;
            font-size: 19px;
        }

        footer .footer-copyright {
            padding: 16px 0;
            color: #fff;
            margin-top: 16px;
            border-top: #fff 1px solid;
        }

        footer .footer-copyright a {
            color: #fff;
            text-decoration: none;
        }

        /*** Heading ***/
        h1,
        h2,
        h3,
        h4,
        .h1,
        .h2,
        .h3,
        .h4,
        .display-1,
        .display-2,
        .display-3,
        .display-4,
        .display-5,
        .display-6,
        p,
        a {
            font-family: "Fredoka", sans-serif;
            font-weight: 500;

        }

        .font-secondary {

            font-family: "Fredoka", sans-serif !important;
        }
    </style>

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
            <form action="{{ route('search') }}" method="GET" class="d-flex me-lg-5" id="search-form">
                <input class="form-control me-2" type="search" name="query" placeholder="Search..." aria-label="Search"
                    style="border-radius: 30px; padding: 10px 20px;">
                <button class="btn btn-primary" type="submit" style="border-radius: 30px; padding: 10px 20px;">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="navbar-nav mx-auto">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}"
                    style="font-size:larger">Home</a>
                <a href="{{ url('/worksheets') }}"
                    class="nav-item nav-link {{ request()->is('worksheets') ? 'active' : '' }}"
                    style="font-size:larger">Worksheets</a>
                <a href="https://www.youtube.com/user/edubuzzkids"
                    class="nav-item nav-link {{ request()->is('videos') ? 'active' : '' }}"
                    style="font-size:larger">Videos</a>
                <a href="https://play.google.com/store/apps/dev?id=5183235697422098559" class="nav-item nav-link"
                    style="font-size:larger">Apps</a>
            </div>
        </div>
    </nav>

    @yield('caurosel')
    <!-- Navbar End -->
    <div class="container-xxl bg-white p-0">
        @yield('content')
    </div>

    <!-- Footer Start -->
    <footer class="mt-4">
        <div class="container-lg">
            <div class="footer-container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="wrap-1">
                            <h3>GRADES</h3>
                            <ul>
                                <li><a href="{{ route('through_grades', ['grade_id' => 10]) }}">PRE -K</li>
                                <li><a href="{{ route('through_grades', ['grade_id' => 11]) }}">K</a></li>
                                <li><a href="{{ route('through_grades', ['grade_id' => 12]) }}">GRADE 1</a></li>
                                <li><a href="{{ route('through_grades', ['grade_id' => 13]) }}">GRADE 2</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="wrap-1">
                            <h3>PRINTABLES</h3>
                            <ul>
                                <li><a href="{{route('through_worksheets_by_subjects', 'math')}}">MATH</a></li>
                                <li> <a href="{{route('through_worksheets_by_subjects', 'english')}}">ENGLISH</a></li>
                                <li> <a href="{{route('through_worksheets_by_subjects', 'science')}}">SCIENCE</a></li>
                                <li><a href="{{ route('through_grades_topic', ['topic_id' => 63]) }}">COLORING</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="wrap-1">
                            <h3>SUPPORT</h3>
                            <ul>
                                <!--<li><a href="#">FAQ's</a></li>-->
                                <li><a href="{{ url('/policy') }}">PRIVACY POLICY</a></li>
                                <!--<li><a href="#">COPPA PRIVACY POLICY</a></li>
                <li><a href="#">TERMS OF SERVICE</a></li>-->
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="wrap-1">
                            <h3>ABOUT US</h3>
                            <ul>
                                <li><a href="https://www.littlebrainworks.com/" target="_blank">COMPANY</a></li>
                                <!--<li><a href="#">CAREERS</a></li>
                <li><a href="#">PRESS</a></li>-->
                                <li><a href="https://www.littlebrainworks.com/" target="_blank">CONTACT US</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="footer-copyright text-center">
                            <p>Copyright &copy; <span id="year"></span> <a
                                    href="https://www.cloudeyetech.com/">EDUBUZZKIDS</a>.All rights reserved</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    <script>
        document.getElementById("year").textContent = new Date().getFullYear();
    </script>

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