@extends('layouts.apps')
@section('title', 'Edubuzz-Worksheets')

@section('caurosel')
<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <section class="page-banner">
        <img src="{{asset('build/img/page2-banner.jpg')}}" class="img-fluid">
    </section>
</div>
<!-- Carousel End -->

@endsection

@section('content')

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
</style>




<style>
    .button-74 {
        background-color: #fbeee0;
        border: 2px solid #422800;
        border-radius: 30px;
        box-shadow: #422800 4px 4px 0 0;
        color: #422800;
        cursor: pointer;
        display: inline-block;
        font-weight: 600;
        font-size: 18px;
        padding: 0 18px;
        line-height: 50px;
        text-align: center;
        text-decoration: none;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-74:hover {
        background-color: #fff;
    }

    .button-74:active {
        box-shadow: #422800 2px 2px 0 0;
        transform: translate(2px, 2px);
    }

    @media (min-width: 768px) {
        .button-74 {
            min-width: 120px;
            padding: 0 25px;
        }
    }
</style>


<!-- Grades Start -->
<div class="container py-5" id="margin-top" style="background-color:white;">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Grades</h1>
        <p>Our worksheets are designed to be educational and fun at the same time. The concepts of our English
            worksheets address skills in a variety of ways, from coloring, writing, puzzles to mazes to letter and
            picture matching. We cover all the important math skills including arithmetic, geometry, money, time and
            measurement. Our science worksheets address environmental concepts including animal names and their sound,
            body parts. Download and print any worksheet for free.</p>
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
                <a href="{{ route('through_grades', ['grade_id' => 10]) }}">
                    <div class="facility-text bg-primary">
                        <h3 class="text-primary mb-3">Grade Pre-K</h3>
                    </div>
                </a>
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
                <a href="{{ route('through_grades', ['grade_id' => 11]) }}">
                    <div class="facility-text bg-success">
                        <h3 class="text-success mb-3">Grade-K</h3>

                    </div>
                </a>
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
                <a href="{{ route('through_grades', ['grade_id' => 12]) }}">
                    <div class="facility-text bg-warning">
                        <h3 class="text-warning mb-3">Grade 1</h3>
                    </div>
                </a>
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
                <a href="{{ route('through_grades', ['grade_id' => 13]) }}">
                    <div class="facility-text bg-info">
                        <h3 class="text-info mb-3">Grade 2</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('worksheets_grades') }}"><button class="button-74" role="button">More Grades</button></a>
    </div>
</div>

<!-- Grades End -->


<!-- Worksheets by Subject Section -->
<section class="worksheets-by-subject" style="padding: 30px; text-align: center;">
    <div class="container-lg">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="subject-options" style="display: flex; overflow-x: auto; gap: 20px; padding-bottom: 10px;">
                    <!-- Each subject option with its image -->
                    <a href="{{route('through_worksheets_by_subjects', 'english')}}">
                        <div class="subject-option"
                            style="padding: 20px; border-radius: 10px; text-align: center; min-width: 200px;">
                            <img src="{{asset('build/img/englsih_worksheets.png')}}" alt="English Worksheets"
                                class="img-fluid" />
                            <h3>English</h3>
                        </div>
                    </a>
                    <a href="{{route('through_worksheets_by_subjects', 'math')}}">
                        <div class="subject-option"
                            style="padding: 20px; border-radius: 10px; text-align: center; min-width: 200px;">
                            <img src="{{asset('build/img/maths_worksheets.png')}}" alt="Maths Worksheets"
                                class="img-fluid" />
                            <h3>Math</h3>
                        </div>
                    </a>

                    <a href="{{route('through_worksheets_by_subjects', 'science')}}">
                        <div class="subject-option"
                            style="padding: 20px; border-radius: 10px; text-align: center; min-width: 200px;">
                            <img src="{{asset('build/img/science_worksheets.png')}}" alt="Science Worksheets"
                                class="img-fluid" />
                            <h3>Science</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 text-content">
                <h2>Worksheets by Subject</h2>
                <p id="para">Our worksheets are designed to be educational and fun at the same time. The concepts of our
                    English
                    worksheets address skills in a variety of ways, from coloring, writing, puzzles to mazes to letter
                    and picture matching. We cover all the important math skills including arithmetic, geometry, money,
                    time, and measurement. Our science worksheets address environmental concepts including animal names
                    and their sounds, and body parts. Download and print any worksheet for free.</p>
                <a href="#" class="btn-1 btn-danger p-2 m-2 rounded-pill"> <i class="bi bi-arrow-left"></i>Select
                    Subject On Right </a>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{route('worksheets_subjects')}}"><button class="button-74" role="button">More
                    Subjects</button></a>
        </div>

    </div>
</section>



<!-- Worksheets by Topics Section -->
<section class="worksheets-by-topic"
    style="padding: 30px; text-align: center; background-image: url('{{ asset('build/img/blue-pattern-page.jpg') }}')">
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
        <a href="{{route('worksheets_topics')}}"><button class="button-74" role="button">More Topics</button></a>
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