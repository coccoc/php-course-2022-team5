<?php

namespace Database\Factories;

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
        $row = $this->faker->randomElement($array = array ('A','B','C','D','E','F'));
        return [
            'hall_id' => rand(1, 3),
            'status' => $this->faker->boolean,
            'row' => $row,
            'seat_label' => $row. rand(1, 9),
            'price' => rand(0, 10) / 10,
        ];
    }
}
