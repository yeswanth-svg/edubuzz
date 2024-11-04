@extends('layouts.admin')

@section('content')

<style>
    /* Responsive layout for charts */
    .chart-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 20px;
    }

    .chart-container {
        padding: 20px;
        box-sizing: border-box;
    }
</style>

<div class="flex flex-col flex-1">
    <header class="bg-white shadow py-4 px-6 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-800">Dashboard</h2>
        <button class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</button>
        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="hidden">
            @csrf
        </form>
    </header>

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

        <div class="chart-grid">

            <!-- Doughnut Chart: Subjects with Topics -->
            <div class="chart-container bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Subjects Overview</h3>
                <canvas id="subjectsChart"></canvas>
            </div>

            <!-- Bar Chart: Topics with Subtopics -->
            <div class="chart-container bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Topics Overview</h3>
                <canvas id="topicsChart"></canvas>
            </div>

            <!-- Radar Chart: Subtopics with Worksheets -->
            <div class="chart-container bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold mb-4">Subtopics Overview</h3>
                <canvas id="subtopicsChart"></canvas>
            </div>

        </div>
    </main>
</div>

<script>
    // Data from Controller
    const subjectsData = @json($subjectsOverview);
    const topicsData = @json($topicsOverview);
    const subtopicsData = @json($subtopicsOverview);

    // Subjects Doughnut Chart
    const subjectsLabels = subjectsData.map(subject => subject.name);
    const subjectsCounts = subjectsData.map(subject => subject.topic_count);
    new Chart(document.getElementById('subjectsChart').getContext('2d'), {
        type: 'doughnut',
        data: {
            labels: subjectsLabels,
            datasets: [{
                data: subjectsCounts,
                backgroundColor: ['#4F46E5', '#F59E0B', '#10B981', '#EF4444', '#3B82F6', '#8B5CF6', '#F472B6']
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'bottom' } },
            cutout: '60%'
        }
    });

    // Topics Bar Chart
    const topicsLabels = topicsData.map(topic => topic.name);
    const topicsCounts = topicsData.map(topic => topic.subtopic_count);
    new Chart(document.getElementById('topicsChart').getContext('2d'), {
        type: 'bar',
        data: {
            labels: topicsLabels,
            datasets: [{
                data: topicsCounts,
                backgroundColor: 'rgba(99, 102, 241, 0.7)',
                borderColor: 'rgba(99, 102, 241, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Subtopics Radar Chart
    const subtopicsLabels = subtopicsData.map(subtopic => subtopic.name);
    const subtopicsCounts = subtopicsData.map(subtopic => subtopic.worksheet_count);
    new Chart(document.getElementById('subtopicsChart').getContext('2d'), {
        type: 'radar',
        data: {
            labels: subtopicsLabels,
            datasets: [{
                label: 'Worksheets',
                data: subtopicsCounts,
                backgroundColor: 'rgba(16, 185, 129, 0.3)',
                borderColor: 'rgba(16, 185, 129, 1)',
                borderWidth: 2,
                pointBackgroundColor: 'rgba(16, 185, 129, 1)'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { position: 'top' } },
            scales: { r: { beginAtZero: true } }
        }
    });
</script>

@endsection