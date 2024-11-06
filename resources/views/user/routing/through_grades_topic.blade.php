@extends('layouts.apps')
@section('title', $topicName . ' Worksheets')

@section('content')
<link href="{{asset('build/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
<style>
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

    .img-box-2 {
        text-align: center;
        margin-bottom: 21px;
    }

    .img-box-2 a {
        color: #f25141;
    }

    .img-box-2 img {
        margin-bottom: 12px;
        width: 100%;
        border: solid 1px #333333;
        /* box-shadow: rgba(0, 0, 0, 0.25) 2px 2px 10px; */
    }

    .img-box-2 h3 {
        color: #f25141;
        font-size: 18px;
        font-weight: 400;
        margin-bottom: 3px;
    }

    .img-box-2 p {
        color: #5b5b5b;
        font-size: 18px;
        font-weight: 300;
    }


    /* Responsive adjustments */
    /* Mobile responsive adjustments */
    @media (max-width: 768px) {

        .col-xl-3,
        .col-sm-4,
        .col-6 {
            flex: 0 0 100%;
            /* Full width on smaller screens */
            max-width: 100%;
            margin-bottom: 15px;
            /* Spacing between items */
        }

        .heading-tabs ul li {
            padding: 10px 30px;
            /* Responsive padding */
            font-size: 16px;
            /* Responsive font size */
        }

        .text-center.mb-4 {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            justify-content: center;
            /* Center items in the container */
        }
    }

    @media (max-width: 576px) {
        .heading-tabs ul li {
            padding: 8px 20px;
            /* Further reduced padding */
            font-size: 14px;
            /* Responsive font size */
        }

        .img-box-2 {
            height: 130px;
            /* Adjust height */
        }

        .img-box-2 img {
            max-height: 100px;
            /* Adjust max height */
        }

        .img-box-2 p {
            font-size: 12px;
            /* Adjust font size */
        }

        .container,
        .container-lg {
            padding-left: 15px;
            /* Ensure consistent padding */
            padding-right: 15px;
            margin: 0 auto;
            /* Center container */
        }


        .accordion-container {
            padding: 0 15px;
            /* Add padding to accordion container */
        }
    }

    .bg-orange {
        background: #8f60aa;
        color: #fff;
    }

    .bg-red {
        background: #f25141;
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



    .accordion-container .accordion-item {
        margin-bottom: 12px;
        border-color: #8f60aa;
        border-radius: 0 !important;
        text-transform: uppercase;
    }

    .accordion-container .accordion-button {
        font-size: 25px;
        text-transform: uppercase;
        border-radius: 0 !important;
        background-color: #8f60aa;
        /* Background color for the button */
        color: #fff;
        /* Text color for the button */
        border: none;
        /* Remove border to reduce visibility issue */
    }

    .accordion-container .accordion-button.collapsed {
        background-color: #6b4783;
        /* A slightly different shade for the collapsed state */
        color: #fff;
        /* Ensure the text remains white when collapsed */
    }

    .accordion-header {
        margin-bottom: 0;
    }

    .accordion-body .arrow-list {
        margin: 0;
        padding: 0;
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 12px;
        font-size: 20px;
    }

    .accordion-body .arrow-list li {
        position: relative;
        padding-left: 27px;
        width: 100%;
    }

    .accordion-body .arrow-list li::before {
        content: '→';
        /* Use an arrow character */
        position: absolute;
        left: 0;
        /* Position it to the left */
        color: black;
        /* Set the arrow color */
        font-size: 20px;
        /* Adjust size as needed */
        line-height: 20px;
        /* Center the arrow vertically */
    }

    .accordion-body .arrow-list li a {
        color: #000;
        /* Link color */
        text-decoration: none;
    }



    .accordion-button {
        position: relative;
    }

    .accordion-body .arrow-list li a:hover {
        color: #8f60aa;
        /* Optional: Change link color on hover */
    }

    /* Override the default disabled class */
    .carousel-section .owl-nav.disabled {
        opacity: 1 !important;
        pointer-events: auto !important;
    }

    /* Style and position the buttons */
    .carousel-section .owl-nav .owl-prev,
    .carousel-section .owl-nav .owl-next {
        color: #fb7d17;
        /* Orange arrow color */
        font-size: 32px;
        border: 2px solid #fb7d17;
        /* Orange border */
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        transition: transform 0.3s ease, color 0.3s ease, border-color 0.3s ease;
        background-color: transparent;
    }

    /* Position the arrows on the left and right edges of the carousel */
    .carousel-section .owl-nav .owl-prev {
        left: -58px;
        /* Adjust as needed */
    }

    .carousel-section .owl-nav .owl-next {
        right: -61px;
        /* Adjust as needed */
    }

    /* Interactive hover effect */
    .carousel-section .owl-nav .owl-prev:hover,
    .carousel-section .owl-nav .owl-next:hover {
        color: #ff944d;
        /* Lighter orange on hover */
        border-color: #ff944d;
        /* Match color on hover */
    }

    /* Optional: adjust icon size if necessary */
    .carousel-section .owl-nav .owl-prev span,
    .carousel-section .owl-nav .owl-next span {
        font-size: 24px;
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

<div class="container-lg">
    <div class="row">
        <div class="col-md-3 col-sm-4">
            <!-- Existing accordion for topics -->
            <div class="accordion-container">
                <div class="accordion" id="accordionExample">
                    @php
                        $currentTopicId = $topic_id;
                        // Assuming you have a variable $currentSubjectName to dynamically control which subject should stay open
                        $currentSubjectName = $subject->name; // Adjust as needed based on the actual dynamic input
                    @endphp
                    @foreach ($uniqueTopics->groupBy('subject.name') as $subjectName => $topicGroup)
                                        @php
                                            $isCurrentSubject = ($subjectName === $currentSubjectName); // Check if this is the current subject
                                        @endphp
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading{{ $loop->index }}" title="{{ $subjectName }} Topic">
                                                <button class="accordion-button {{ $isCurrentSubject ? '' : 'collapsed' }}" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}"
                                                    aria-expanded="{{ $isCurrentSubject ? 'true' : 'false' }}"
                                                    aria-controls="collapse{{ $loop->index }}">
                                                    {{ $subjectName }}
                                                </button>
                                            </h2>
                                            <div id="collapse{{ $loop->index }}"
                                                class="accordion-collapse collapse {{ $isCurrentSubject ? 'show' : '' }}"
                                                aria-labelledby="heading{{ $loop->index }}" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <ul class="arrow-list">
                                                        @foreach ($topicGroup as $topic)
                                                            @if ($topic->id != $currentTopicId)
                                                                <li>
                                                                    <a href="{{ route('through_worksheets_by_topics', $topic->id) }}"
                                                                        title="{{ $topic->name }}">
                                                                        {{ $topic->name }}
                                                                    </a>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                    @endforeach
                </div>
            </div>


        </div>

        <div class="col-md-6 col-sm-8">
            <div class="row">
                <div class="col-12">
                    <h3 class="bg-title bg-red">{{ $topicName }}</h3> <!-- Displaying the topic name -->
                </div>
            </div>

            <div class="row m-t-14">
                @if ($subtopics && $subtopics->count() > 0)
                    @foreach ($subtopics as $subtopic)
                        <div class="col-xl-3 col-sm-6 col-6">
                            <div class="img-box-2">
                                <a title="{{ $subtopic->name }}"
                                    href="{{ route('through_grades_topic_subtopics', $subtopic->id) }}">
                                    <img src="{{ asset($subtopic->thumbnail) }}" alt="{{ $subtopic->name }}">
                                </a>
                                <h3><a title="{{ $subtopic->name }}"
                                        href="{{ route('through_grades_topic_subtopics', $subtopic->id) }}">
                                        {{ $subtopic->name }}</a>
                                </h3>
                                <p>{{ $grade->slug }}</p> <!-- Displaying the grade slug -->
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12"> <!-- Added a div for better control -->
                        <h4 class="color-orange text-center mt-3">No Subtopics for this Topic</h4>
                    </div>
                @endif
            </div>
        </div>


        <div class="col-md-3 col-lg-3 xs-m-t-36">
            <h3 class="bg-title bg-orange">Our Videos</h3>
            <div class="row">
                <!-- YouTube Video Embeds -->
                <div class="col-12 col-sm-6 col-md-12">
                    <div class="youtube-video-box m-t-14">
                        <iframe src="https://www.youtube.com/embed/-xQ5NSVsfj4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
                <!-- Add more video boxes as needed -->
            </div>
        </div>
    </div>
</div>

<!-- Related Worksheets Carousel -->
<section class="carousel-section">
    <div class="section-title">
        <h3 class="color-orange text-center">Related Worksheets</h3>
    </div>
    <div class="container">
        <div class='related_worksheets owl-carousel owl-theme'>
            @foreach ($worksheets as $worksheet)
                <div class='item'>
                    <div class='img-box-2'>
                        <a href="" title="{{ $worksheet->name }}">
                            <img src="{{ asset($worksheet->thumbnail) }}" alt="{{ $worksheet->name }}"
                                title="{{ $worksheet->name }}" />
                        </a>

                        <h3>
                            <a href="" title="{{ $worksheet->name }}">{{ $worksheet->name }}</a>
                        </h3>
                        <p>{{ $grade->slug }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            autoplay: true,
            margin: 10,
            animateOut: "fadeOut",
            animateIn: "fadeIn",
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplayTimeout: 2000, // Speed up autoplay (milliseconds)
            autoplaySpeed: 800,    // Slide transition speed (milliseconds)
            items: 8,
            navText: [
                "<span class='bi bi-chevron-left'></span>",
                "<span class='bi bi-chevron-right'></span>",
            ],
            responsive: {
                0: { items: 2 },
                600: { items: 5 },
                1000: { items: 6 },
                1200: { items: 6 },
            },
        });

        // Mutation Observer to ensure the arrows stay visible
        const observer = new MutationObserver(() => {
            $('.owl-nav').removeClass('disabled');
        });

        observer.observe(document.querySelector('.owl-carousel'), {
            attributes: true,
            attributeFilter: ['class'],
            subtree: true
        });
    });
</script>


@endsection