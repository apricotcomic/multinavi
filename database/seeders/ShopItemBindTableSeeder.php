<?php

namespace Database\Seeders;

use App\Models\ShopItemBind;
use Illuminate\Database\Seeder;

class ShopItemBindTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ShopItemBind::factory()
            ->times(10000)->create();
    }
}
