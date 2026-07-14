<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //membuat data dummy 1 baris
        // Barang::create([
        //     'nama_barang' => "sepatu",
        //     'merk' => "adidas",
        //     'stok' => 100,
        //     'harga' => 300000,
        // ]);

        Barang::factory(100)->create();



    }
}
