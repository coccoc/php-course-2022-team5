<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('booking_user_id')->nullable();
            $table->unsignedBigInteger('movie_play_id');
            $table->unsignedBigInteger('hall_id');
            $table->float('price');
            $table->string('row'); // row A, B, C,..
            $table->string('seat_label'); // A1, A2, A3, B1, B2,...
            $table->boolean('status')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
