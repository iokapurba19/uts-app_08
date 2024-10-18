<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Menggunakan TailwindCSS dari CDN -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <a href="login">LOGIN</a>
    <div class="max-w-3xl mx-auto p-6 border border-gray-300 shadow-lg bg-white mt-10">
        <!-- Card mata kuliah -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105" onclick="location.href='{{ url('/materi') }}'">
            <h2 class="text-xl font-semibold">PEMVIS</h2>
            <div class="mt-3">
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
                    <!-- Materi 1 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Solution Modeling</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video1" class="text-blue-600 hover:text-blue-800">Video 1</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video2" class="text-blue-600 hover:text-blue-800">Video 2</a></li>
                        </ul>
                    </div>
                    <!-- Materi 2 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Materi 2</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video3"
                                    class="text-blue-600 hover:text-blue-800">Video 3</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video4"
                                    class="text-blue-600 hover:text-blue-800">Video 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card untuk Mata Kuliah PEMPROS -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105"
            onclick="location.href='{{ url('tut2/mata_kuliah.html?matkul=2') }}'">
            <h2 class="text-xl font-semibold">PBO</h2>
            <div class="mt-3">
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
                    <!-- Materi 1 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Procedural Programming <br>LifeCycle</br></h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video5"
                                    class="text-blue-600 hover:text-blue-800">Video 5</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video6"
                                    class="text-blue-600 hover:text-blue-800">Video 6</a></li>
                        </ul>
                    </div>
                    <!-- Materi 2 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Materi 2</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video7"
                                    class="text-blue-600 hover:text-blue-800">Video 7</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video8"
                                    class="text-blue-600 hover:text-blue-800">Video 8</a></li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card untuk Mata Kuliah PBO -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105"
            onclick="location.href='{{ url('tut2/mata_kuliah.html?matkul=2') }}'">
            <h2 class="text-xl font-semibold">PBO</h2>
            <div class="mt-3">
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
                    <!-- Materi 1 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Software Development <br>LifeCycle</br></h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video5"
                                    class="text-blue-600 hover:text-blue-800">Video 5</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video6"
                                    class="text-blue-600 hover:text-blue-800">Video 6</a></li>
                        </ul>
                    </div>
                    <!-- Materi 2 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Materi 2</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video7"
                                    class="text-blue-600 hover:text-blue-800">Video 7</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=video8"
                                    class="text-blue-600 hover:text-blue-800">Video 8</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Pastikan JavaScript dihubungkan dengan benar -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
