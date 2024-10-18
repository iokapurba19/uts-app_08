<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::get('/materi', function () {
    return view('materi');
}) -> name('materi');

Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post'); 