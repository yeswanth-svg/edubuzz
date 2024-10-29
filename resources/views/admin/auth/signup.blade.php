<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
        <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Admin Signup</h2>

        <form action="{{ route('admin.signup') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Password</label>
                <input type="password" name="password" class="w-full p-2 border border-gray-300 rounded mt-1" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600">Confirm Password</label>
                <input type="password" name="password_confirmation"
                    class="w-full p-2 border border-gray-300 rounded mt-1" required>
                @error('password_confirmation')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white p-2 rounded">Sign Up</button>

            <p class="mt-4 text-sm text-center">
                Already have an account? <a href="{{ route('admin.login') }}" class="text-blue-500 hover:underline">Log
                    in</a>
            </p>
        </form>
    </div>

</body>

</html>