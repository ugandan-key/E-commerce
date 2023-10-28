<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Price>
 */
class PriceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */    
    public function definition(): array
    {        
        static $pid=0;
        return [            
            //
            'product_id' => ++$pid,
            'price' => fake()->randomFloat(2,20,5000),
        ];
    }
}
