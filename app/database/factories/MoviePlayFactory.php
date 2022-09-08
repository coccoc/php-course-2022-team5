<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movie;
use App\Models\Hall;

class MoviePlayFactory extends Factory
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
            'movie_id' => Movie::factory(),
            'hall_id' => Hall::factory(),
            'play_date' => $this->faker->dateTimeBetween($startDate = '-20 years', $endDate = 'now')
        ];
    }
}
