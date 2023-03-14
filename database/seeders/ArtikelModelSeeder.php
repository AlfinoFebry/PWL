<?php

namespace Database\Seeders;

use App\Models\ArtikelModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArtikelModel::factory()->count(10)->create();
    }
}
