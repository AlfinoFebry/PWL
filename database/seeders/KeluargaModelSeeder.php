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
        DB::table('keluarga')->insert([
            ['nama_keluarga' => 'Kristian Sapto Putro',
            'status' => 'Ayah'],
            ['nama_keluarga' => 'Satin',
            'status' => 'Ibu'],
            ['nama_keluarga' => 'Alfarizam Krissaputra',
            'status' => 'Saudara']
        ]);
    }
}
