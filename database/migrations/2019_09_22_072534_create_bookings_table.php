<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('vehicle_brand');
            $table->string('vehicle_name');
            $table->integer('vehicle_number');
            $table->string('service_type');
            $table->string('service_date');
            $table->string('service_time');
            $table->integer('mechanic_id')->unsigned()->nullable();
            $table->foreign('mechanic_id')->references('id')->on('mechanics');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('bookings');
    }
}
