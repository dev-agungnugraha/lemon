<?php

namespace Database\Factories;

use App\Models\Paket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kontrak>
 */
class KontrakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $RandomNumber = Rand(1,100);

        return [
            'paket_id' => Paket::inRandomOrder()->first()->id,
            'nokontrak' => fake()->sentence(4),
            'namarekanan' => fake()->sentence(4),
            'alamatrekanan' => fake()->sentence(4),
            'nilaikontrak' => fake()->sentence(4),
            'tglkontrak' => fake()->sentence(4),
            'tglspmk' => fake()->sentence(4),
            'masapelaksanaan' => Rand(30,120),
            'masapemeliharaan' => Rand(30,120),
            'alasanaddendum' => fake()->sentence(4),
    
        ];
    }
}
