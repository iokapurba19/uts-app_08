<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pembelajaran</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Card mata kuliah -->
        <div class="card-matkul" onclick="location.href='tut2/mata_kuliah.html?matkul=1'">
            <h2>PEMVIS</h2>
            <div class="card-materi">
                <!-- Card materi -->
                <div class="card">
                    <h3>Materi 1</h3>
                    <ul>
                        <!-- Link video pembelajaran -->
                        <li><a href="https://www.youtube.com/watch?v=video1">Video 1</a></li>
                        <li><a href="https://www.youtube.com/watch?v=video2">Video 2</a></li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Materi 2</h3>
                    <ul>
                        <!-- Link video pembelajaran -->
                        <li><a href="https://www.youtube.com/watch?v=video3">Video 3</a></li>
                        <li><a href="https://www.youtube.com/watch?v=video4">Video 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="card-matkul" onclick="location.href='tut2/mata_kuliah.html?matkul=2'">
            <h2>PEMPROS</h2>
            <div class="card-materi">
                <!-- Card materi -->
                <div class="card">
                    <h3>Materi 1</h3>
                    <ul>
                        <!-- Link video pembelajaran -->
                        <li><a href="https://www.youtube.com/watch?v=video5">Video 5</a></li>
                        <li><a href="https://www.youtube.com/watch?v=video6">Video 6</a></ li>
                    </ul>
                </div>
                <div class="card">
                    <h3>Materi 2</h3>
                    <ul>
                        <!-- Link video pembelajaran -->
                        <li><a href="https://www.youtube.com/watch?v=video7">Video 7</a></li>
                        <li><a href="https://www.youtube.com/watch?v=video8">Video 8</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>