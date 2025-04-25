<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <title>Login - MiTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        mitech: '#2978B6'
                    }
                }
            }
        };
    </script>
</head>
<body class="bg-gray-100 dark:bg-gray-900 flex items-center justify-center min-h-screen px-4">

    <div class="w-full max-w-md bg-white dark:bg-gray-800 shadow-lg rounded-xl p-8 space-y-6 transform transition-all duration-500 animate-fadeIn">
        <div class="flex justify-center">
            <img src="{{ asset('images/logo.jpg') }}" alt="MiTech Logo" class="w-24 h-24 transition-all hover:scale-105 duration-300">
        </div>

        <h2 class="text-center text-2xl font-bold text-mitech dark:text-white">Welcome to MiTech</h2>

        @if(session('status'))
            <div class="bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300 p-3 rounded">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                <input id="email" type="email" name="email" required autofocus
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-mitech focus:border-mitech">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Password</label>
                <input id="password" type="password" name="password" required
                    class="mt-1 block w-full px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-mitech focus:border-mitech">
            </div>

            <div class="flex items-center justify-between">
                <label class="flex items-center text-gray-600 dark:text-gray-300">
                    <input type="checkbox" name="remember" class="form-checkbox text-mitech">
                    <span class="ml-2 text-sm">Remember me</span>
                </label>
                @if (Route::has('password.request'))
                    <a class="text-sm text-mitech hover:underline" href="{{ route('password.request') }}">
                        Forgot Password?
                    </a>
                @endif
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-mitech text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                    Login
                </button>
            </div>
        </form>
        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Sign Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
    </div>

    <style>
        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(15px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .animate-fadeIn {
            animation: fadeIn 0.8s ease-out;
        }
    </style>

</body>
</html>