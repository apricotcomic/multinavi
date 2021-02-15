<?php

namespace Database\Seeders\contents_ja;

use App\Models\Classification;
use Illuminate\Database\Seeder;

class ClassificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Classification::factory()
            ->times(100)->create();
    }
}
