<?php

namespace Database\Seeders;

use App\Models\Mechanics;
use Illuminate\Database\Seeder;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mechanics::factory()->count(10)->create();
    }
}
