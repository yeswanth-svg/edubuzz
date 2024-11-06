@extends('layouts.admin')

@section('title', 'Manage Subtopics')

@section('content')
<div class="flex flex-col flex-1 p-6">

    <header class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Manage Subtopics</h2>
        <a href="{{ route('admin.subtopics.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Add Subtopics</a>
    </header>



    <!-- Grades Table -->
    <div class="bg-white shadow  border border-black-300 p-6">
        <table id="gradesTable" class="display w-full border-collapse border border-black-300">
            <thead class="bg-black-100">
                <tr>
                    <th class="border border-black-300">ID</th>
                    <th class="border border-black-300">Grade Name</th>
                    <th class="border border-black-300">Subject Name</th>
                    <th class="border border-black-300">Topic Name</th>
                    <th class="border border-black-300">Subtopic Name</th>
                    <th class="border border-black-300">Thumbnail</th>
                    <th class="border border-black-300">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($subtopics as $subtopic)
                    <tr>
                        <td class="border border-black-300">{{ $subtopic->id }}</td>
                        <td class="border border-black-300">{{ $subtopic->topic->subject->grade->name  }}</td>
                        <td class="border border-black-300">{{ $subtopic->topic->subject->name }}</td>
                        <td class="border border-black-300">{{ $subtopic->topic->name }}</td>
                        <td class="border border-black-300">{{ $subtopic->name }}</td>
                        <td class="border border-black-300">
                            <img src="{{ asset($subtopic->thumbnail) }}" class="w-20 h-20 object-cover text-center ">
                        </td>
                        <td class="flex space-x-5">
                            <a href="{{ route('admin.subtopics.edit', $subtopic->id) }}"
                                class="bg-yellow-100 text-yellow-500 hover:bg-yellow-200 hover:text-yellow-600 p-2 rounded-lg">
                                <i class="fas fa-pencil" style="font-size:20px"></i>
                            </a>
                            <form id="delete-form-{{$subtopic->id}}"
                                action="{{ route('admin.subtopics.destroy', $subtopic->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $subtopic->id }})"
                                    class="bg-red-100 text-red-500 hover:bg-red-200 hover:text-red-600 p-2 rounded-lg">
                                    <i class="fas fa-trash" style="font-size:20px"></i>
                                </button>
                            </form>
                            <a href="{{ route('admin.worksheets.index', $subtopic->id) }}"
                                class="bg-blue-300 text-dark px-4 py-2 rounded hover:bg-blue-500">
                                View / Add Worksheets
                            </a>



                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>




<script>
    $(document).ready(function () {
        $('#gradesTable').DataTable({
            // Optional: Configure DataTables here
            responsive: true,
            language: {
                searchPlaceholder: "Search Subtopics",
                search: "",
            }
        });
    });


    function confirmDelete(subtopicId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to delete this subtopic?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + subtopicId).submit();
            }
        });
    }
</script>

@endsection