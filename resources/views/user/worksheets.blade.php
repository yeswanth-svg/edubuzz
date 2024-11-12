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
    /* General Styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f6f5ee;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .text-center {
        text-align: center;
    }

    /* Page Banner */
    .page-banner {
        height: 300px;
        overflow: hidden;
        margin-bottom: 10px;
    }

    /* Paragraph */
    #para {
        color: #000;
    }

    /* Worksheets by Subject */
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

    /* Button */
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

    /* Workshops by Topic */
    .workshops-by-topic {
        background-color: #e5d4ff;
        padding: 30px;
        text-align: center;
    }

    .subject-section h3 {
        font-size: 1.8rem;
        font-weight: 600;
        color: #4a2c8c;
        margin-bottom: 10px;
    }

    .topic-options {
        display: flex;
        justify-content: center;
        gap: 15px;
        flex-wrap: wrap;
    }

    .topic-card {
        background-color: whitesmoke;
        padding: 15px;
        border-radius: 8px;
        text-align: center;
        width: 144px;
        transition: transform 0.2s ease-out, box-shadow 0.5s ease-out;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .topic-link {
        text-decoration: none;
        color: black;
        font-size: 1rem;
    }

    .topic-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        cursor: pointer;
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
        width: 120px;
        height: auto;
        margin-bottom: 15px;
        border-radius: 75px;
    }

    .card-title {
        font-size: 1.25rem;
        margin-bottom: 10px;
        font-weight: bold;
        color: white;
    }

    .card-description {
        font-size: 0.9rem;
        color: white;
    }

    /* Responsive Grid Layout */
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .col-lg-3,
    .col-sm-6 {
        flex: 1 1 22%;
        max-width: 22%;
        box-sizing: border-box;
    }

    @media (max-width: 768px) {

        .col-lg-3,
        .col-sm-6 {
            flex: 1 1 48%;
            max-width: 48%;
        }

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

        .col-lg-3,
        .col-sm-6 {
            flex: 1 1 100%;
            max-width: 100%;
        }
    }
</style>


<!-- Grades Start -->
<div class="container py-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="mb-3">Grades</h1>
        <p>Our worksheets are designed to be educational and fun at the same time. Concepts cover a range of skills
            including math, English, and science.</p>
    </div>
    <div class="row g-4 justify-content-center">
        <!-- Grade Card -->
        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 10]) }}">
                <div class="grade-card" style="background-color: #f25141;">
                    <img src="{{asset('build/img/pre-k.png')}}" alt="Pre-K" class="img-fluid card-image">
                    <h3 class="card-title">Pre-K</h3>
                    <p class="card-description">Pre-K worksheets help young children develop basic skills through
                        fun,interactive activities.</p>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 11]) }}">
                <div class="grade-card" style="background-color: #ffc107;">
                    <img src="{{asset('build/img/kindergarten.png')}}" alt="Kindergarten" class="img-fluid card-image">
                    <h3 class="card-title">Kindergarten</h3>
                    <p class="card-description">Kindergarten Worksheets help children develop foundation skill in
                        mathreading and creativity</p>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-sm-6">
            <a href="{{ route('through_grades', ['grade_id' => 12]) }}">
                <div class="grade-card" style="background-color: #9ACD32;">
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
                <div class="grade-card" style="background-color: #00BFFF;">
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