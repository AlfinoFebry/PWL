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
        DB::table('hobi')->insert([
            ['nama_hobi' => 'Membaca'],
            ['nama_hobi' => 'Mendengarkan Musik'],
            ['nama_hobi' => 'Bernyanyi']
        ]);
    }
}
