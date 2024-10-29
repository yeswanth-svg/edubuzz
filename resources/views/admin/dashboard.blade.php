@extends('layouts.admin')

@section('content')

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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 mb-6">
            <!-- Card: Total Grades -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <i class="fas fa-star text-yellow-500 mr-3" style="font-size: 24px;"></i>
                <div>
                    <h3 class="font-semibold text-lg">Total Grades</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_grades}}</p>
                </div>
            </div>

            <!-- Card: Total Subjects -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <i class="fas fa-star text-yellow-500 mr-3" style="font-size: 24px;"></i>
                <div>
                    <h3 class="font-semibold text-lg">Total Subjects</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_subjects}}</p>
                </div>
            </div>

            <!-- Card: Total Topics -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <i class="fas fa-star text-yellow-500 mr-3" style="font-size: 24px;"></i>
                <div>
                    <h3 class="font-semibold text-lg">Total Topics</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_topics}}</p>
                </div>
            </div>
            <!-- Card: Total Subtopics -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <i class="fas fa-star text-yellow-500 mr-3" style="font-size: 24px;"></i>
                <div>
                    <h3 class="font-semibold text-lg">Total Subtopics</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_subtopics}}</p>
                </div>
            </div>
            <!-- Card: Total worksheets  -->
            <div class="bg-white p-4 rounded-lg shadow text-gray-800 flex items-center">
                <i class="fas fa-star text-yellow-500 mr-3" style="font-size: 24px;"></i>
                <div>
                    <h3 class="font-semibold text-lg">Total Worksheets</h3>
                    <p class="text-3xl font-bold mt-2">{{$total_worksheets}}</p>
                </div>
            </div>
        </div>

        <!-- Chart Section -->
        <div class="bg-white p-6 rounded-lg shadow">
            <h3 class="text-lg font-semibold mb-4">Subjects Overview</h3>
            <canvas id="subjectsChart" class="w-full h-64"></canvas>
        </div>
    </main>
</div>

@endsection