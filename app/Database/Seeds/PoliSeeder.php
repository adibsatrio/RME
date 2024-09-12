<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PoliSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama' => 'umum',
                'kode' => 'A'
            ],
        ];

        foreach ($data as $row) {
            $this->db->table('polis')->insert($row);
        }
    }
}