<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('destination', 60);
            $table->tinyInteger('duration_days')->unsigned();
            $table->date('departure_date');
            $table->date('return_date');
            $table->string('airline', 50);
            $table->float('flight_price', 8, 2);
            $table->string('hotel', 100);
            $table->float('hotel_price', 8, 2);
            $table->float('total_price', 9,2);
            $table->boolean('transfer');
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
        Schema::dropIfExists('trips');
    }
}
