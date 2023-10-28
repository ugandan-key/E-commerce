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
            //
            'brand_id' => rand(1,10),
            'category_id' => rand(1,10),
            'seller_id' => rand(1,20),
            'name' => fake()->word,
            'description' => fake()->text,
        ];
    }
}
