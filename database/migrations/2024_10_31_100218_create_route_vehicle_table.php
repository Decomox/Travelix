<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteVehicleTable extends Migration
{
    public function up()
    {
        Schema::create('route_vehicle', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travel_route_id'); // ID rute perjalanan
            $table->unsignedBigInteger('vehicle_id'); // ID kendaraan

            // Menambahkan foreign key
            $table->foreign('travel_route_id')->references('id')->on('travel_routes')->onDelete('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');

            $table->timestamps(); // Untuk menyimpan timestamp
        });
    }

    public function down()
    {
        Schema::dropIfExists('route_vehicle');
    }
};
