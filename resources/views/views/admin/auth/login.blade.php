<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">Admin Login</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.login') }}" method="POST">
            @csrf

            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full p-3 border border-gray-300 rounded-lg mt-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"
                    required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-5">
                <label class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" name="password"
                    class="w-full p-3 border border-gray-300 rounded-lg mt-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:outline-none"
                    required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold p-3 rounded-lg transition duration-200">Login</button>

            <div class="flex justify-between mt-6">
                <a href="{{ route('admin.password.reset') }}"
                    class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center space-x-1">
                    <span>Forgot Password?</span>
                </a>
                <a href="{{ route('admin.signup') }}"
                    class="text-blue-600 hover:text-blue-800 text-sm font-medium flex items-center space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <span>Sign up</span>
                </a>
            </div>
        </form>
    </div>

</body>

</html>