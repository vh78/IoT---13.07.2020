<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeviceSensorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    
    {   Schema::create('device_sensor', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('device_id');
        $table->unsignedBigInteger('sensor_id');

        $table->foreign('device_id')->references('id')->on('devices');
        $table->foreign('sensor_id')->references('id')->on('sensors');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device_sensor');
    }
}
