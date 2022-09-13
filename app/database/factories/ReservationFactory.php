<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $ticketIds = Ticket::query()->where('status', 'is', true)->pluck('id');
        $userIds = User::query()->pluck('id');
        $faker = $this->faker;

        return [
            'booking_user_id' => $faker->randomElement($userIds),
            'ticket_id' => $faker->unique()->randomElement($ticketIds)
        ];
    }
}
