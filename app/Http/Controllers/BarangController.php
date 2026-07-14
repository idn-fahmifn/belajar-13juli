<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class BarangController extends Controller
{
    // data object

    private function barang(): Collection
    {
        return collect([
            (object) ['id' => 1, 'nama_barang' => 'sepatu', 'merk' => 'adidas', 'stok' => 10, 'harga' => 200000],
            (object) ['id' => 2, 'nama_barang' => 'sendal', 'merk' => 'eiger', 'stok' => 20, 'harga' => 100000],
            (object) ['id' => 3, 'nama_barang' => 'Kaos', 'merk' => 'adidas', 'stok' => 10, 'harga' => 90000],
            (object) ['id' => 4, 'nama_barang' => 'Jaket', 'merk' => 'Eiger', 'stok' => 10, 'harga' => 400000],
        ]);
    }

    public function index()
    {
        // $data = $this->barang();
        // return view('barang.index', compact('data'));

        return view('barang.index', [
            'data' => $this->barang(),
        ]);
    }

    public function detail($barang)
    {
        $data = $this->barang()->firstWhere('id', $barang);
        if(!$barang){
            abort(404, "Barang tidak ditemukan");
        }
        return view('barang.detail', compact('data'));
    }
}
