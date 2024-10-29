@extends('layouts.admin')
@section('title', 'Manage Subjects')
@section('content')
<div class="flex flex-col flex-1 p-6">

    <header class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-semibold text-gray-800">Manage Subjects</h2>
        <a href="{{ route('admin.subjects.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Add Subject</a>
    </header>



    <!-- Grades Table -->
    <div class="bg-white shadow  border border-black-300 p-6">
        <table id="gradesTable" class="display w-full border-collapse border border-black-300">
            <thead class="bg-black-100">
                <tr>
                    <th class="border border-black-300">ID</th>
                    <th class="border border-black-300">Grade</th>
                    <th class="border border-black-300">Name</th>
                    <th class="border border-black-300">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($subjects as $subject)
                    <tr>
                        <td class="border border-black-300">{{ $subject->id }}</td>
                        <td class="border border-black-300">{{ $subject->grade->name }}</td>
                        <td class="border border-black-300">{{ $subject->name }}</td>
                        <td class="flex space-x-5 border border-black-300 mb-1">
                            <a href="{{ route('admin.subjects.edit', $subject->id) }}"
                                class="bg-yellow-100 text-yellow-500 hover:bg-yellow-200 hover:text-yellow-600 p-2 rounded-lg"
                                style="position: relative; top: 0; left: 44%; transform: translate(-50%);">
                                <i class="fas fa-pencil" style="font-size:25px"></i>
                            </a>

                            <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST" class="inline"
                                style="position: relative; top: 0; left: 44%; transform: translate(-50%);">
                                @csrf
                                @method('DELETE')
                                <button type=" submit"
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
                searchPlaceholder: "Search Subjects",
                search: "",
            }
        });
    });
</script>

@endsection