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
        DB::table('mahasiswa')->insert([
            ['nim' => '00000001',
            'nama' => 'daniel alexandria',
            'jk' => 'L',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2000-01-01',
            'alamat' => 'Jl. Kebon Jeruk',
            'hp' => '081234567890',
            'kelas_id'=> 1,
            'jurusan'=> 'TI',]
        ]);
    }
}
