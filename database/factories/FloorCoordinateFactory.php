<?php

namespace Database\Factories;

use App\Models\FloorCoordinate;
use Illuminate\Database\Eloquent\Factories\Factory;

class FloorCoordinateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FloorCoordinate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'landmark_coordinate_id' => $this->faker->numberBetween($min=0, $max=10),
            'x1_coordinate' => $this->faker->latitude,
            'x2_coordinate' => $this->faker->latitude,
            'y1_coordinate' => $this->faker->longitude,
            'y2_coordinate' => $this->faker->longitude,
            'z_coordinate' => $this->faker->longitude,
            'start_date' => $this->faker->dateTimeBetween('-30day', '-3year'),
            'end_date' => $this->faker->dateTimeBetween('+30day','+10year'),
        ];
    }
}
