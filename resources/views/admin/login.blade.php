<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-900">
    <div class="w-full max-w-md bg-gray-800 rounded-2xl shadow-lg p-8">
        <h1 class="text-2xl font-bold text-center text-white mb-6">Login Admin</h1>

        <!-- Error Message -->
        @if($errors->any())
            <div class="mb-4 p-3 rounded-lg bg-red-500 text-white text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-4">
            @csrf

            <div>
                <label class="block text-gray-300 text-sm mb-1">Email</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <div>
                <label class="block text-gray-300 text-sm mb-1">Password</label>
                <input type="password" name="password" placeholder="Password"
                    class="w-full px-4 py-2 rounded-lg bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                    required>
            </div>

            <button type="submit"
                class="w-full py-2 px-4 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <!-- Optional: Tambah link -->
        <p class="text-gray-400 text-sm text-center mt-6">
            Lupa password? <a href="#" class="text-blue-400 hover:underline">Reset</a>
        </p>
    </div>
</body>
</html>
