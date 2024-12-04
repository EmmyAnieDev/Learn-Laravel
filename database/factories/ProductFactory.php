<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true), // Generates a random product name
            'description' => $this->faker->sentence(), // Generates a random description
            'price' => $this->faker->randomFloat(2, 10, 1000), // Generates a random price between 10 and 1000
        ];
    }
}
