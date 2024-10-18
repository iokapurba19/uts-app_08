<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
}) -> name('welcome');

Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::get('/test', function () {
    return view('test');
}) -> name('test');

Route::get('/home', function () {
    return view('homepage');
}) -> name('home');


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

Route::get('/admin', [AuthController::class, 'admin'])->name('ada'); 

Route::get('/video', [AuthController::class, 'video'])->name('video'); 