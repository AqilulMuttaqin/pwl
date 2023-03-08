<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artikel')->insert([
            [
                'judul' => 'Pandemi COVID-19',
                'penulis' => 'Anisa Rahman',
                'tgl_publish' => '2020-04-15'
            ],
            [
                'judul' => 'Menjaga Kesehatan Mental',
                'penulis' => 'Budi Santoso',
                'tgl_publish' => '2021-05-22'
            ],
            [
                'judul' => 'Teknologi AI',
                'penulis' => 'Dina Fitriani',
                'tgl_publish' => '2022-09-10'
            ],
            [
                'judul' => 'Sejarah dan Kultur Suku Inca',
                'penulis' => 'Eka Widiastuti',
                'tgl_publish' => '2023-02-05'
            ],
            [
                'judul' => 'Analisis Film Spider-Man',
                'penulis' => 'Fikri Setiawan',
                'tgl_publish' => '2021-12-30'
            ]
        ]);
    }
}
