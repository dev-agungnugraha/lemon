<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $RandomNumber = Rand(1,100);
        $cover = "https://picsum.photos/id/{$RandomNumber}/200/300";
        return [
            'author_id' => Author::inRandomOrder()->first()->id,
            'title' => fake()->sentence(4),
            'description' => fake()->sentence(50),
            'cover' => $cover,
            'qty' => Rand(10,20),
        ];
    }
}
