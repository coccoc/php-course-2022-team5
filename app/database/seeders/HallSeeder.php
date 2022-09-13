<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hall::factory(5)->create();
    }
}
