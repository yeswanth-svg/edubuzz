@extends('layouts.apps')
@section('title', 'Worksheets By Subjects')

@section('content')
<style>
    /* Card styling */
    .subject-card {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: #333;
        text-align: center;
        background-color: #f9f9f9;
    }

    /* Hover effect */
    .subject-card:hover {
        color: #fff;
        transform: translateY(-10px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    /* Change background color on hover */
    .subject-card:hover {
        background-color: var(--hover-bg-color);
    }

    /* Subject title */
    .subject-card .title {
        font-size: 20px;
        font-weight: bold;
        margin: 0;
    }
</style>

@php
    // Array of light colors to use on hover
    $hoverColors = ['#d4e6fb', '#e0f7fa', '#ffe6b3', '#fde2e4', '#e7e4f9', '#fcefe1', '#ffecb3'];
@endphp

<h1 class="text-center mt-5 mb-3" style="color: #FF5733; font-family: 'Comic Sans MS', cursive;">Worksheets for
    Subjects!</h1>

<div class="container my-5 pb-5">
    <div class="row">
        @foreach($subjects as $index => $subject)
                @php
                    // Select hover color based on the index, cycling through the array
                    $hoverColor = $hoverColors[$index % count($hoverColors)];
                @endphp
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="subject-card" style="--hover-bg-color: {{ $hoverColor }};">
                        <a href="{{route('through_worksheets_by_subjects', $subject->name)}}">
                            <h3 class="title">{{ $subject->name }}</h3>
                        </a>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@endsection