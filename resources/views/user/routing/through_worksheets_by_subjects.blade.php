@extends('layouts.apps')
@section('title', 'Edubuzz - ' . $subject)

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
    .heading-tabs {
        padding-top: 34px;
        padding-bottom: 34px;
    }

    .heading-tabs ul {
        display: flex;
        align-items: center;
        margin: 0;
        padding: 0;
        list-style: none;
        justify-content: center;
        flex-wrap: wrap;
        /* Allow wrapping on smaller screens */
    }

    .heading-tabs ul li {
        padding: 12px 55px;
        border-radius: 16px 16px 0 0;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #fff;
        font-size: 20px;
        text-transform: uppercase;
    }

    .heading-tabs ul li.active {
        background: #f25141;
    }

    .heading-tabs ul li span {
        display: inline-flex;
        width: 36px;
        height: 36px;
        align-items: center;
        justify-content: center;
        color: #000;
        background: #fff;
        border-radius: 50px;
    }

    .heading-tabs ul a {
        color: #fff;
    }

    .heading-tabs ul li:nth-child(2) {
        background: #93c524;
    }

    .img-box-1 {
        border: #111 3px solid;
        border-radius: 4px;
        height: 200px;
        text-align: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 24px;
        padding: 14px;
    }

    .img-box-1 img {
        max-height: 160px;
        transform: translateY(-12px);
    }

    .img-box-1 p {
        position: absolute;
        bottom: -21px;
        left: 0;
        width: 100%;
        text-align: center;
        padding: 12px;
        font-size: 16px;
        text-transform: uppercase;
        font-weight: 400;
        color: #000;
    }

    .subject-button {
        color: white;
        border: none;
        border-bottom: 3px solid transparent;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s, border-bottom 0.3s;
        background-color: transparent;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 8px;
        /* Added spacing between buttons */
    }

    .subject-button.active {
        border-bottom: none;
        color: white !important;
    }


    .subject-button.grade-pre-k {
        color: #f25141;
        background-color: #f25141;
        border-bottom-color: #f25141;
    }

    .subject-button.grade-k {
        color: #9ACD32;
        background-color: #9ACD32;
        border-bottom-color: #9ACD32;
    }

    .subject-button.grade-1 {
        color: #00BFFF;
        background-color: #00BFFF;
        border-bottom-color: #00BFFF;
    }

    .subject-button.grade-2 {
        color:#fb7d17;
        background-color: #fb7d17;
        border-bottom-color: #fb7d17;
    }

    .subject-button:not(.active) {
        background-color: transparent;
    }

    .subject-box {
        display: none;
    }

    .subject-box.show {
        display: block;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .heading-tabs ul li {
            padding: 10px 30px;
            font-size: 16px;
        }

        .subject-button {
            padding: 8px 15px;
            font-size: 14px;
            margin-bottom: 4px;
            /* Spacing between buttons */
        }

        .img-box-1 {
            height: 150px;
            padding: 10px;
        }

        .img-box-1 img {
            max-height: 120px;
        }

        .img-box-1 p {
            font-size: 14px;
        }

        .col-xl-3,
        .col-sm-4,
        .col-6 {
            flex: 0 0 100%;
            /* Take full width on smaller screens */
            max-width: 100%;
            margin-bottom: 15px;
            /* Added spacing between items */
        }

        .text-center.mb-4 {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            justify-content: center;
        }
        
          .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }

    @media (max-width: 576px) {
        .heading-tabs ul li {
            padding: 8px 20px;
            font-size: 14px;
        }

        .subject-button {
            padding: 6px 10px;
            font-size: 12px;
        }

        .img-box-1 {
            height: 130px;
        }

        .img-box-1 img {
            max-height: 100px;
        }

        .img-box-1 p {
            font-size: 12px;
        }

        .container,
        .container-lg {
            padding-left: 15px;
            padding-right: 15px;
        }
        
          .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }

    .bg-orange {
        background: #8f60aa;
        color: #fff;
    }

    .bg-title {
        padding: 11px 26px;
        color: #000;
        font-size: 18px;
        text-decoration: none;
        /* border-bottom: transparent 5px solid; */
        text-transform: uppercase;
    }
</style>

<section class="heading-tabs">
    <div class="container-lg">
        <ul>
            <li class="active"> <span><i class="bi bi-file-earmark-text"></i></span> <a
                    href="/worksheets">Worksheets</a></li>
            <li> <span><i class="bi bi-film"></i></span> <a href="https://www.youtube.com/user/edubuzzkids">Videos</a>
            </li>
        </ul>
    </div>
</section>

<div class="container my-5">
    <div class="row">

        <div class="col-md-8 col-lg-9">
            <div class="text-center mb-4" id="grade-buttons">
                @foreach($filteredGrades ?? $grades as $grade)
                    <button class="subject-button {{ $loop->first ? 'active' : '' }} {{ strtolower($grade->slug) }}"
                        data-grade="{{ strtolower($grade->name) }}">
                        {{ $grade->name }}
                    </button>
                @endforeach
            </div>
            <div id="grades-container" class="row">
                @foreach($filteredGrades ?? $grades as $grade)
                    <div class="subject-box {{ $loop->first ? 'show' : '' }}" data-grade="{{ strtolower($grade->name) }}">
                        <div class="row">
                            @foreach($grade->subjects as $subject)
                                @foreach($subject->topics as $topic)
                                    <div class="col-xl-3 col-sm-4 col-6 mb-3">
                                        <div class="img-box-1">
                                            <a title="{{ $topic->name }}" href="{{ route('through_grades_topic', $topic->id) }}">
                                                <img src="{{ asset($topic->thumbnail) }}" alt="{{ $topic->name }}"
                                                    class="img-fluid rounded">
                                            </a>
                                            <p>{{ $topic->name }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="col-md-4 col-lg-3 xs-m-t-36">
            <h2 class="text-center bg-title bg-orange text-light">Our Videos</h2>
            <div class="row">
                <!-- Sample YouTube Videos -->
                <div class="col-12 mb-4">
                    <iframe src="https://www.youtube.com/embed/-xQ5NSVsfj4" title="Sample Video 1" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <div class="col-12 mb-4">
                    <iframe src="https://www.youtube.com/embed/-xQ5NSVsfj4" title="Sample Video 1" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <!-- Add more videos as needed -->
            </div>
        </div>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(document).ready(function () {
        // Initially show the first subject box and set the first button as active
        $('.subject-box').first().addClass('show');
        $('.subject-button').first().addClass('active');

        // Handle button clicks for grades
        $('.subject-button').on('click', function () {
            // Remove active class from all buttons
            $('.subject-button').removeClass('active');
            // Add active class to the clicked button
            $(this).addClass('active');

            const selectedGrade = $(this).data('grade');

            // Hide all subject boxes and show only the selected grade
            $('.subject-box').removeClass('show');
            $('.subject-box[data-grade="' + selectedGrade + '"]').addClass('show');
        });
    });
</script>

@endsection