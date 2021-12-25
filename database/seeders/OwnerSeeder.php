<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 11; $i <= 20; $i++) {
            Owner::create([
                'name' => 'Name' . $i,
                'car_id' => $i,
            ]);
        }
    }
}
