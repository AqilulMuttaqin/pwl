<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs = [
            'nim' => '2141720182',
            'nama' => 'Muhammad Aqilul Muttaqin',
            'jk' => 'l',
            'tempat_lahir' => 'Malang',
            'tanggal_lahir' => '2002-04-16',
            'alamat' => 'Kedungkandang, Malang',
            'hp' => '082339550714'
        ];
        DB::table('mahasiswa')->insert($mhs);
    }
}
