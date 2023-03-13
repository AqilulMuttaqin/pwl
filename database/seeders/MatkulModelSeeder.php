<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatkulModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('matkul')->insert([
            [
                'nama_matkul' => 'Kewarganegaraan',
                'sks' => 2,
                'jam' => 2
            ],
            [
                'nama_matkul' => 'Analisi dan Desain Berorentasi Objek',
                'sks' => 2,
                'jam' => 4
            ],
            [
                'nama_matkul' => 'Manajemen Proyek',
                'sks' => 2,
                'jam' => 3
            ],
            [
                'nama_matkul' => 'Proyek 1',
                'sks' => 3,
                'jam' => 6
            ],
            [
                'nama_matkul' => 'Business Intelligence',
                'sks' => 2,
                'jam' => 4
            ],
            [
                'nama_matkul' => 'Jaringan Komputer',
                'sks' => 2,
                'jam' => 4
            ],
            [
                'nama_matkul' => 'Praktikum Jaringan Komputer',
                'sks' => 2,
                'jam' => 4
            ],
            [
                'nama_matkul' => 'Pemrograman Web Lanjut',
                'sks' => 3,
                'jam' => 6
            ],
            [
                'nama_matkul' => 'Statistik Komputasi',
                'sks' => 2,
                'jam' => 4
            ]
        ]);
    }
}
