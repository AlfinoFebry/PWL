<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            ['nama_matkul' => 'Proyek 1',
            'hari' => 'Senin'],
            ['nama_matkul' => 'Manajemen Proyek',
            'hari' => 'Selasa'],
            ['nama_matkul' => 'Jaringan Komputer',
            'hari' => 'selasa'],
            ['nama_matkul' => 'Kewarganegaraan',
            'hari' => 'Rabu'],
            ['nama_matkul' => 'Web Lanjut',
            'hari' => 'Rabu'],
            ['nama_matkul' => 'Praktikum Jarkom',
            'hari' => 'Kamis'],
            ['nama_matkul' => 'Statistik',
            'hari' => 'Kamis'],
            ['nama_matkul' => 'Business Intelligence',
            'hari' => 'Jumat'],
            ['nama_matkul' => 'ADBO',
            'hari' => 'Jumat']
        ]);
    }
}
