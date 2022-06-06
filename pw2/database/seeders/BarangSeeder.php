<?php

namespace Database\Seeders;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Barang;
use App\Models\stok;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idBarangConfig = [
            'table' => 'baju',
            'field' => 'id_barang',
            'length' => 8,
            'prefix' => 'BRG-'
        ];

        $StokConfig = [
            'table' => 'stok',
            'field' => 'id_barang',
            'length' => 8,
            'prefix' => 'BRG-'
        ];

        Barang::create([
            'id_barang' => idGenerator::generate($idBarangConfig),
            'nama_barang' => 'Baju Off-White',
            'harga' => '3000',
        ]);

        stok::create([
            'id_barang' => idGenerator::generate($StokConfig),
            'jumlah' => '0',
        ]);

        Barang::create([
            'id_barang' => idGenerator::generate($idBarangConfig),
            'nama_barang' => 'Baju Nevada',
            'harga' => '3000',
        ]);

        stok::create([
            'id_barang' => idGenerator::generate($StokConfig),
            'jumlah' => '0',
        ]);

        Barang::create([
            'id_barang' => idGenerator::generate($idBarangConfig),
            'nama_barang' => 'Pempek Crocodile',
            'harga' => '3000',
        ]);

        stok::create([
            'id_barang' => idGenerator::generate($StokConfig),
            'jumlah' => '0',
        ]);

        Barang::create([
            'id_barang' => idGenerator::generate($idBarangConfig),
            'nama_barang' => 'Baju Hammer',
            'harga' => '12000',
        ]);


    }
}
