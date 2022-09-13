<?php

namespace Database\Seeders;

use App\Models\Hall;
use App\Models\MoviePlay;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        \App\Models\Movie::factory(3)->create();
        \App\Models\Hall::factory(2)->create();
        \App\Models\MoviePlay::factory(5)->create();
        \App\Models\Ticket::factory(20)->create();
        \App\Models\Reservation::factory(4)->create();
    }
}
