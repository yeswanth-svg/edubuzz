@extends('layouts.apps')
@section('title', 'Worksheets By Grades')

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
    .ag-format-container {
        max-width: 1142px;
        margin: 0 auto;
        padding: 0 1rem;
        /* Padding for mobile */
    }

    .ag-courses_box {
        display: flex;
        align-items: flex-start;
        flex-wrap: wrap;
        padding: 50px 0;
    }

    .ag-courses_item {
        flex-basis: calc(33.33333% - 30px);
        margin: 0 15px 30px;
        overflow: hidden;
        border-radius: 28px;
        transition: transform 0.3s ease;
    }

    .ag-courses_item:hover {
        transform: translateY(-5px);
    }

    .ag-courses-item_link {
        display: block;
        padding: 30px 20px;
        overflow: hidden;
        position: relative;
    }

    .ag-courses-item_link:hover,
    .ag-courses-item_link:hover .ag-courses-item_date {
        text-decoration: none;
        color: #FFF;
    }

    /* Reduced scale for mobile hover */
    .ag-courses-item_link:hover .ag-courses-item_bg {
        transform: scale(10);
    }

    .ag-courses-item_title {
        min-height: 87px;
        margin: 0 0 25px;
        font-weight: bold;
        font-size: 30px;
        color: #000;
        z-index: 2;
        position: relative;
    }

    .ag-courses-item_date-box {
        font-size: 18px;
        color: #FFF;
        z-index: 2;
        position: relative;
    }

    .ag-courses-item_date {
        font-weight: bold;
        color: #f9b234;
        transition: color .5s ease;
    }

    .ag-courses-item_bg {
        height: 128px;
        width: 128px;
        background-color: #f9b234;
        z-index: 1;
        position: absolute;
        top: -75px;
        right: -75px;
        border-radius: 50%;
        transition: all .5s ease;
    }

    /* Define your color classes here */
    .bg-color-0 {
        background-color: #f9b234;
    }

    .bg-color-1 {
        background-color: #3ecd5e;
    }

    .bg-color-2 {
        background-color: #e44002;
    }

    .bg-color-3 {
        background-color: #952aff;
    }

    .bg-color-4 {
        background-color: #cd3e94;
    }

    .bg-color-5 {
        background-color: #4c49ea;
    }

    /* Responsive design */
    @media only screen and (max-width: 979px) {
        .ag-format-container {
            padding: 0 2rem;
            /* Increased padding on tablets */
        }

        .ag-courses_item {
            flex-basis: calc(50% - 20px);
        }

        .ag-courses-item_title {
            font-size: 24px;
        }

        /* Adjust scale on hover for smaller screens */
        .ag-courses-item_link:hover .ag-courses-item_bg {
            transform: scale(6);
        }
          .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }

    @media only screen and (max-width: 639px) {
        .ag-format-container {
            padding: 0 1rem;
        }

        .ag-courses_item {
            flex-basis: 100%;
            margin: 0 0 20px;
        }

        .ag-courses-item_title {
            font-size: 20px;
        }

        /* Further reduce scale on hover for mobile */
        .ag-courses-item_link:hover .ag-courses-item_bg {
            transform: scale(4);
        }
          .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }
</style>

<h1 class="text-center" style="color: #FF5733;">Worksheets for Grades!</h1>

<div class="ag-format-container">
    <div class="ag-courses_box">
        @foreach($grades as $index => $grade)
                @php
                    // Modulus to repeat colors
                    $colorClass = 'bg-color-' . ($index % 6);
                @endphp
                <div class="ag-courses_item">
                    <a href=" {{ route('through_grades', $grade->slug) }}" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg {{ $colorClass }}"></div>

                        <div class="ag-courses-item_title text-center">
                            {{ $grade->name }}
                        </div>
                    </a>
                </div>
        @endforeach
    </div>
</div>

@endsection