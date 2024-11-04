@extends('layouts.apps')
@section('title', 'Worksheets By Grades')

@section('content')
<style>
    .ag-format-container {
        width: 1142px;
        margin: 0 auto;
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
        .ag-courses_item {
            flex-basis: calc(50% - 30px);
        }

        .ag-courses-item_title {
            font-size: 24px;
        }
    }

    @media only screen and (max-width: 639px) {
        .ag-courses_item {
            flex-basis: 100%;
        }
    }
</style>

<h1 class="text-center" style="color: #FF5733; font-family: 'Comic Sans MS', cursive;">Worksheets for Grades!</h1>

<div class="ag-format-container">
    <div class="ag-courses_box">
        @foreach($grades as $index => $grade)
                @php
                    // Modulus to repeat colors
                    $colorClass = 'bg-color-' . ($index % 6);
                @endphp
                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
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