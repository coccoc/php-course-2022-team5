<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
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
            'title' => $this->faker->word(3),
            'country' => $this->faker->country,
            'producer' => $this->faker->name(2),
            'actors' => $this->faker->name(2),
            'description' => $this->faker->paragraph(3),
        ];
    }
}
