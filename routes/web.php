<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Definisikan Alamat :

Route::get('/mobil', function () {
    // disini kalo saya dipanggil, saya harus ngapain?
    return view('mobil');
})->name('halaman.mobil');

// syarat routing group : prefix middleare harus sama

Route::middleware('login')->group(function () {

    Route::get('/mobil/sport', function () {
        return "Ini adlaah sport";
    })->name('mobil.sport');

    Route::get('/mobil/{brandtype}', function () {
        return view('detail');
    })->name('halaman.detail');

});

// shortcut menampikan (testing halaman) - menampilkan halaman statis
Route::view('tampilan', 'welcome');
