<?php

namespace Database\Seeders;

use App\Models\Ticket;
use http\Client\Curl\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory(10)
        //     ->create([
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //         'password' => Hash::make('password'),
        //     ]);
        Ticket::factory()->count(100)->create();
    }
}
