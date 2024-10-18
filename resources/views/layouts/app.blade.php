<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <!-- Tailwind CSS dari CDN -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>

<!-- Header Section -->
<div class="flex items-center justify-between py-4 px-8 shadow-md bg-gray-300">
    <div>
        <h1 class="text-3xl font-bold text-teal-600 ">HIMSI</h1>
        <p class="text-gray-500 italic">Practice makes Perfect</p>
    </div>
    <div>
        <ul class="flex space-x-8 text-gray-600">
            <li><a href="#" class="hover:text-gray-800">Home</a></li>
            <li><a href="#" class="hover:text-gray-800">About</a></li>
            <li><a href="#" class="hover:text-gray-800">Contact</a></li>
            <li><a href="shorten" class="hover:text-gray-800">URLShortener</a></li>
            <div class="mt-4 md:mt-0">
                            <a href="{{ url('/login') }}" class="bg-blue-900 text-white px-4 py-2 ml-0 rounded-md">Login</a>
                            <!-- <a href="{{ url('/register') }}" class="bg-blue-900 text-white px-4 py-2 rounded-md">Register</a> -->
                        </div>
                    </div>
        </ul>
    </div>
</div>


<!-- Main Content -->
<main class="bg-gray-100 min-h-screen py-8">
    @yield('content')
</main>

<!-- Footer (Opsional) -->
<footer class="text-center py-4 text-gray-600">
    &copy; 2024 HIMSI All rights reserved.
</footer>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
