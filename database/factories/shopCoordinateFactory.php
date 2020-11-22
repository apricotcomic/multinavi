<?php

namespace Database\Factories;

use App\Models\shopCoordinate;
use Illuminate\Database\Eloquent\Factories\Factory;

class shopCoordinateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = shopCoordinate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'shop_coordinate_id' => $this->faker->randomNumber(5),
            'landmark_coordinate_id' =>  $this->faker->numberBetween($min=0, $max=9),
            'floor_coordinate_id' =>  $this->faker->numberBetween($min=0, $max=99),
            'x1_coordinate' => $this->faker->latitude,
            'x2_coordinate' => $this->faker->latitude,
            'y1_coordinate' => $this->faker->longitude,
            'y2_coordinate' => $this->faker->longitude,
            'x_point_coordinate' => $this->faker->randomNumber,
            'y_point_coordinate' => $this->faker->randomNumber,
            'start_date' => now(),
            'end_date' => $this->faker->dateTimeBetween('+30day','+10year'),
        ];
    }
}
