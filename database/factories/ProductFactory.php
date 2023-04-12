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
    public function definition()
    {
        return [
            'nama' => fake()->unique()->words(mt_rand(1,3), true),
            'company' => fake()->company(),
            'stok' => fake()->numberBetween(1, 500),
            'harga' => fake()->numberBetween(1000, 600000)
        ];
    }
}
