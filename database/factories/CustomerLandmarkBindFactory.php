<?php

namespace Database\Factories;

use App\Models\CustomerLandmarkBind;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerLandmarkBindFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerLandmarkBind::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'customer_id' => $this->faker->numberBetween($min=1, $max=100),
            'landmark_coordinate_id' => $this->faker->numberBetween($min=1, $max=100),
        ];
    }
}
