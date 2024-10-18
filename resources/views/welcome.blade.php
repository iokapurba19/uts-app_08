@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')

    <div class="max-w-3xl mx-auto p-6 border border-gray-300 shadow-lg bg-white mt-10">
        <!-- Card mata kuliah -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105" onclick="location.href='{{ url('/Solution Modeling') }}'">
            <h2 class="text-xl font-semibold">PEMVIS</h2>
            <div class="mt-3">
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
                    <!-- Materi 1 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Solution Modeling</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://bit.ly/3A6BjNx" class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Solution Modeling') }}'">Solution Modeling</a></li>
                        </ul>
                    </div>
                    <!-- Materi 2 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Input/Output</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://bit.ly/4fbJ1oz"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Input/Output') }}'">Input/Output</a></li>
                        </ul>
                    </div>
                    <!-- Materi 3 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Data Types</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/3WIeGL0VwFw?si=yJO7NzmFd0OcBmqO"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Data') }}'">Data</a></li>
                            <li class="mb-2"><a href="https://youtu.be/Nd-pTB7Kbzs?si=QZ0Kl4wQKLjpZuXP"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Data Types') }}'">Data Types</a></li>
                        </ul>
                    </div>
                    <!-- Materi 4 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Variable & Constant</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://youtu.be/8HBWlcMMXCA?si=pTKEgirvt5VCEjQS"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Variable') }}'">Variable</a></li>
                            <li class="mb-2"><a href="https://youtu.be/vFRal7Y05qA?si=IdvHuAuDi5-NBzmU"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Constant') }}'">Constant</a></li>
                            <li class="mb-2"><a href="https://youtu.be/y96I1dQti9E?si=LaWT39mg6iCWQ_Yc"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Variable & Constant') }}'">Variable & Constant</a></li>
                        </ul>
                    </div>
                    <!-- Materi 5 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Operators</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=CuYOHKctOAI"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operators') }}'">Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=qz5Mam0Iqo4"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Arithmetic Operators') }}'">Arithmetic Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=uYXbFVgcEpY"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Assignment Operators') }}'">Assignment Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=rQhGlaEWdlM"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Relational Operators') }}'">Relational Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=k5GCQMrX8hU"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Logical Operators') }}'">Logical Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=q7LCdJ8EMKg"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Concatenation Operators') }}'">Concatenation Operators</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=agzEBTO-_8g"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operator Precedence') }}'">Operator Precedence</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=-3z3LcMKI9s"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operators Simulation)') }}'">Operators (Simulation)</a></li>
                        </ul>
                    </div>
                    <!-- Materi 6 -->
                    <div class="bg-white p-4 border border-gray-300 shadow-sm">
                        <h3 class="font-medium">Branching</h3>
                        <ul class="list-none p-0 m-0">
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=3EcyDA36qCM"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Branching') }}'">Branching</a></li>
                            <li class="mb-2"><a href="https://www.youtube.com/watch?v=IYUojTzr2_U"
                                    class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Branching Simulation)') }}'">Branching (Simulation)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

 
    <!-- Card untuk Mata Kuliah PEMPROS -->
    <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md transition-transform transform hover:scale-105"
         onclick="location.href='{{ url('tut2/mata_kuliah.html?matkul=2') }}'">
        <h2 class="text-xl font-semibold">PEMPROS</h2>
        <div class="mt-3">
            <div class="flex space-x-4 overflow-x-auto">
                <!-- Materi 1 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Programming</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=JwHW6k0LM5M" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Programming Paradigm') }}'">Programming Paradigm</a></li>
                    </ul>
                </div>
                <!-- Materi 2 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">C Programming Language</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=r6gSF1OrzPs" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/C Programming Language') }}'">C Programming Language</a></li>
                    </ul>
                </div>
                <!-- Materi 3 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Stream: The Basic Concepts</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=8o1rkL_HuEE" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Stream: The Basic Concepts') }}'">Stream: The Basic Concepts</a></li>
                    </ul>
                </div>
                <!-- Materi 4 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Data & Data Types</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=8PS_VtwFqzY" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Data & Data Types') }}'">Data & Data Types</a></li>
                    </ul>
                </div>
                <!-- Materi 5 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Variable and Constant</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=iL-xrDlKBqQ" 
                        class="text-blue-600 hover:text-blue-800"onclick="location.href='{{ url('/Variable and Constant') }}'">Variable and Constant</a></li>
                    </ul>
                </div>
                <!-- Materi 6 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Operators</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=iLDR0h0svcA" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operators: Assignment and Arithmetic') }}'">Operators: Assignment and Arithmetic</a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=ZBX9Fj1zMC4" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operators: Relational and Logica') }}'">Operators: Relational and Logica</a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=fp6LFhjdU2g" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operators: Bitwise') }}'">Operators: Bitwise</a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=mUmDoQ92wgw" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Operator Precedence') }}'">Operator Precedence</a></li>
                    </ul>
                </div>
                <!-- Materi 7 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Control Structure</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=hbiKzep9lIA" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Control Structure: Branching') }}'">Control Structure: Branching</a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=9AeAriZWteU" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Control Structure: Repetition') }}'">Control Structure: Repetition</a></li>
                    </ul>
                </div>
                <!-- Materi 8 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Memory Allocation</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=lwjZcqeQR68" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Memory Allocation') }}'">Memory Allocation</a></li>
                    </ul>
                </div>
                <!-- Materi 9 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Array</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=4C-wUaVgE_M" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Array') }}'">Array</a></li>
                    </ul>
                </div>
                <!-- Materi 10 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">String</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=gnenA42HVf0" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/String: The Basic Concepts') }}'">String: The Basic Concepts </a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=VMkIMEJNJ_k" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/String Manipulation (Part 1)') }}'">String Manipulation (Part 1)</a></li>
                    </ul>
                </div>
                <!-- Materi 11 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Reading Input</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=wzEWnoAstsU" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Reading Input') }}'">Reading Input</a></li>
                    </ul>
                </div>
                <!-- Materi 12 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Structure</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=eU6QErqUC3E" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Structure') }}'">Structure</a></li>
                    </ul>
                </div>
                <!-- Materi 13 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Enumeration</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=QFPBsRYyigs" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Enumeration') }}'">Enumeration</a></li>
                    </ul>
                </div>
                <!-- Materi 14 -->
                <div class="bg-white p-4 border border-gray-300 shadow-sm">
                    <h3 class="font-medium">Function</h3>
                    <ul class="list-none p-0 m-0">
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=ruHTaSANhFM" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Function') }}'">Function</a></li>
                        <li class="mb-2"><a href="https://www.youtube.com/watch?v=T1cJH7Gi7zM" 
                        class="text-blue-600 hover:text-blue-800" onclick="location.href='{{ url('/Function Parameter') }}'">Function Parameter</a></li>
                    </ul>
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