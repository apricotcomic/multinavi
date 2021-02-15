<?php

namespace Database\Seeders\contents_ja;

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
