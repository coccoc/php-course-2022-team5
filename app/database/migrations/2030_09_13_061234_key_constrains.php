<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KeyConstrains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movie_plays', function (Blueprint $table) {
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->foreign('hall_id')->references('id')->on('halls');
        });

        Schema::table('tickets', function (Blueprint $table) {
            $table->foreign('hall_id')->references('id')->on('halls');
            $table->foreign('movie_play_id')->references('id')->on('movie_plays');
        });

        Schema::table('reservations', function (Blueprint $table) {
            $table->unique('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets');
            $table->foreign('booking_user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
