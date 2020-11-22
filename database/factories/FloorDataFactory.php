<?php

namespace Database\Factories;

use App\Models\FloorData;
use App\Models\FloorCoordinate;
use Illuminate\Database\Eloquent\Factories\Factory;

class FloorDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FloorData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'floor_id' => $this->faker->randomNumber(5),
            'floor_coordinate_id' => FloorCoordinate::factory(),
            'floor_name' => $this->faker->word,
            'floor_mapfile' => $this->faker->word,
        ];
    }
}
