@extends('layouts.admin')

@section('content')

<style>
    #subjectsChart {
        width: 100% !important;
        /* Takes full container width */
        max-width: 500px;
        /* Sets a maximum width */
        height: 500px !important;
        /* Controls the height */
        box-sizing: border-box;
        /* Ensures padding is included */
    }

    .chart-container {
        max-width: 600px;
        width: 100%;
        margin: auto;
        overflow: hidden;
        padding: 20px;
        box-sizing: border-box;
    }
</style>

<!-- Main Content -->
<div class="flex flex-col flex-1">

    <!-- Top Navigation -->
    <header class="bg-white shadow py-4 px-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </header>

    <!-- Dashboard Content -->
    <main class="p-6 bg-gray-100 flex-1 overflow-y-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 rounded-lg">

            <!-- Card: Total Grades -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <img src="{{asset('build/svgs/grades.svg')}}">
                <div>
                    <h3 class="font-semibold text-lg">Total Grades</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_grades}}</p>
                </div>
            </div>

            <!-- Card: Total Subjects -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <img src="{{asset('build/svgs/subject.svg')}}">
                <div>
                    <h3 class="font-semibold text-lg">Total Subjects</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_subjects}}</p>
                </div>
            </div>

            <!-- Card: Total Topics -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <img src="{{asset('build/svgs/topics.svg')}}">
                <div>
                    <h3 class="font-semibold text-lg">Total Topics</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_topics}}</p>
                </div>
            </div>
            <!-- Card: Total Subtopics -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <img src="{{asset('build/svgs/subtopics.svg')}}">
                <div>
                    <h3 class="font-semibold text-lg">Total Subtopics</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_subtopics}}</p>
                </div>
            </div>
            <!-- Card: Total worksheets  -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <img src="{{asset('build/svgs/worksheets.svg')}}">
                <div>
                    <h3 class="font-semibold text-lg">Total Worksheets</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_worksheets}}</p>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="chart-container bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4">Subjects Overview</h3>
            <canvas id="subjectsChart"></canvas>
        </div>
    </main>
</div>


<script>
    // Pass PHP data to JavaScript
    const subjectsData = @json($subjectsOverview);

    // Extract labels and data from subjectsData
    const labels = subjectsData.map(subject => subject.name);
    const data = subjectsData.map(subject => subject.topic_count);

    // Colors for the doughnut chart
    const backgroundColors = [
        'rgba(59, 130, 246, 0.6)', // Blue
        'rgba(99, 102, 241, 0.6)', // Indigo
        'rgba(34, 197, 94, 0.6)',  // Green
        'rgba(251, 191, 36, 0.6)', // Yellow
        'rgba(244, 114, 182, 0.6)',// Pink
        'rgba(56, 189, 248, 0.6)', // Sky
        'rgba(252, 165, 165, 0.6)',// Red
        'rgba(163, 163, 163, 0.6)' // Gray
    ];

    // Chart.js Doughnut Chart
    const ctx = document.getElementById('subjectsChart').getContext('2d');
    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                label: 'Number of Topics',
                data: data,
                backgroundColor: backgroundColors,
                hoverBackgroundColor: backgroundColors.map(color => color.replace('0.6', '0.8')),
                borderWidth: 2,
                borderColor: '#fff',
                hoverOffset: 8 // Creates a subtle pop-out effect on hover
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'bottom',
                    labels: {
                        font: { family: 'Arial, sans-serif', weight: 'bold', size: 12 },
                        color: '#4B5563', // Gray color for legend text
                        padding: 20
                    }
                },
                tooltip: {
                    backgroundColor: 'rgba(75, 85, 99, 0.9)', // Darker tooltip
                    titleFont: { weight: 'bold' },
                    bodyFont: { size: 12 },
                    padding: 12,
                    borderColor: 'rgba(37, 99, 235, 0.5)',
                    borderWidth: 1,
                }
            },
            layout: {
                padding: { top: 10, left: 10, right: 10, bottom: 10 }
            },
            cutout: '70%', // Makes the doughnut chart center more visible for a modern look
        }
    });
</script>

@endsection