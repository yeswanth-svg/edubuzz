@extends('layouts.apps')

@section('title', 'Edubuzz - Kids')

@section('content')


<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('build/img/carousel-1.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(0, 0, 0, .2);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown mb-4">The Best Kindergarten School For
                                Your Child</h1>
                            <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">
                                Worksheets</a>
                            <a href=""
                                class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Grades</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('build/img/carousel-2.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(0, 0, 0, .2);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-2 text-white animated slideInDown mb-4">Make A Brighter Future For Your
                                Child</h1>
                            <a href=""
                                class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Worksheets</a>
                            <a href=""
                                class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Grades</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Worksheets Start -->
<div class="container py-5" style="background-color:white;">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Worksheets</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-sm-6">
            <a href="{{route('through_worksheets_by_subjects', 'math')}}">
                <div class="facility-item">
                    <div class="facility-icon bg-primary">
                        <span class="bg-primary"></span>
                        <img src="{{asset('build/img/math.png')}}" alt="Math Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-primary"></span>
                    </div>
                    <div class="facility-text bg-primary">
                        <h3 class="text-primary mb-3">MATH WORKSHEETS</h3>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a href="{{route('through_worksheets_by_subjects', 'english')}}">
                <div class="facility-item">
                    <div class="facility-icon bg-success">
                        <span class="bg-success"></span>
                        <img src="{{asset('build/img/english.png')}}" alt="English Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-success"></span>
                    </div>
                    <div class="facility-text bg-success">
                        <h3 class="text-success mb-3">ENGLISH WORKSHEETS</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a href="{{route('through_worksheets_by_subjects', 'science')}}">
                <div class="facility-item">
                    <div class="facility-icon bg-warning">
                        <span class="bg-warning"></span>
                        <img src="{{asset('build/img/science.png')}}" alt="Science Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-warning"></span>
                    </div>
                    <div class="facility-text bg-warning">
                        <h3 class="text-warning mb-3">SCIENCE WORKSHEETS</h3>
                    </div>
                </div>
            </a>
        </div>
        <!-- <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 13]) }}">
                <div class="facility-item">
                    <div class="facility-icon bg-info">
                        <span class="bg-info"></span>
                        <img src="{{asset('build/img/color.png')}}" alt="Color Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-info"></span>
                    </div>
                    <div class="facility-text bg-info">
                        <h3 class="text-info mb-3">COLORING WORKSHEETS</h3>
                    </div>
                </div>
            </a>
        </div> -->
    </div>

</div>
<!-- Worksheets End -->
<br>
<br>
<!-- Grades Start -->
<div class="container py-5" style="background-color:white;">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Grades</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
            <a href="{{ route('through_grades', ['grade_id' => 10]) }}">
                <div class="facility-item">
                    <div class="facility-icon bg-primary">
                        <span class="bg-primary"></span>
                        <img src="{{asset('build/img/online-learning.png')}}" alt="Math Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-primary"></span>
                    </div>
                    <div class="facility-text bg-primary">
                        <h3 class="text-primary mb-3">Grade Pre-K</h3>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
            <a href="{{ route('through_grades', ['grade_id' => 11]) }}">
                <div class="facility-item">
                    <div class="facility-icon bg-success">
                        <span class="bg-success"></span>
                        <img src="{{asset('build/img/online-learning.png')}}" alt="Math Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-success"></span>
                    </div>
                    <div class="facility-text bg-success">
                        <h3 class="text-success mb-3">Grade-K</h3>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
            <a href="{{ route('through_grades', ['grade_id' => 12]) }}">
                <div class="facility-item">
                    <div class="facility-icon bg-warning">
                        <span class="bg-warning"></span>
                        <img src="{{asset('build/img/online-learning.png')}}" alt="Math Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-warning"></span>
                    </div>
                    <div class="facility-text bg-warning">
                        <h3 class="text-warning mb-3">Grade 1</h3>

                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
            <a href="{{ route('through_grades', ['grade_id' => 13]) }}">
                <div class="facility-item">
                    <div class="facility-icon bg-info">
                        <span class="bg-info"></span>
                        <img src="{{asset('build/img/online-learning.png')}}" alt="Math Icon" class="img-fluid"
                            style="width: 60px; height: auto;">
                        <span class="bg-info"></span>
                    </div>
                    <div class="facility-text bg-info">
                        <h3 class="text-info mb-3">Grade 2</h3>

                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Grades End -->


