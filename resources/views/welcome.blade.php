@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    <div class="max-w-3xl mx-auto p-6 border border-gray-300 shadow-lg bg-white mt-10">
        <!-- Card mata kuliah -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105 relative"
     style="background-image: url('{{ asset('image/PEMROGRAMAN VISUAL.png') }}'); background-size: contain; background-position: center; height: 300px;">
    <!-- <h2 class="text-xl font-semibold">PEMPROS</h2> -->
    <div class="mt-3">
        <div class="flex space-x-4 overflow-x-auto">
            <!-- Konten lain di sini -->
        </div>
    </div>
</div>




        <!-- Card untuk Mata Kuliah PEMPROS -->
        <div class="bg-white p-5 mb-5 border border-gray-300 shadow-md cursor-pointer transition-transform transform hover:scale-105 relative"
     style="background-image: url('{{ asset('image/Pempros.png') }}'); background-size: contain; background-position: center; height: 300px;">
    <!-- <h2 class="text-xl font-semibold">PEMPROS</h2> -->
    <div class="mt-3">
        <div class="flex space-x-4 overflow-x-auto">
            <!-- Konten lain di sini -->
        </div>
    </div>
                <!-- Card untuk Materi -->
                <div class="flex space-x-4 overflow-x-auto">
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
