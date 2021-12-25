<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <= 10; $i++) {
            Car::create([
                'model' => 'Model' . $i,
                'mechanic_id' => rand(1, 10)
            ]);
        }
    }
}
