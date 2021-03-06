<?php

namespace Database\Seeders;

use App\Models\ShopData;
use Illuminate\Database\Seeder;

class ShopDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ShopData::factory()
            ->times(1000)->create();
    }
}
