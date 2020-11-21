<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            // LandmarkDataTableSeeder::class,
            // FloorDataTableSeeder::class,
            // ShopDataTableSeeder::class,
            // ClassificationTableSeeder::class,
            // ItemDataTableSeeder::class,
            ShopItemBindTableSeeder::class,
        ]);
    }
}
