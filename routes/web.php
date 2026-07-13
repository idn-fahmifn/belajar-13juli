<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Definisikan Alamat : 

Route::get('/mobil', function(){
    // disini kalo saya dipanggil, saya harus ngapain? 
    return view('mobil');
})->name('halaman.mobil');


Route::get('/mobil/sport', function(){
    return "ini adalah mobil sport";
});

Route::get('/mobil/{brandtype}', function(){
    return view('detail');
})->name('halaman.mobil');


// shortcut menampikan (testing halaman) - menampilkan halaman statis 
Route::view('tampilan','welcome');


