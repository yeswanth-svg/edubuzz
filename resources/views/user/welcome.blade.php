@extends('layouts.app')

@section('title', 'Edubuzz - Kids')

@section('caurosel')
<!-- Carousel Start -->

<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('build/img/english-slider.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="display-2  animated slideInDown mb-4">English Worksheets</h5>
                            <p class="col-6">Englsih Worksheets help students practice grammar, vocabulary, reading, and
                                writing
                                skills for improved language proficiency</p>
                            <a href="{{route('through_worksheets_by_subjects', 'english')}}"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">
                                Worksheets</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('build/img/maths-slider.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="display-2  animated slideInDown mb-4">Maths Worksheets</h5>
                            <p class="col-6">Maths Worksheets are designed to help students practice mathematical
                                concepts while also enhancing their problem solving skills.
                            </p>
                            <a href="{{route('through_worksheets_by_subjects', 'math')}}"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Worksheets</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{asset('build/img/science-slider.jpg')}}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h5 class="display-2  animated slideInDown mb-4">Science Worksheets</h5>
                            <p class="col-6">Science Worksheets help students strengthen their understanding of key
                                scientific concepts while developing their reading and writing skills.</p>
                            <a href="{{route('through_worksheets_by_subjects', 'science')}}"
                                class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Worksheets</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->
@endsection


@section('content')

<style>
    /* Adjust carousel for better mobile responsiveness */
    .owl-carousel .owl-carousel-item img {
        height: 450px !important;
    }

    h5 {
        color: black !important;
        font-size: 25px !important;
        font-weight: 900 !important;
    }

    .btn-primary {

        background-color: #f84778 !important;
        border-color: #f84778 !important;
            box-shadow: 0px 6px 0px #cf1e4f;
    }

    p {
        color: black !important;
        font-size: 18px !important;

    }

    /* General responsive layout adjustments */
    .container-fluid,
    .container {
        max-width: 100%;
        padding-left: 15px;
        padding-right: 15px;
    }

    /* Ensure no horizontal scroll by setting the body overflow */
    body {
        overflow-x: hidden;
    }



    @media screen (max-width:569px) {
        .owl-carousel .owl-item img {
            object-fit: cover;
            height: 200px !important;
        }

        h5 {
            color: black !important;
            font-size: 20px !important;
            font-weight: 900 !important;
        }

    }

    /* Carousel items spacing and size adjustments on mobile */
    @media (max-width: 768px) {
        .facility-item {
            padding: 20px;
        }

        .owl-carousel .owl-item img {
            object-fit: cover;
            height: 400px !important;
        }

        .h-100 {
            height: 400px !important;
        }

        #margin-top {
            margin-top: -10pc !important;
        }


        /* Adjusting text size for headers on mobile */
        h1 {
            font-size: 24px;
        }


        /* Adjust iframe (video) container */
        .bg-light.d-flex {
            width: 100% !important;
            height: auto;
            max-width: 350px;
        }

        h5 {
            color: black !important;
            font-size: 20px !important;
            font-weight: 900 !important;
        }
    }
</style>



<style>
    .page-banner {
        height: 300px;
        overflow: hidden;
        margin-bottom: 10px;
    }

    #para {
        color: #000;
    }

    .worksheets-by-subject {
        padding: 30px;
        text-align: center;
    }

    .worksheets-by-subject h2 {
        font-size: 2rem;
        margin-bottom: 15px;
    }

    .worksheets-by-subject #para {
        font-size: 1rem;
        line-height: 1.6;
        color: black !important;
    }

    .subject-options {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .subject-option {
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        width: 180px;
        transition: transform 0.3s;
    }

    .subject-option img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }

    .subject-option h3 {
        font-size: 1.2rem;
        margin-top: 10px;
    }

    .subject-option:hover {
        transform: scale(1.05);
    }

    .text-content {
        margin-top: 20px;
    }

    @media (max-width: 768px) {
        .subject-options {
            gap: 10px;
        }

        .subject-option {
            width: 150px;
        }

        .text-content {
            margin-top: 15px;
            padding: 0 15px;
        }
    }

    @media (max-width: 576px) {
        .worksheets-by-subject h2 {
            font-size: 1.8rem;
        }

        .worksheets-by-subject p {
            font-size: 0.9rem;
        }
    }

    /* General Section Styles */
    .workshops-by-topic {
        background-color: #e5d4ff;
        padding: 30px;
        text-align: center;
    }

    /* Main Heading Styles */
    h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Subject Heading Styles */
    .subject-section h3 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #4a2c8c;
        /* Dark purple for subject heading */
        margin-bottom: 10px;
    }

    /* Topic Options Container */
    /* General Section Styles */
    .workshops-by-topic {
        background-color: #e5d4ff;
        padding: 30px;
        text-align: center;
    }

    /* Main Heading Styles */
    h2 {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 20px;
    }

    /* Subject Heading Styles */
    .subject-section h3 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #4a2c8c;
        /* Dark purple for subject heading */
        margin-bottom: 10px;
    }

    /* Topic Options Container */
    .topic-options {
        display: flex;
        justify-content: center;
        gap: 15px;
        /* Reduced gap for less space */
        flex-wrap: wrap;
    }

    /* Topic Card Styles */
    .topic-card {
        background-color: whitesmoke;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        width: 144px;
        transition: transform 0.2s ease-out, box-shadow 0.5s ease-out;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    /* Anchor Tag Styles */
    .topic-link {
        text-decoration: none;
        /* Remove underline from links */
        color: black;
        /* Text color */
        font-size: 1rem;
        /* Font size */
    }

    /* Hover Effects for Topic Cards */
    .topic-card:hover {
        transform: translateY(-5px);
        /* Lift effect */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Increase shadow */
        /* Increase shadow */
        cursor: pointer;
        /* Pointer on hover */
    }

    @media (max-width: 768px) {
        .facility-item {
            padding: 20px;
        }

        .owl-carousel .owl-item img {
            object-fit: cover;
            height: 400px !important;
        }

        .h-100 {
            height: 400px !important;
        }

        #margin-top {
            margin-top: -14pc !important;
        }
    }
    
    .video-column {
    margin-bottom: 20px; /* Adjust as needed */
}
</style>

