<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{BarangController, MobilController, PhotoController};

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
        return 'Ini adlaah sport';
    })->name('mobil.sport');

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/mobil/{brandtype}', function () {
            return view('detail');
        })->name('halaman.detail');
    });

});

Route::post('/proses', [MobilController::class, 'mobil'])->name('proses.mobil');
Route::get('/motor', [MobilController::class, 'motor'])->name('halaman.motor');

// jika menggunakan controller resource - mau bikin CRUD
Route::resource('photos', PhotoController::class);

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// shortcut menampikan (testing halaman) - menampilkan halaman statis
Route::view('tampilan', 'template.template');
