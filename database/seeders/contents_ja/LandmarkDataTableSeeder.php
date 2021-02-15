<?php

namespace Database\Seeders\contents_ja;

use App\Models\LandmarkData;
use Illuminate\Database\Seeder;

class LandmarkDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        LandmarkData::factory()
            ->times(10)->create();
    }
}