<!-- style for grades cards -->
<style>
    .container {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .text-center {
        text-align: center;
    }

    /* Grades Section */
    .grade-card {
        padding: 20px;
        border-radius: 15px;
        text-align: center;
        color: #333;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        margin: 10px;
    }

    .grade-card:hover {
        transform: translateY(-5px);
    }

   .card-image {
    width: 131px;
    height: auto;
    margin-bottom: 15px;
    border-radius: 75px;
    outline: 2px dashed white;
    padding: 5px;
}

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 10px;
        font-weight: bold;
        color: white;
    }

    .card-description {
        font-size: 17px !important;
        color: white !important;
    }
</style>



<!-- Grades Start -->
<div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="mb-3">Grades</h1>

    </div>
    <div class="row g-4 justify-content-center">
        <!-- Grade Card -->
        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 10]) }}">
                <div class="grade-card" style="background-color: #f25141; box-shadow: #c33628 0px 10px 8px; border-radius: 25px;">
                    <img src="{{asset('build/img/pre-k.png')}}" alt="Pre-K" class="img-fluid card-image">
                    <h3 class="card-title">Pre-K</h3>
                    <p class="card-description">Pre-K worksheets help young children develop basic skills through
                        fun,interactive activities.</p>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 11]) }}">
                <div class="grade-card" style="background-color: #ffc107; box-shadow:#d19f09 0px 10px 8px; border-radius: 25px;">
                    <img src="{{asset('build/img/kindergarten.png')}}" alt="Kindergarten" class="img-fluid card-image">
                    <h3 class="card-title">Kindergarten</h3>
                    <p class="card-description">Kindergarten Worksheets help children develop foundation skill in the
                        math, reading, and creativity</p>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 12]) }}">
                <div class="grade-card" style="background-color: #9ACD32; box-shadow: #79a71c 0px 10px 8px; border-radius: 25px;">
                    <img src="{{asset('build/img/grade1.png')}}" alt="Grade 1" class="img-fluid card-image">
                    <h3 class="card-title">Grade 1</h3>
                    <p class="card-description">Grade 1 worksheets help children practice foundational skills in
                        math,reading and writing
                    </p>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 13]) }}">
                <div class="grade-card" style="background-color: #00BFFF; box-shadow: #1087af 0px 10px 8px; border-radius: 25px;">
                    <img src="{{asset('build/img/grade2.png')}}" alt="Grade 2" class="img-fluid card-image">
                    <h3 class="card-title">Grade 2</h3>
                    <p class="card-description">Grade 2 worksheets help reinforce basic skills in math,reading,writing
                        and
                        science</p>
                </div>
            </a>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('worksheets_grades') }}"><button class="btn btn-primary px-4 py-2" role="button">More
                Grades</button></a>
    </div>
</div>
<!-- Grades End -->


<!-- Worksheets by Topics Section -->

<!-- Worksheets by Topics Section -->