<!-- Learning Made Fun start -->

<div class="container py-5">
    <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="mb-4 text-center">Learning Made Fun: Explore Free Worksheets That Teach Through Play!</h1>
            <p>Our worksheets are designed to be educational and fun at the same time. The concepts of our English
                worksheets address skills in a variety of ways, from coloring, writing, puzzles to mazes to letter
                and
                picture matching. We cover all the important math skills including arithmetic, geometry, money, time
                and
                measurement. Our science worksheets address environmental concepts including animal names and their
                sound,
                body parts. Download and print any worksheet for free. .</p>
        </div>
        <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
            <div class="row">
                <div class="col-md-6 text-center mb-4">
                    <img class="img-fluid w-100 bg-light p-3" src="{{ asset('build/img/home-qa.jpg') }}" alt="Home QA">
                </div>
                <div class="col-md-6 text-center mb-4">
                    <a href="https://www.littlebrainworks.com/" target="_blank" rel="noopener noreferrer">
                        <img class="img-fluid w-100 bg-light p-3" src="{{ asset('build/img/little-brain-work.jpg') }}"
                            alt="Little Brain Work">
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
<!-- Learning Made Fun End -->

<!-- videos Start -->

<div class="container d-flex flex-column align-items-center">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Videos</h1>
        <!-- <p>Eirmod sed ipsum dolor sit rebum labore magna erat. Tempor ut dolore lorem kasd vero ipsum sit eirmod
                sit. Ipsum diam justo sed rebum vero dolor duo.</p> -->
    </div>
    <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                    <div class="bg-light d-flex justify-content-center align-items-center"
                        style="width: 400px; height: 300px; overflow: hidden;">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/zkqxpCXcQJI"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <!-- <img class="img-fluid rounded-circle" src="{{asset('build/img/classes-2.jpg')}}" alt=""> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                    <div class="bg-light d-flex justify-content-center align-items-center"
                        style="width: 400px; height: 300px; overflow: hidden;">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/udxSNNEEeZw"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <!-- <img class="img-fluid rounded-circle" src="{{asset('build/img/classes-2.jpg')}}" alt=""> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                    <div class="bg-light d-flex justify-content-center align-items-center"
                        style="width: 400px; height: 300px; overflow: hidden;">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/1rWAKJCH4ic"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <!-- <img class="img-fluid rounded-circle" src="{{asset('build/img/classes-3.jpg')}}" alt=""> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">

                    <div class="bg-light d-flex justify-content-center align-items-center"
                        style="width: 400px; height: 300px; overflow: hidden;">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/AOhLhy3rIx0"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <!-- <img class="img-fluid rounded-circle" src="{{asset('build/img/classes-4.jpg')}}" alt=""> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">

                    <div class="bg-light d-flex justify-content-center align-items-center"
                        style="width: 400px; height: 300px; overflow: hidden;">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/o2Z7FkJFPkc"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="width: 100%; height: 100%;">
                        </iframe>
                    </div>

                    <!-- <img class="img-fluid rounded-circle" src="{{asset('build/img/classes-5.jpg')}}" alt=""> -->
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="classes-item">
                <div class="bg-light rounded-circle w-75 mx-auto p-3">
                    <div class="bg-light d-flex justify-content-center align-items-center"
                        style="width: 400px; height: 300px; overflow: hidden;">
                        <iframe class="img-fluid" src="https://www.youtube.com/embed/LH76IS_Qoi4"
                            title="YouTube video player"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    <!-- <img class="img-fluid rounded-circle" src="{{asset('build/img/classes-6.jpg')}}" alt=""> -->
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="https://www.youtube.com/user/edubuzzkids" class="btn btn-primary px-4 py-2" target="_blank"
                rel="noopener noreferrer">
                More Videos
            </a>
        </div>

    </div>
</div>
<!-- videos End -->

@push('scripts')
    <script>
        $(document).ready(function () {
            $(".videos").owlCarousel({
                items: 3,
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                responsive: {
                    0: { items: 1 },
                    600: { items: 2 },
                    1000: { items: 3 }
                }
            });
        });
    </script>
@endpush


@endsection