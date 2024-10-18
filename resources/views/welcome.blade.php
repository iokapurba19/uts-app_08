@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    <div class="max-w-3xl mx-auto p-6 border border-gray-300 shadow-lg bg-white mt-10">
        <!-- Card mata kuliah -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105" onclick="location.href='{{ url('/video1') }}'">
            <h2 class="text-xl font-semibold">PEMVIS</h2>
            <div class="mt-3">
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
                    <!-- Materi 1 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Solution Modeling</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://bit.ly/3A6BjNx" class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/video1') }}'">Video 1</a></li>
                        </ul>
                    </div>
                    <!-- Materi 2 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Input/Output</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://bit.ly/4fbJ1oz"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/video2') }}'">Video 2</a></li>
                        </ul>
                    </div>
                    <!-- Materi 3 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Data Types</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/3WIeGL0VwFw?si=yJO7NzmFd0OcBmqO"
                                    class="text-blue-600 hover:text-blue-800">Video 3</a></li>
                            <li class="mb-2"><a href="https://youtu.be/Nd-pTB7Kbzs?si=QZ0Kl4wQKLjpZuXP"
                                    class="text-blue-600 hover:text-blue-800">Video 4</a></li>
                        </ul>
                    </div>
                    <!-- Materi 4 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Variable & Constant</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/8HBWlcMMXCA?si=pTKEgirvt5VCEjQS"
                                    class="text-blue-600 hover:text-blue-800">Video 5</a></li>
                            <li class="mb-2"><a href="https://youtu.be/vFRal7Y05qA?si=IdvHuAuDi5-NBzmU"
                                    class="text-blue-600 hover:text-blue-800">Video 6</a></li>
                            <li class="mb-2"><a href="https://youtu.be/y96I1dQti9E?si=LaWT39mg6iCWQ_Yc"
                                    class="text-blue-600 hover:text-blue-800">Video 7</a></li>
                        </ul>
                    </div>
                    <!-- Materi 5 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Operators</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=CuYOHKctOAI"
                                    class="text-blue-600 hover:text-blue-800">Video 8</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=qz5Mam0Iqo4"
                                    class="text-blue-600 hover:text-blue-800">Video 9</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=uYXbFVgcEpY"
                                    class="text-blue-600 hover:text-blue-800">Video 10</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=rQhGlaEWdlM"
                                    class="text-blue-600 hover:text-blue-800">Video 11</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=k5GCQMrX8hU"
                                    class="text-blue-600 hover:text-blue-800">Video 12</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=q7LCdJ8EMKg"
                                    class="text-blue-600 hover:text-blue-800">Video 13</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=agzEBTO-_8g"
                                    class="text-blue-600 hover:text-blue-800">Video 14</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=-3z3LcMKI9s"
                                    class="text-blue-600 hover:text-blue-800">Video 15</a></li>
                        </ul>
                    </div>
                    <!-- Materi 6 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Branching</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=3EcyDA36qCM"
                                    class="text-blue-600 hover:text-blue-800">Video 16</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=IYUojTzr2_U"
                                    class="text-blue-600 hover:text-blue-800">Video 17</a></li>
                        </ul>
                    </div>
                    <!-- Materi 7 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Variable & Constant</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/8HBWlcMMXCA?si=pTKEgirvt5VCEjQS"
                                    class="text-blue-600 hover:text-blue-800">Video 5</a></li>
                            <li class="mb-2"><a href="https://youtu.be/vFRal7Y05qA?si=IdvHuAuDi5-NBzmU"
                                    class="text-blue-600 hover:text-blue-800">Video 6</a></li>
                            <li class="mb-2"><a href="https://youtu.be/y96I1dQti9E?si=LaWT39mg6iCWQ_Yc"
                                    class="text-blue-600 hover:text-blue-800">Video 7</a></li>
                        </ul>
                    </div>
                    <!-- Materi 8 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Variable & Constant</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/8HBWlcMMXCA?si=pTKEgirvt5VCEjQS"
                                    class="text-blue-600 hover:text-blue-800">Video 5</a></li>
                            <li class="mb-2"><a href="https://youtu.be/vFRal7Y05qA?si=IdvHuAuDi5-NBzmU"
                                    class="text-blue-600 hover:text-blue-800">Video 6</a></li>
                            <li class="mb-2"><a href="https://youtu.be/y96I1dQti9E?si=LaWT39mg6iCWQ_Yc"
                                    class="text-blue-600 hover:text-blue-800">Video 7</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card untuk Mata Kuliah PEMPROS -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105"
            onclick="location.href='{{ url('tut2/mata_kuliah.html?matkul=2') }}'">
            <h2 class="text-xl font-semibold">PEMPROS</h2>
            <div class="mt-3">
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
                    <!-- Materi 1 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Materi 1</h3>
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
@endsection