<section class="worksheets-by-topic"
    style="padding: 30px; text-align: center; background-image: url('{{ asset('build/img/blue-pattern-page.jpg') }}')">
    <div class="container py-5">
        <h2 style="font-size: 2rem; font-weight: bold; margin-bottom: 20px; color: white;">Worksheets By Topics</h2>
        <!-- Main Heading -->

        @foreach ($uniqueTopics->groupBy('subject.name') as $subjectName => $topicGroup) <!-- Group topics by subject name -->
            <div class="subject-section row" style="margin: 20px 0; align-items: center;">
                <div class="subject-image col-lg-2 col-md-3 col-sm-4" style="padding-right: 6px;">
                    @if ($subjectName == 'English') <!-- Check if the subject is English -->
                        <img src="{{ asset('build/img/english-worksheet.png') }}" alt="English" class="img-fluid" />
                    @elseif ($subjectName == 'Math') <!-- Check if the subject is Math -->
                        <img src="{{ asset('build/img/math-worksheet.png') }}" alt="Math" class="img-fluid" />
                    @elseif ($subjectName == 'Science') <!-- Check if the subject is Science -->
                        <img src="{{ asset('build/img/science-worksheet.png') }}" alt="Science" class="img-fluid" />
                    @endif
                </div>

                <div class="topic-options col-lg-10 col-md-9 col-sm-8">
                    <div class="row"> <!-- Add row for responsive layout control -->
                        @foreach ($topicGroup as $topic) <!-- Loop through each topic under the subject -->
                            <a href="{{route('through_worksheets_by_topics', $topic->id)}}"
                                class="topic-link col-lg-2 col-md-4 col-sm-6 col-6">
                                <div class="topic-card"
                                    style="background-color: #e0e0e0; padding: 10px; border-radius: 8px; text-align: center; margin-bottom: 15px;">

                                    <!-- Assuming you have a route for topic detail -->
                                    {{ $topic->name }} <!-- Topic Name -->

                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach

        <div class="d-flex justify-content-center mt-4">
            <a href="{{route('worksheets_topics')}}"><button class="btn btn-primary px-4 py-2" role="button">More
                    Topics</button></a>
        </div>

    </div>

</section>





<!-- videos Start -->
<!-- Custom CSS -->
<style>
    /* Custom margin for each video column */
    .video-column {
        margin-bottom: 20px; /* Adjust this value as needed */
    }
</style>

<div class="container d-flex flex-column align-items-center">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Videos</h1>
    </div>

    <!-- Video Grid -->
    <div class="row g-5 justify-content-center" style="--bs-gutter-x: 6rem !important;">
        <div class="col-lg-4 col-md-6 wow fadeInUp video-column" data-wow-delay="0.3s">
            <div class="bg-light d-flex justify-content-center align-items-center" style="width: 400px; height: 300px; overflow: hidden;">
                <iframe class="img-fluid" src="https://www.youtube.com/embed/zkqxpCXcQJI" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 wow fadeInUp video-column" data-wow-delay="0.3s">
            <div class="bg-light d-flex justify-content-center align-items-center" style="width: 400px; height: 300px; overflow: hidden;">
                <iframe class="img-fluid" src="https://www.youtube.com/embed/udxSNNEEeZw" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 wow fadeInUp video-column" data-wow-delay="0.5s">
            <div class="bg-light d-flex justify-content-center align-items-center" style="width: 400px; height: 300px; overflow: hidden;">
                <iframe class="img-fluid" src="https://www.youtube.com/embed/1rWAKJCH4ic" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 wow fadeInUp video-column" data-wow-delay="0.1s">
            <div class="bg-light d-flex justify-content-center align-items-center" style="width: 400px; height: 300px; overflow: hidden;">
                <iframe class="img-fluid" src="https://www.youtube.com/embed/AOhLhy3rIx0" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 wow fadeInUp video-column" data-wow-delay="0.3s">
            <div class="bg-light d-flex justify-content-center align-items-center" style="width: 400px; height: 300px; overflow: hidden;">
                <iframe class="img-fluid" src="https://www.youtube.com/embed/o2Z7FkJFPkc" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 wow fadeInUp video-column" data-wow-delay="0.5s">
            <div class="bg-light d-flex justify-content-center align-items-center" style="width: 400px; height: 300px; overflow: hidden;">
                <iframe class="img-fluid" src="https://www.youtube.com/embed/LH76IS_Qoi4" title="YouTube video player"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen
                    style="width: 100%; height: 100%;">
                </iframe>
            </div>
        </div>
    </div>

    <!-- "More Videos" Button -->
    <div class="d-flex justify-content-center mt-4">
        <a href="https://www.youtube.com/user/edubuzzkids" class="btn btn-primary px-4 py-2" target="_blank" rel="noopener noreferrer">
            More Videos
        </a>
    </div>
</div>

<!-- videos End -->

@push('scripts')
    <script>
        $(document).ready(function () {
            var owl = $(".videos").owlCarousel({
                items: 3,
                margin: 20,
                loop: true,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
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