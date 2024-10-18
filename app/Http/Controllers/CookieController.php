<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CookieController extends Controller
{
    public function setCookie()
    {
        // Anda perlu membuat response sebelum mengatur cookie
        $response = response('Hello World'); // Membuat response dengan teks 'Hello World'
        
        // Mengatur cookie dengan nama 'name', nilai UUID, dan waktu kedaluwarsa 1 menit
        $response->withCookie('name', Str::uuid(), 1);

        return $response; // Kembalikan response yang sudah dimodifikasi
    }

    public function getCookie()
    {
        return request()->cookie('name'); // Mengambil nilai cookie 'name'
    }

    public function deleteCookie()
    {
        return response('deleted')->cookie('name', null, -1); // Menghapus cookie 'name'
    }
}