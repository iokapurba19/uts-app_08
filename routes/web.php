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

Route::get('/video1', function () {
    return redirect('https://www.youtube.com/watch?v=zo9bYyxKs6c&ab_channel=DasarPemrograman');

}) -> name('materi');

Route::get('/video2', function () {
    return redirect('https://www.youtube.com/watch?v=zo9bYyxKs6c&ab_channel=DasarPemrograman');

}) -> name('materi');

Route::get('/video1', function () {
    return redirect('https://www.youtube.com/watch?v=zo9bYyxKs6c&ab_channel=DasarPemrograman');

}) -> name('materi');




Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

// Tambahkan rute untuk CookieController
Route::get('/set-cookie', [CookieController::class, 'setCookie'])->name('set.cookie'); // Rute untuk mengatur cookie
Route::get('/get-cookie', [CookieController::class, 'getCookie'])->name('get.cookie'); // Rute untuk mengambil cookie
Route::get('/delete-cookie', [CookieController::class, 'deleteCookie'])->name('delete.cookie'); // Rute untuk menghapus cookie
