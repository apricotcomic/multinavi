<?php

namespace Database\Factories;

use App\Models\LandmarkCoordinate;
use App\Models\LandmarkData;
use Illuminate\Database\Eloquent\Factories\Factory;

class LandmarkDataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LandmarkData::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'landmark_coordinate_id' => LandmarkCoordinate::factory(),
            'landmark_name' => $this->faker->word,
            'address' => $this->faker->address,
            'zip' => $this->faker->postcode,
            'telephone_number' => $this->faker->phoneNumber,
            'fax_number' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
        ];
    }
}
