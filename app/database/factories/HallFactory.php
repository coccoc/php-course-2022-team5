<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'capacity' => $this->faker->randomDigitNotNull,
            'rows' => $this->faker->randomDigitNotNull
        ];
    }
}
