<?php

namespace Database\Seeders;

use App\Models\FloorCoordinate;
use Illuminate\Database\Seeder;

class FloorCoordinateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FloorCoordinate::factory()
            ->times(100)->create();
    }
}
