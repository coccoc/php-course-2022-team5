<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviePlaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_plays', function (Blueprint $table) {
            $table->id();
            $table->foreign("movie_id")->references("id")->on("movie");
            $table->foreign("hall_id")->references("id")->on("hall");
            $table->date("play_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_plays');
    }
}
