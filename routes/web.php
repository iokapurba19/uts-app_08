<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
}) -> name('welcome');

Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::get('/home', function () {
    return view('homepage');
}) -> name('home');


Route::get('/materi', function () {
    return view('materi');
}) -> name('materi');

Route::post('/login', [AuthController::class, 'loginPost'])->name('login.post'); 