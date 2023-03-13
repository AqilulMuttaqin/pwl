<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('hobi')->insert([
            ['daftar_hobi' => 'Bersepeda'],
            ['daftar_hobi' => 'Bermain Game'],
            ['daftar_hobi' => 'Membaca']
        ]);
    }
}
