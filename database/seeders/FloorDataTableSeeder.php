<?php

namespace Database\Seeders;

use App\Models\FloorData;
use Illuminate\Database\Seeder;

class FloorDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        FloorData::factory()
            ->times(100)->create();
    }
}
