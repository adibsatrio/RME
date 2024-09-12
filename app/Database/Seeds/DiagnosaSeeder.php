<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DiagnosaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['kode' => 'K97','diagnosa' => 'Diare',],
            ['kode' => 'H25','diagnosa' => 'Katarak Senil',],
            ['kode' => '111','diagnosa' => 'Penyakit Jantung Hipertensi Dengan Gagal Jantung',],
            ['kode' => '125','diagnosa' => 'Penyakit Jantung Iskemik Kronik Tidak Terspesifikasi',],
            ['kode' => '203','diagnosa' => 'Observasi Dan Evaluasi Medis',], 
            ['kode' => 'E11','diagnosa' => 'Diabetes Mellitus Tak Tergantung Insulin',],
            ['kode' => 'J06.9','diagnosa' => 'Infeksi Pernafasan Atas Akut Tidak Terspesifikasi',],
            ['kode' => 'J44','diagnosa' => 'Penyakit Paru Obstruktif Kronik Tidak Terspesifikasi',],
            ['kode' => 'J45','diagnosa' => 'Asma',],
            ['kode' => 'K29','diagnosa' => 'Gastriti Tidak Terspesifikasi',],
            ['kode' => 'N40','diagnosa' => 'Hiperplasi Prostat',],
            ['kode' => 'N92','diagnosa' => 'Menstruasi Berlebih Sering Dan Ireguler',],
        ];
        $this->db->table('diagnosas')->insertBatch($data);
    }
}