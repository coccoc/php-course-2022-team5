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
        $faker = $this->faker;

        return [
            //
            'title' => $faker->word(3),
            'country' => $faker->country,
            'producer' => $faker->name(2),
            'actors' => $faker->name(2),
            'description' => $faker->paragraph(3),
        ];
    }
}
