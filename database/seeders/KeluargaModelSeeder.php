<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('keluarga')->insert([
            [
                'nama' => 'Basiri',
                'jenis_kelamin' => 'Laki-laki',
                'tgl_lahir' => '1973-05-07',
                'status' => 'Kepala Keluarga'
            ],
            [
                'nama' => 'Husfiyah',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '1975-07-18',
                'status' => 'Istri'
            ],
            [
                'nama' => 'Roisyatul Habibah',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '1997-08-04',
                'status' => 'Anak'
            ],
            [
                'nama' => 'Muhammad Aqilul Muttaqin',
                'jenis_kelamin' => 'Laki-laki',
                'tgl_lahir' => '2002-04-16',
                'status' => 'Anak'
            ]
        ]);
    }
}
