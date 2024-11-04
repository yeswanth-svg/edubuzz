@extends('layouts.apps')
@section('title', 'Worksheets By Subjects')

@section('content')
<style>
    /* Container for the card grid */
    .card-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        padding: 40px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Card styling */
    .subject-card {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        color: #333;
        /* Default text color */
        text-align: center;
        background-color: #f9f9f9;
        /* Light default background color */
    }

    /* Hover effect */
    .subject-card:hover {
        color: #fff;
        /* Change text color to white on hover */
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

<h1 class="text-center" style="color: #FF5733; font-family: 'Comic Sans MS', cursive;">Worksheets for Subjects!</h1>

<div class="card-grid">
    @foreach($subjects as $index => $subject)
        @php
            // Select hover color based on the index, cycling through the array
            $hoverColor = $hoverColors[$index % count($hoverColors)];
        @endphp
        <div class="subject-card" style="--hover-bg-color: {{ $hoverColor }};">
            <h3 class="title">{{ $subject->name }}</h3>
        </div>
    @endforeach
</div>

@endsection