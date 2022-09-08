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
        return [
            'hall_id' => rand(1, 3), //comment out this when hall_id available
            'seat_label' => $this->faker->word() . rand(1, 9),
            'status' => $this->faker->boolean,
            'type' => $this->faker->word(),
            'price' => rand(0, 10) / 10,
        ];
    }
}
