<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'name' => $this->faker->bothify('?###??##'),
            'price' => rand(100, 100000),
            'phone_no' => $this->faker->phoneNumber(),
            'expired_date' => $this->faker->dateTimeBetween('now', '+30 years'),
            'company_id' => rand(1, 4),


        ];
    }
}
