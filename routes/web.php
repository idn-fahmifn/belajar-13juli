<?php

use Illuminate\Http\Request;
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
        return 'Ini adlaah sport';
    })->name('mobil.sport');

    Route::middleware(['auth', 'verified'])->group(function () {
        Route::get('/mobil/{brandtype}', function () {
            return view('detail');
        })->name('halaman.detail');
    });

});

Route::post('/proses', function(Request $request){

    $request->validate([
        'name' => ['required', 'min:5', 'max:10', 'string'],
        'tipe' => ['required', 'min:5', 'max:10', 'string'],
        'warna' => ['required', 'in:merah,silver,hitam'],
        'bahan_bakar' => ['required', 'integer', 'min:1', 'max:150'],
        'jenis' => ['required', 'in:suv,electric,hybrid'],
    ], [
        'name.required' => 'Input ini wajib diisi',
        'name.min' => 'masukan minimal 5 karakter',
        'name.max' => 'masukan maksimal 10 karakter',
        'name.string' => 'Input berbentuk karakter atau kata',

        'tipe.required' => 'Input ini wajib diisi',
        'tipe.min' => 'masukan minimal 5 karakter',
        'tipe.max' => 'masukan maksimal 10 karakter',
        'tipe.string' => 'Input berbentuk karakter atau kata',

        'warna.required' => 'Input ini wajib diisi',
        'warna.in' => 'Input yang diizinkan (merah, silver dan hitam)',
    ]);

})->name('proses.mobil');


// shortcut menampikan (testing halaman) - menampilkan halaman statis
Route::view('tampilan', 'welcome');
