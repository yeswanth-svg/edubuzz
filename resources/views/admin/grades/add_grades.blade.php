@extends('layouts.admin')
@section('content')

<div class="flex flex-col flex-1 p-6">
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Add Grade</h2>
    </header>

    <form action="{{ route('admin.grades.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-dark-300 font-bold">Grade Name</label>
            <input
                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-black-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                type="text" placeholder="Grade 1" name="name">
            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Add
            Grade</button>
    </form>
</div>
@endsection