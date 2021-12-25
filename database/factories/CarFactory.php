<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
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
            'model' => ucwords($this->faker->name),
            'mechanic_id' => rand(1, 10),
        ];
    }
}
