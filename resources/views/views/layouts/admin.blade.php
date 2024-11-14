<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    
      <!-- Favicon -->
    <link href="{{asset('favicon.gif')}}" rel="icon" />
    
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="bg-gray-800 text-white w-64 p-6 hidden lg:block">
            <h1 class="text-3xl font-bold text-center mb-6">Admin Dashboard</h1>
            <nav>
                <a href="{{ route('admin.dashboard') }}" class="block p-2 text-gray-300 hover:bg-gray-700 rounded mt-4">
                    <i class="fas fa-tachometer-alt w-6 h-6"></i> Dashboard</a>
                <a href="{{ route('admin.grades.index') }}"
                    class="block p-2 text-gray-300 hover:bg-gray-700 rounded mt-4">
                    <i class="fas fa-graduation-cap w-6 h-6"></i> Grades</a>
                <a href="{{ route('admin.subjects.index') }}"
                    class="block p-2 text-gray-300 hover:bg-gray-700 rounded mt-4"><i class="fas fa-book w-6 h-6"></i>
                    Subjects</a>
                <a href="{{ route('admin.topics.index') }}"
                    class="block p-2 text-gray-300 hover:bg-gray-700 rounded mt-4"> <i
                        class="fas fa-file-alt w-6 h-6"></i>Topics</a>
                <a href="{{ route('admin.subtopics.index') }}"
                    class="block p-2 text-gray-300 hover:bg-gray-700 rounded mt-4">
                    <i class="fas fa-list w-6 h-6"></i>
                    Subtopics</a>


                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="inline">
                    @csrf
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="block p-2 text-gray-300 hover:bg-gray-700 rounded mt-4">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
                </form>
            </nav>
        </aside>

        @yield('content')

        @if(session('message'))
            <script>
                Toastify({
                    text: "{{ session('message') }}",
                    duration: 3000, // Duration in milliseconds
                    gravity: "top", // `top` or `bottom`
                    position: 'center', // `left`, `center` or `right`
                    backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)", // Customize background color
                }).showToast();
            </script>
        @endif

    </div>


</body>

</html>