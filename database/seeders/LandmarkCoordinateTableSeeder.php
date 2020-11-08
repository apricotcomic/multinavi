<?php

namespace Database\Seeders;

use App\Models\LandmarkCoordinate;
use Illuminate\Database\Seeder;

class LandmarkCoordinateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LandmarkCoordinate::factory()
            ->times(10)->create();
    }

}
