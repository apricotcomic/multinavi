<?php

namespace Database\Seeders;

use App\Models\ItemData;
use Illuminate\Database\Seeder;

class ItemDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ItemData::factory()
            ->times(100)->create();
    }
}
