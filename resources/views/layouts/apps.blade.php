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
    
          #img-fd
            {
                width:150px !important;
            }
        #search-form {
            position: relative;
            top: 0;
            left: 21%;
            /* Adjust this value based on your design needs */
        }

         @media (min-width: 1025px) {
        #navbarCollapse {
            position: relative;
            top: 0px;
            left: 50%;
            transform: translate(-50%);
        }
}

/* Reset or alternative styles for mobile view (below 1025px) */
            @media (max-width: 1024px) {
                #navbarCollapse {
                    position: static;
                    left: auto;
                    transform: none;
                }
            }

        @media (max-width: 1200px) {
            #search-form {
                left: 15%;
                /* Adjust for medium screens */
            }
            
             #navbarCollapse
             {
                 position: relative;
                 top: 0px;
                 left: 53%;
                 transform: translate(-50%);
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
        a ,
        button
        {
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
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"
        style="border-bottom: 3.5px solid #988fac; margin-bottom: 0;">
        <div class="container">
            <!-- Logo with a slight margin to the right -->
            <a href="{{ url('/') }}" class="navbar-brand ms-5">
                <img class="img-fluid me-2" id="img-fd" src="{{ asset('build/img/edubuzz_logo.png') }}" alt="Logo">
            </a>

            <!-- Toggle button for mobile view -->
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar content -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="d-flex flex-column flex-lg-row align-items-lg-center w-100">
                    <!-- Search form with spacing on the right side -->
                    <form action="{{ route('search') }}" method="GET" class="d-flex me-auto ms-lg-auto mb-2 mb-lg-0"
                        id="search-form">
                        <input class="form-control me-2" type="search" name="query" placeholder="Search..."
                            aria-label="Search" style="border-radius: 30px; padding: 10px 20px;">
                        <button class="btn btn-primary" type="submit" style="border-radius: 30px; padding: 10px 20px;">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>

                    <!-- Centered navigation links -->
                    <div class="navbar-nav mx-auto">
                        <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}"
                            style="font-size:larger">Home</a>
                        <a href="https://www.youtube.com/user/edubuzzkids"
                            class="nav-item nav-link {{ request()->is('videos') ? 'active' : '' }}"
                            style="font-size:larger">Videos</a>
                        <a href="https://play.google.com/store/apps/dev?id=5183235697422098559"
                            class="nav-item nav-link" style="font-size:larger">Apps</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->



    @yield('caurosel')
    <!-- Navbar End -->
    <div class="container-xxl bg-white p-0">
        @yield('content')
    </div>


    <!-- Footer Start -->
    <footer class="mt-4" style="border-top:6px solid #7e55b3; margin-bottom: 0;">
        <div class="container-lg">
            <div class="footer-container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="wrap-1">
                            <h3>GRADES</h3>
                            <ul>
                                <li><a href="{{ route('through_grades', ['grade_slug' => 'grade-pre-k']) }}">PRE -K</a>
                                </li>
                                <li><a href="{{ route('through_grades', ['grade_slug' => 'grade-k']) }}">K</a></li>
                                <li><a href="{{ route('through_grades', ['grade_slug' => 'grade-1']) }}">GRADE 1</a>
                                </li>
                                <li><a href="{{ route('through_grades', ['grade_slug' => 'grade-2']) }}">GRADE 2</a>
                                </li>
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
                            <p class="text-light">Copyright &copy; <span id="year"></span> <a
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