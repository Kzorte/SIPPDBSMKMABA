<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/pendaftaran', function () {
    return view('pendaftaran',[
        "title" => "Pendaftaran"
    ]);
});

Route::get('/cek-bukti', function () {
    return view('cek-bukti',[
        "title" => "Cek-bukti"
    ]);
});

Route::get('/verifikasi', function () {
    return view('verifikasi',[
        "title" => "Verifikasi"
    ]);
});

Route::get('/hasil', function () {
    return view('hasil',[
        "title" => "Hasil"
    ]);
});

