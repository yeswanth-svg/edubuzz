@extends('layouts.admin')

@section('title', 'Edit Worksheets')

@section('content')

<div class="flex flex-col flex-1 p-6">
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Edit Subtopic</h2>
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

    <form action="{{ route('admin.worksheets.update', $worksheet->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Spoofing the PUT method -->

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Worksheet Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                value="{{ old('name', $worksheet->name) }}" required>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Worksheet Description</label>
            <textarea type="text" name="description" id="name"
                class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                required>{{ old('description', $worksheet->description) }}</textarea>
        </div>


        <div class="mb-4">
            <label for="name" class="block text-gray-700">Previous Thumbnail</label>
            <img src="{{ asset($worksheet->thumbnail) }}" class="w-50 h-20 object-cover text-center ">
        </div>

        <div class="mb-4">
            <label class="text-base text-dark-bolder font-bold font-semibold mb-2 block">Upload Thumbnail</label>
            <input type="file" name="thumbnail"
                class="w-full text-gray-400 font-semibold text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-3 file:px-4 file:mr-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-gray-500 rounded" />
            <p class="text-xs text-gray-600 mt-2"><span class="text-red-500 font-bold">*</span>PNG, JPG SVG,
                WEBP, and GIF are Allowed.</p>
        </div>

        <div class="mb-4">
            <label for="file" class="block text-dark-300 font-bold">PDF File</label>
            <input type="file" name="file_path" id="file" accept="application/pdf"
                class="mt-1 block w-full border border-gray-300 rounded-lg p-2">
            <p class="mt-2">Current File: <a href="{{ asset($worksheet->file_path) }}"
                    target="_blank">{{ basename($worksheet->file_path) }}</a></p>
            @if($worksheet->file_path)
                <h3 class="mt-4">PDF Preview:</h3>
                <iframe src="{{ asset($worksheet->file_path) }}" style="width: 100%; height: 500px;"
                    frameborder="0"></iframe>
            @endif
        </div>


        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update
            Worksheet</button>
    </form>
</div>

<!-- <div class="container mx-auto p-6">
    <header class="mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Edit Worksheet</h2>
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

    <form action="{{ route('admin.worksheets.update', $worksheet->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="worksheets" class="block text-gray-700">Replace Worksheet (PDF format)</label>
            <input type="file" name="worksheet" id="worksheet"
                class="mt-1 block w-full border border-gray-300 rounded-lg p-2" accept="application/pdf">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Update Worksheet
        </button>
    </form>
</div> -->
@endsection