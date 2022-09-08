<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MoviePlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\MoviePlay::factory(7)->create();
    }
}
