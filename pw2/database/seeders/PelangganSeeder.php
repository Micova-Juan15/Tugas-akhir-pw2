<?php

namespace Database\Seeders;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $idConfig = [
            'table' => 'pelanggan',
            'field' => 'id_pelanggan',
            'length' => 10,
            'prefix' => 'CUST-'
        ];

        Pelanggan::create([
            'id_pelanggan' => idGenerator::generate($idConfig),
            'nama_pelanggan' => 'Default',
            'no_telp' => '-',
        ]);

    }
}
