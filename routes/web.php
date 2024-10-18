<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CookieController;  // Tambahkan ini untuk mengimpor CookieController
use App\Http\Controllers\UrlShortenerController;

Route::get('/shorten', function () {
    return view('shortener');
});

Route::post('/shorten', [UrlShortenerController::class, 'shortenUrl'])->name('shorten.url');

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/home', function () {
    return view('homepage');
})->name('home');

Route::get('/materi', function () {
    return view('materi');
}) -> name('materi');

Route::get('/materi', function () {
    return view('url/');
}) -> name('materi');

Route::get('/Solution Modeling', function () {
    return redirect('https://bit.ly/3A6BjNx');

}) -> name('materi');

Route::get('/Input/Output', function () {
    return redirect('https://bit.ly/4fbJ1oz');

}) -> name('materi');

Route::get('/Data', function () {
    return redirect('https://youtu.be/3WIeGL0VwFw?si=yJO7NzmFd0OcBmqO');

}) -> name('materi');

Route::get('/Data Types', function () {
    return redirect('https://youtu.be/Nd-pTB7Kbzs?si=QZ0Kl4wQKLjpZuXP');

}) -> name('materi');

Route::get('/Variable', function () {
    return redirect('https://youtu.be/8HBWlcMMXCA?si=pTKEgirvt5VCEjQS');

}) -> name('materi');

Route::get('/Constant', function () {
    return redirect('https://youtu.be/vFRal7Y05qA?si=IdvHuAuDi5-NBzmU');

}) -> name('materi');

Route::get('/Variable & Constant', function () {
    return redirect('https://youtu.be/y96I1dQti9E?si=LaWT39mg6iCWQ_Yc');

}) -> name('materi');

Route::get('/Operators', function () {
    return redirect('https://www.youtube.com/watch?v=CuYOHKctOAI');

}) -> name('materi');

Route::get('/Arithmetic Operators', function () {
    return redirect('https://www.youtube.com/watch?v=qz5Mam0Iqo4');

}) -> name('materi');

Route::get('/Assignment Operators', function () {
    return redirect('https://www.youtube.com/watch?v=uYXbFVgcEpY');

}) -> name('materi');

Route::get('/Relational Operators', function () {
    return redirect('https://www.youtube.com/watch?v=rQhGlaEWdlM');

}) -> name('materi');
Route::get('/Logical Operators', function () {
    return redirect('https://www.youtube.com/watch?v=k5GCQMrX8hU');

}) -> name('materi');
Route::get('/Concatenation Operators', function () {
    return redirect('https://www.youtube.com/watch?v=q7LCdJ8EMKg');

}) -> name('materi');
Route::get('/Operator Precedence', function () {
    return redirect('https://www.youtube.com/watch?v=agzEBTO-_8g');

}) -> name('materi');
Route::get('/Operators Simulation', function () {
    return redirect('https://www.youtube.com/watch?v=-3z3LcMKI9s');

}) -> name('materi');
Route::get('/Branching', function () {
    return redirect('https://www.youtube.com/watch?v=3EcyDA36qCM');

}) -> name('materi');

Route::get('/Branching Simulation', function () {
    return redirect('https://www.youtube.com/watch?v=IYUojTzr2_U');

}) -> name('materi');


Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');