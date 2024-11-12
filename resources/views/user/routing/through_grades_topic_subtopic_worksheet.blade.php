@extends('layouts.apps')
@section('title', $worksheet->name)

@section('content')
<style>
    .orange-border-box {
        border: #8f60aa 1px solid;
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
        text-transform: uppercase;
    }

    .orange-border-box .m-t-14 {
        height: 1070px;
        overflow: auto;
        overflow-x: hidden;
    }

    .img-box-2 {
        text-align: center;
        margin-bottom: 21px;
    }

    .gutter-14 {
        padding-left: 14px;
        padding-right: 14px;
    }

    .img-box-2 a {
        color: #f25141;
    }

    .img-box-2 img {
        margin-bottom: 12px;
        width: 100%;
        border: solid 1px #333333;
    }

    .img-box-2 h3 {
        color: #f25141;
        font-size: 18px;
        font-weight: 400;
        margin-bottom: 3px;
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    .buttons {
        display: flex;
        justify-content: center;
    }

    .btn_yellow {
        background: #f25141;
    }

    .commonBtnStyle1,
    .commonBtnStyle {
        padding: 9px 40px;
        border-radius: 16px 16px 0 0;
        display: flex;
        align-items: center;
        gap: 10px;
        color: #fff;
        font-size: 24px;
        text-transform: uppercase;
        border: 0;
    }

    .btn_violet {
        background: #28a8e3;
    }

    .btn_blue {
        background: #93c524;
    }

    .wkstdesc {
        width: 100%;
        margin-top: 20px;
        padding: 0 15px;
    }

    .content-name {
        font-size: 20px;
        color: #fb7d17;
    }

    .content-description {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 15px;
    }

    .section-title h3 {
        text-transform: uppercase;
        font-weight: normal;
        font-size: 35px;
        margin-top: 25px;
    }

    .color-orange {
        color: #fb7d17;
    }

    /* Responsive Adjustments */
    @media (max-width: 767px) {
        .orange-border-box .m-t-14 {
            height: auto;
            overflow: visible;
        }

        .content-description {
            font-size: 14px;
        }

        .commonBtnStyle1,
        .commonBtnStyle {
            font-size: 16px;
            padding: 8px 30px;
        }

        .col-md-2,
        .col-md-7,
        .col-md-3 {
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        .wkstdesc {
            width: 100%;
        }

        .carousel-section .owl-nav .owl-next {
            right: 0px !important;
            /* Adjust as needed */
        }
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

<section class="page4-section-1">
    <div class="container-lg">
        <div class="row">
            <div class="col-md-2">
                <div class="orange-border-box">
                    <h3 class="bg-title bg-orange">{{ $subtopic->name }}</h3>
                    <div class="m-t-14 custom-scrollbar-css">
                        <div class="row">
                            <div class="col-12">
                                @foreach ($remainingWorksheets as $remainingWorksheet)
                                    <div class="img-box-2 gutter-14">
                                        <a href="{{ route('through_grades_topic_subtopic_worksheets', $remainingWorksheet->id) }}"
                                            title="{{ $remainingWorksheet->name }}">
                                            <img src="{{ asset($remainingWorksheet->thumbnail) }}"
                                                alt="{{ $remainingWorksheet->name }}">
                                        </a>
                                        <h3>{{ $remainingWorksheet->name }}</h3>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-md-7">

                <table border="0" id="contentTable" cellpadding="0" cellspacing="0" width="100%" align="center"
                    height="100%">
                    <tbody>
                        <tr>
                            <td valign="top" colspan="2" align="center">
                                <div id="imgGameContent" class="flyBrd">
                                    <div id="alpLearn">
                                        <div class="buttons">
                                            <button id="btnVwQst" class="commonBtnStyle1 btn_yellow font13 print-btn_ht"
                                                title="View Worksheet"
                                                onclick="showqst('{{ asset($worksheet->file_path) }}')">View
                                                Worksheet</button>

                                            <button title="print" id="btnPrint"
                                                class="commonBtnStyle btn_violet print-btn_ht"
                                                onclick="window.open('{{ asset($worksheet->file_path) }}', '_blank')">Print</button>
                                        </div>

                                        <div style="text-align: center;">
                                            <iframe src="{{ asset($worksheet->file_path) }}
                                                width=" 100%" height="600px">
                                            </iframe>
                                        </div>
                                        <div id="divLoadFrame">
                                            <iframe id="PdfFrame"
                                                src="{{ asset($worksheet->file_path) }}#view=fit&amp;scrollbar=0&amp;toolbar=0"
                                                width="100%" height="1078" scrolling="no">
                                            </iframe>

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>


            <div class="col-md-3 xs-m-t-36">
                <h3 class="bg-title bg-orange">Our Videos</h3>
                <div class="row">
                    <div class="youtube-video-box m-t-14 text-center">
                        <iframe src="https://www.youtube.com/embed/-xQ5NSVsfj4" title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen=""></iframe>
                    </div>
                    <!-- Additional videos here -->
                </div>
            </div>
            <section class="page4-section-1 text-center">
                <div class="container-lg wkstdesc">
                    <div class="content-name">{{ $worksheet->name }}</div>
                    <div class="content-description">{{ $worksheet->description }}</div>
                </div>
            </section>


        </div>
    </div>
</section>



<!-- New Section for Related Worksheets Carousel -->


<section class="carousel-section" style="margin-top:9pc;">
    <div class="section-title">
        <h3 class="color-orange text-center">Related Worksheets</h3>
    </div>
    <div class="container">
        <div class="related_worksheets owl-carousel owl-theme">
            @foreach ($relatedWorksheets as $relatedWorksheet)
                <div class="item text-center">
                    <a href="{{ route('through_grades_topic_subtopic_worksheets', $relatedWorksheet->id) }}"
                        title="{{ $relatedWorksheet->name }}">
                        <img src="{{ asset($relatedWorksheet->thumbnail) }}" alt="{{ $relatedWorksheet->name }}">
                    </a>
                    <h3>{{ $relatedWorksheet->name }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>




<script>
    console.log("PDF Path:", "{{ asset($worksheet->file_path) }}");
</script>

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