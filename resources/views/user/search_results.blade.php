@extends('layouts.apps')

@section('title', 'Search Results')

@section('content')
<div class="container my-5">
    <h1 class="text-center">Search Results for "{{ $query }}"</h1>

    @if($results->isEmpty())
        <p class="text-center">No results found for "{{ $query }}".</p>
    @else
        <div class="row">
            @foreach($results as $result)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <a href="{{ route('through_grades_topic_subtopic_worksheets', $result->id) }}" class="text-decoration-none">
                        <div class="search-result-box text-center p-3"
                            style="box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: transform 0.2s;">
                            <img src="{{ asset($result->thumbnail) }}" class="w-80 mb-3" alt="{{ $result->name }}"
                                style="border-radius: 8px;">
                            <h6 class="text-dark">{{ Str::limit($result->name, 15)}}</h6>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</div>

<style>
    .search-result-box:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .search-result-box {
            padding: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .search-result-box {
            padding: 1rem;
        }
    }
</style>
@endsection