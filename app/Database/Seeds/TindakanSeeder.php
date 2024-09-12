<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TindakanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode' => '98.21',
                'tindakan' => 'Endoskopi 1',
            ],
            [
                'kode' => '98.22',
                'tindakan' => 'Laparotomi 2',
            ],
            [
                'kode' => '97.66',
                'tindakan' => 'perawatan luka',
            ],
        ];
        $this->db->table('tindakans')->insertBatch($data);
    }
}