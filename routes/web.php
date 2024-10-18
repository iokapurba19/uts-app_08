<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CookieController;  // Tambahkan ini untuk mengimpor CookieController

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
})->name('materi');

Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post');

// Rute untuk CookieController
Route::get('/set-cookie', [CookieController::class, 'setCookie']);
Route::get('/get-cookie', [CookieController::class, 'getCookie']);  // Diperbaiki 'geetCookie' menjadi 'getCookie'
Route::get('/delete-cookie', [CookieController::class, 'deleteCookie']);
