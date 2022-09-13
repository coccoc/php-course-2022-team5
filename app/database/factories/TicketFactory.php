<?php

namespace Database\Factories;

use App\Models\Hall;
use App\Models\MoviePlay;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $factory = Ticket::class;

    public function definition()
    {
        $faker = $this->faker;

        $rows = array ('A','B','C','D','E','F');
        $moviePlayIds = MoviePlay::query()->pluck('id');
        $hallIds = Hall::query()->pluck('id');

        $row = $faker->randomElement($rows);

        return [
            'movie_play_id' => $faker->randomElement($moviePlayIds),
            'hall_id' => $faker->randomElement($hallIds),
            'status' => $this->faker->boolean,
            'row' => $row,
            'seat_label' => $row.rand(1, 9),
            'price' => rand(0, 10) / 10,
        ];
    }
}
