<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>

        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #EFF7F2;
        }

        .wrapper {
            width: 420px;
            padding: 30px;
            background: white;
            color: black;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .big-card {
            width: 420px;
            padding: 30px;
            background: white;
            color: black;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
            margin-bottom: 20px;
        }

        .input-box {
            position: relative;
            margin-bottom: 10px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-bottom: 5px;
            border: 2px solid #ccc; /* Menambahkan border */
            background: #fff;
            color: #333;
            border-radius: 10px;
            outline: none; /* Menghilangkan outline saat input di-focus */
        }

        .input-box input:focus {
            border-color: #333; /* Mengubah warna border saat input di-focus */
        }

        .input-box i {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #333;
        }

        .remember-forgot {
            display: flex;
            color: black;
            justify-content: space-between;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .remember-forgot a {
            color: black;
            text-decoration: none;
        }

        .btn {
            width: 100%;
            background: #333;
            padding: 10px;
            border: none;
            color: #fff;
            font-size: 16px;
        }

        .register-link {
            color: black;

        }

        </style>
</head>

<body>

    <div class="big-card"></div>
        <div class="wrapper">
            <form method="POST" action="{{route('login.post')}}">
                @csrf
                <h1>Login</h1>
                <div class="name-box">
                    <p>Username</p>
                </div>
                <div class="input-box">
                    <input id="email" name="email" type="text" placeholder="Value" required>
                    <i class='bx bxs-user'></i>
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
</body>
</html> 