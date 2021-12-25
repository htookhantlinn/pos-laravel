<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'customer_id' => rand(1, 10),
            'product_id' => rand(4, 10),
            'quantity' => rand(1, 10),
        ];
    }
}
