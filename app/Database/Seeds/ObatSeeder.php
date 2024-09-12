<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ObatSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => '001',
                'obat' => 'Paracetamol',
                'jenis' => 'tablet',
                'bentuk' => '1 strip 10 tablet',
                'stok' => 100,
                'harga' => 15000,
            ],
            [
                'kode' => '002',
                'obat' => 'Allopurinol',
                'jenis' => 'kapsul',
                'bentuk' => '1 botol 30 kapsul',
                'stok' => 100,
                'harga' => 30000,
            ],
            [
                'kode' => '003',
                'obat' => 'hufagrip sirup',
                'jenis' => 'sirup',
                'bentuk' => '1 botol 50 ml',
                'stok' => 100,
                'harga' => 22000,
            ],
            [
                'kode' => '004',
                'obat' => 'dexamethason',
                'jenis' => 'salep',
                'bentuk' => '1 tube 8 ml',
                'stok' => 100,
                'harga' => 10000,
            ],
            [
                'kode' => '099',
                'obat' => 'kasa steril',
                'jenis' => 'roll',
                'bentuk' => '1 pack 15 roll',
                'stok' => 100,
                'harga' => 12500,
            ],
        ];
        $this->db->table('obats')->insertBatch($data);
    }
}