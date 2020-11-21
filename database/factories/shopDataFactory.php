<?php

namespace Database\Factories;

use App\Models\ShopData;
use App\Models\ShopCoordinate;
use Illuminate\Database\Eloquent\Factories\Factory;

class shopDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = shopData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'shop_id' => $this->id,
            'shop_coordinate_id' => ShopCoordinate::factory(),
            'shop_name' => $this->faker->word,
            'about' => $this->faker->sentence,
        ];
    }
}
