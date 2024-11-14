@extends('layouts.admin')

@section('title', 'Manage Worksheets')

@section('content')

<div class="flex flex-col flex-1 p-6">

    <header class="flex justify-between items-center mb-6">
        <div class="flex space-x-4">
            <!-- Go Back Button -->
            <a href="{{ route('admin.subtopics.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                <i class="fa fa-arrow-left text-danger-300" aria-hidden="true"></i>
            </a>

            <h2 class=" text-2xl font-semibold text-gray-800">Worksheets for Subtopic: {{ $subtopic->name }}</h2>
        </div>

        <!-- Add New Worksheets Button -->
        <a href="{{ route('admin.worksheets.create', $subtopic->id) }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Add New Worksheet</a>
    </header>


    <!-- Grades Table -->
    <div class="bg-white shadow  border border-black-300 p-6">
        <table id="gradesTable" class="display w-full border-collapse border border-black-300">
            <thead class="bg-black-100">
                <tr>
                    <th class="border border-black-300">ID</th>
                    <th class="border border-black-300">Subtopic Name</th>
                    <th class="border border-black-300">Worksheet Name</th>
                    <th class="border border-black-300">Thumbnail</th>
                    <th class="border border-black-300">File Path</th>
                    <th class="border border-black-300">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($worksheets as $worksheet)
                    <tr>
                        <td class="border border-black-300">{{ $worksheet->id }}</td>
                        <td class="border border-black-300">{{ $worksheet->subtopic->name }}</td>
                        <td class="border border-black-300">{{ $worksheet->name }}</td>
                        <td class="border border-black-300">
                            <img src="{{ asset($worksheet->thumbnail) }}" class="w-20 h-20 object-cover text-center ">
                        </td>
                        <td class="border border-black-300">
                            <a href="{{ asset($worksheet->file_path) }}" target="_blank"
                                class="text-blue-500 hover:underline">
                                {{ basename($worksheet->file_path) }}
                            </a>
                        </td>

                        <td class="flex space-x-5">
                            <a href="{{ route('admin.worksheets.edit', ['subtopicId' => $subtopic->id, 'id' => $worksheet->id]) }}"
                                class="bg-yellow-100 text-yellow-500 hover:bg-yellow-200 hover:text-yellow-600 p-2 rounded-lg">
                                <i class="fas fa-pencil" style="font-size:25px"></i>
                            </a>
                            <form id="delete-form-{{ $worksheet->id }}"
                                action="{{ route('admin.worksheets.destroy', ['subtopicId' => $worksheet->subtopic_id, 'id' => $worksheet->id]) }}"
                                method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete({{ $worksheet->id }})"
                                    class="bg-red-100 text-red-500 hover:bg-red-200 hover:text-red-600 p-2 rounded-lg">
                                    <i class="fas fa-trash" style="font-size:25px"></i>
                                </button>
                            </form>
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
                searchPlaceholder: "Search Worksheets",
                search: "",
            }
        });
    });

    function confirmDelete(worksheetId) {
        Swal.fire({
            title: 'Are you sure?',
            text: "Do you want to delete this worksheet?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + worksheetId).submit();
            }
        });
    }
</script>
@endsection