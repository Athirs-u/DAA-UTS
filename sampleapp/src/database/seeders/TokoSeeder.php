<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Member Info',
            'Simpan-pinjam',
            'Transaksi',
            'Stok Barang'
        ];
        
        foreach ($data as $dataclass) {
            Toko::firstOrCreate([
                'name' => $dataclass
            ]);

        }
    }
}
