@extends('layouts.apps')

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

<!-- Grades Start -->
<div class="container py-5" style="background-color:white;">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Grades</h1>
    </div>
    <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
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
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
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
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
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
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
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
        </div>
    </div>
</div>
<!-- Grades End -->
<!-- Worksheets by Subject Section -->
<section class="worksheets-by-subject" style="padding:30px; text-align:center;">
    <h2>Worksheets by Subject</h2>
    <p>Choose from a variety of subjects to boost skills in English, Math, Science, and more!</p>
    <div class="subject-options" style="display:flex; justify-content:center; gap:20px;">
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">English
            Worksheets</div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">Math
            Worksheets</div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">Science
            Worksheets</div>
    </div>
</section>

<!-- Worksheets by Topics Section -->
<section class="worksheets-by-topic" style="padding:30px; text-align:center; background-color:#e5d4ff;">
    <h2>Worksheets by Topics</h2>
    <div class="topic-options" style="display:flex; justify-content:center; gap:20px; flex-wrap:wrap;">
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">Phonics
        </div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">
            Alphabets</div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">
            Counting</div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">
            Addition</div>
        <!-- Add remaining topics as needed -->
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">Shapes
        </div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">Animals
        </div>
        <div style="background-color:#e0e0e0; padding:20px; border-radius:10px; text-align:center; width:200px;">Colors
        </div>
    </div>
</section>


<!-- Videos Section start-->
<section class="video-section" style="padding:30px; text-align:center;">
    <h2>Our Videos</h2>
    <div class="videos owl-carousel">
        <div class="item">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/zkqxpCXcQJI" frameborder="0"
                allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/1rWAKJCH4ic" frameborder="0"
                allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe width="400 " height="300" src="https://www.youtube.com/embed/AOhLhy3rIx0" frameborder="0"
                allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/o2Z7FkJFPkc" frameborder="0"
                allowfullscreen></iframe>
        </div>
        <div class="item">
            <iframe width="400" height="300" src="https://www.youtube.com/embed/LH76IS_Qoi4" frameborder="0"
                allowfullscreen></iframe>
        </div>
    </div>
</section>
<!-- Videos Section end-->

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

@endsection