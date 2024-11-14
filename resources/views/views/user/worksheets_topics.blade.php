@extends('layouts.apps')
@section('title', 'Worksheets By Topics')

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

<h1 class="text-center mb-4" style="color: #FF5733;">Fun Learning Topics</h1>

<style>

 .page-banner {
        height: 300px;
        overflow: hidden;
        margin-bottom: 10px;
    }
    /* Main container styling */
    .worksheets-by-topic {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Subject section styling */
    .subject-section {
        border: 2px dashed #ffbf00;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        background-color: #ffefc5;
        transition: transform 0.3s ease;
    }

    .subject-section:hover {
        transform: translateY(-5px) rotate(-2deg);
        background-color: #fff1b0;
    }

    /* Subject name styling */
    .subject-name {
        font-size: 26px;
        font-weight: bold;
        color: #4A90E2;
        margin-bottom: 20px;
    }

    /* Topic card styling */
    .topic-options {
        display: flex;
        justify-content: flex-start;
        gap: 10px;
        flex-wrap: wrap;
    }

    .topic-card {
        background-color: #ffe6e6;
        padding: 15px;
        border-radius: 10px;
        min-width: 150px;
        text-align: center;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .topic-card:hover {
        background-color: #ffd1dc;
        transform: translateY(-4px) rotate(1deg);
    }

    /* Topic link styling */
    .topic-link {
        text-decoration: none;
        font-weight: bold;
        color: #ff4081;
        font-size: 16px;
    }

    .topic-link:hover {
        color: #d6336c;
    }

    /* Responsive Design for Small Screens */
    @media (max-width: 767px) {
        .subject-section {
            padding: 15px;
        }

        .subject-name {
            font-size: 22px;
        }

        .topic-card {
            min-width: 120px;
        }
        
          .page-banner {
            height: 128px !important;
            overflow: hidden;
            margin-bottom: 10px;
        }
    }
</style>

<section class="worksheets-by-topic">
    <!-- Group topics by subject name and display -->
    @foreach ($uniqueTopics->groupBy('subject.name') as $subjectName => $topicGroup)
        <div class="subject-section">
            <!-- Subject Name Heading -->
            <div class="subject-name text-center">
                📚 {{ $subjectName }}
            </div>

            <!-- Topic cards for each subject -->
            <div class="topic-options">
                @foreach ($topicGroup as $topic)
                    <div class="topic-card">
                        <a href="{{route('through_worksheets_by_topics', $topic->id)}}" class="topic-link">
                            🎈 {{ $topic->name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</section>

@endsection