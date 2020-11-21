<?php

namespace Database\Factories;

use App\Models\ShopItemBind;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopItemBindFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShopItemBind::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'shop_id' => $this->faker->numberBetween($min=1, $max=1000),
            'item_id' => $this->faker->numberBetween($min=1, $max=100),
        ];
    }
}
