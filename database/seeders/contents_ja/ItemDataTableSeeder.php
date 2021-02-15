<?php

namespace Database\Seeders\contents_ja;

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
            ->times(1000)->create();
    }
}
