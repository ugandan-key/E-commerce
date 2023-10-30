<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $xid=0;
        return [
            //
            'amount' => fake()->randomFloat(2,20,10000),
            'payment_method_id' => rand(1,2),
            'status' => fake()->randomElement(['Pagado','Pendiente']),
            'order_id' => ++$xid,
            'payment_date' => fake()->date(),
        ];
    }
}
