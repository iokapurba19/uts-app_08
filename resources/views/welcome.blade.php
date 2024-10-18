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
                                    class="text-blue-600 hover:text-blue-800">Data</a></li>
                            <li class="mb-2"><a href="https://youtu.be/Nd-pTB7Kbzs?si=QZ0Kl4wQKLjpZuXP"
                                    class="text-blue-600 hover:text-blue-800">Data Types</a></li>
                        </ul>
                    </div>
                    <!-- Materi 4 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Variable & Constant</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/8HBWlcMMXCA?si=pTKEgirvt5VCEjQS"
                                    class="text-blue-600 hover:text-blue-800">Variable</a></li>
                            <li class="mb-2"><a href="https://youtu.be/vFRal7Y05qA?si=IdvHuAuDi5-NBzmU"
                                    class="text-blue-600 hover:text-blue-800">Constant</a></li>
                            <li class="mb-2"><a href="https://youtu.be/y96I1dQti9E?si=LaWT39mg6iCWQ_Yc"
                                    class="text-blue-600 hover:text-blue-800">Variable & Constant (Simulation)</a></li>
                        </ul>
                    </div>
                    <!-- Materi 5 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Operators</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=CuYOHKctOAI"
                                    class="text-blue-600 hover:text-blue-800">Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=qz5Mam0Iqo4"
                                    class="text-blue-600 hover:text-blue-800">Arithmetic Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=uYXbFVgcEpY"
                                    class="text-blue-600 hover:text-blue-800">Assignment Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=rQhGlaEWdlM"
                                    class="text-blue-600 hover:text-blue-800">Relational Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=k5GCQMrX8hU"
                                    class="text-blue-600 hover:text-blue-800">Logical Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=q7LCdJ8EMKg"
                                    class="text-blue-600 hover:text-blue-800">Concatenation Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=agzEBTO-_8g"
                                    class="text-blue-600 hover:text-blue-800">Operator Precedence</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=-3z3LcMKI9s"
                                    class="text-blue-600 hover:text-blue-800">Operators (Simulation)</a></li>
                        </ul>
                    </div>
                    <!-- Materi 6 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Branching</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=3EcyDA36qCM"
                                    class="text-blue-600 hover:text-blue-800">Branching</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=IYUojTzr2_U"
                                    class="text-blue-600 hover:text-blue-800">Branching (Simulation)</a></li>
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
                <!-- Materi 15 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Reusable Units</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=PkAGiiIFVxE" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Reusable Units') }}'">Reusable Units</a></li>
                    </ul>
                </div>
                <!-- Materi 16 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Indirection</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=BN8Itl4RNjc" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Indirection') }}'">Indirection</a></li>
                    </ul>
                </div>
                <!-- Materi 17 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Dynamic Memory Allocation</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=r18wieM3ybw" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Dynamic Memory Allocation') }}'">Dynamic Memory Allocation</a></li>
                    </ul>
                </div>
                <!-- Materi 18 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Pointer to Function (Callback)</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=IjtFQD-2sik" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Stream: The Basic Concepts') }}'"></a></li>
                    </ul>
                </div>
                <!-- Materi 19 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">File Operation (Higher-level Approach)</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=i1i39PsW7BA" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Stream: The Basic Concepts') }}'"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Pastikan JavaScript dihubungkan dengan benar -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>


@endsection