@extends('layouts.admin')

@section('title', 'Add Worksheets')

@section('content')

<div class="flex flex-col flex-1 p-6">

    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Add Worksheets for Subtopic: {{ $subtopic->name }}</h2>
    </header>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded-lg mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Loader overlay -->
    <div id="loader" class="hidden fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-75 z-50">
        <div class="text-center text-white">
            <svg class="animate-spin h-10 w-10 text-white mb-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8h8a8 8 0 01-8 8z"></path>
            </svg>
            <p>Please wait while we upload the files...</p>
        </div>
    </div>

    <form action="{{ route('admin.worksheets.store', $subtopic->id) }}" method="POST" enctype="multipart/form-data"
        onsubmit="showLoader()">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-dark-bolder font-bold">Worksheet Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                value="{{ old('name') }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-dark-bolder font-bold">Worksheet Description</label>
            <textarea name="description" id="description"
                class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                required>{{ old('description') }}</textarea>
        </div>

        <div class="mb-4">
            <label class="text-base text-dark-bolder font-bold font-semibold mb-2 block">Upload Thumbnail</label>
            <input type="file" name="thumbnail"
                class="w-full text-gray-400 font-semibold text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-3 file:px-4 file:mr-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-gray-500 rounded"
                accept="image/png, image/jpeg, image/jpg, image/webp, image/gif" />
            <p class="text-xs text-gray-600 mt-2"><span class="text-red-500 font-bold">*</span> PNG, JPG, WEBP, and GIF
                are allowed.</p>
        </div>

        <div class="mb-4">
            <label for="worksheets" class="block text-gray-700">Upload Worksheets (PDF format)</label>
            <input type="file" name="worksheets[]" id="worksheets"
                class="mt-1 block w-full border border-gray-300 rounded-lg p-2" accept="application/pdf" multiple
                required>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add
            Worksheet</button>
    </form>
</div>

<!-- JavaScript to display the loader -->
<script>
    function showLoader() {
        document.getElementById('loader').classList.remove('hidden');
    }
</script>

@endsection