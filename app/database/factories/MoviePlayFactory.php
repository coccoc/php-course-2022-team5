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
        $movieIds = Movie::query()->limit(2)->pluck('id');
        $hallIds = Hall::query()->limit(3)->pluck('id');
        $faker = $this->faker;

        return [
            //
            'movie_id' => $faker->randomElement($movieIds),
            'hall_id' => $faker->randomElement($hallIds),
            'play_date' => $faker->dateTimeBetween('now', '+3 months')
        ];
    }
}
