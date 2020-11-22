<?php

namespace Database\Factories;

use App\Models\LandmarkCoordinate;
use Illuminate\Database\Eloquent\Factories\Factory;

class LandmarkCoordinateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LandmarkCoordinate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'landmark_coordinate_id' => $this->faker->randomNumber(5),
            'x1_coordinate' => $this->faker->latitude,
            'x2_coordinate' => $this->faker->latitude,
            'y1_coordinate' => $this->faker->longitude,
            'y2_coordinate' => $this->faker->longitude,
            'database' => $this->faker->word,
            'start_date' => now(),
            'end_date' => $this->faker->dateTimeBetween('+30day','+10year'),
        ];
    }
}
