<?php

namespace Database\Factories;

use App\Models\ItemData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ItemData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'item_id' => $this->faker->randomNumber(5),
            'item_name' => $this->faker->word,
            'large_classification' => $this->faker->numberBetween($min=1, $max=10),
            'middle_classification' => $this->faker->numberBetween($min=1, $max=10),
            'small_classification' => $this->faker->numberBetween($min=1, $max=10),
            'about' => $this->faker->sentence,
            'start_date' => now(),
            'end_date' => $this->faker->dateTimeBetween('+30day','+10year'),

        ];
    }
}
