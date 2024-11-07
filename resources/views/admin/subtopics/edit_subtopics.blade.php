@extends('layouts.admin')

@section('title', 'Edit Subtopics')

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

    <form action="{{ route('admin.subtopics.update', $subtopic->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Spoofing the PUT method -->

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Subtopic Name</label>
            <input type="text" name="name" id="name" class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                value="{{ old('name', $subtopic->name) }}" required>
        </div>

        <div class="mb-4">
            <label for="grade_id" class="block text-gray-700">Select Topic</label>
            <select name="topic_id" id="grade_id" class="mt-1 block w-full border border-gray-300 rounded-lg p-2"
                required>
                <option value="">Select a Topic</option>
                @foreach ($topics as $topic)
                    <option value="{{ $topic->id }}" {{ $subtopic->topic_id == $topic->id ? 'selected' : '' }}>
                        {{ $topic->name . '-' . $topic->subject->name . '-' . $topic->subject->grade->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="name" class="block text-gray-700">Previous Thumbnail</label>
            <img src="{{ asset($subtopic->thumbnail) }}" class="w-50 h-20 object-cover text-center ">
        </div>

        <div class="mb-4">
            <label class="text-base text-dark-bolder font-bold font-semibold mb-2 block">Upload Thumbnail</label>
            <input type="file" name="thumbnail"
                class="w-full text-gray-400 font-semibold text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-3 file:px-4 file:mr-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-gray-500 rounded"
                accept="image/png, image/jpeg, image/jpg,  image/webp, image/gif" />
            <p class="text-xs text-gray-600 mt-2"><span class="text-red-500 font-bold">*</span>PNG, JPG SVG,
                WEBP, and GIF are Allowed.</p>
        </div>



        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update
            topic</button>
    </form>
</div>
@endsection