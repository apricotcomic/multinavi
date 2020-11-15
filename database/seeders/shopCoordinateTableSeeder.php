<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class shopCoordinateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ShopCoordinate::factory()
            ->times(1000)->create();
    }
}
