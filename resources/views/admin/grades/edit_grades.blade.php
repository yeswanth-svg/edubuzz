@extends('layouts.admin')
@section('content')

<div class="flex flex-col flex-1 p-6">
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Edit Grade</h2>
    </header>

    <form action="{{ route('admin.grades.update', $grade->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-dark-300 font-bold">Grade Name</label>
            <input
                class="appearance-none block w-full bg-light-200 text-dark-700 border border-black-900 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                id="grid-first-name" type="text" name="name" value="{{ old('name', $grade->name) }}">

            @error('name')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Update
            Grade</button>
    </form>
</div>
@endsection