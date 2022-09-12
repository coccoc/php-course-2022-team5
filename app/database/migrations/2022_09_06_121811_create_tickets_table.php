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
            $table->id("id");
            $table->unsignedBigInteger("hall_id")->unsigned();
            $table->string("seat_label"); // A1, A2, A3, B1, B2,...
            $table->boolean("status");
            //$table->timestamps();
            $table->string("row"); // row A, B, C,..
            $table->float("price");
        });

        Schema::table("tickets", function (Blueprint $table) {
            $table->foreign("hall_id")->references("id")->on("halls");
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
