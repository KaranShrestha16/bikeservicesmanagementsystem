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
            $table->unsignedInteger('mechanic_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('vehicle_brand');
            $table->string('vehicle_name');
            $table->string('vehicle_number');
            $table->string('service_type');
            $table->string('service_date');
            $table->string('service_request');
            $table->string('service_time');
            $table->string('servicing');
            $table->string('admin_remark');
            $table->integer('service_charge');
            $table->string('parts_change');
            $table->integer('additional_charge');
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
