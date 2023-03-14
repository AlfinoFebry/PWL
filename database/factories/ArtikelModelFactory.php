<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ArtikelModel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ArtikelModel>
 */
class ArtikelModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            

            'judul' => $this->faker->sentence(3),
            'penulis' => $this->faker->name,
            'tanggal_publish' => $this->faker->date('Y-m-d'),
        ];
    }
}
