<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

use App\Models\Barang;

class BarangController extends Controller
{

    public function index()
    {
        // $data = $this->barang();
        // return view('barang.index', compact('data'));

        return view('barang.index', [
            'data' => Barang::paginate(10),
        ]);
    }

    public function detail($barang)
    {
        $data = Barang::findOrFail($barang);
        return view('barang.detail', compact('data'));
    }
}
