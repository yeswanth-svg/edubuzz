<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Password Update</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50 flex items-center justify-center min-h-screen">

    <section class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full space-y-8">

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <header>
            <h2 class="text-2xl font-semibold text-gray-900 text-center">Forgot Password</h2>
            <p class="mt-2 text-sm text-gray-600">Ensure your account is secured with a strong password.</p>
        </header>

        <form method="post" action="{{ route('admin.password.reset') }}" class="space-y-6">
            @csrf
            @method('put')

            <div>
                <label for="update_password_email" class="block text-sm font-medium text-gray-700">Email Address</label>
                <input type="email" id="update_password_email" name="email"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required autofocus autocomplete="email" />
                @error('email')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="update_password_password" class="block text-sm font-medium text-gray-700">New
                    Password</label>
                <input type="password" id="update_password_password" name="password"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required autocomplete="new-password" />
                @error('password')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="update_password_password_confirmation"
                    class="block text-sm font-medium text-gray-700">Confirm New Password</label>
                <input type="password" id="update_password_password_confirmation" name="password_confirmation"
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required autocomplete="new-password" />
                @error('password_confirmation')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit"
                    class="w-full px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Save Changes
                </button>

            </div>

        </form>
        <p class="mt-4 text-sm text-right">
            <a href="{{ route('admin.login') }}" class="text-blue-500 hover:underline">If Remembered Login?</a>
        </p>
    </section>

</body>

</html>