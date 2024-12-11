<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelRoutesTable extends Migration
{
    public function up()
    {
        Schema::create('travel_routes', function (Blueprint $table) {
            $table->id();
            $table->string('route_name');
            $table->string('origin');
            $table->string('destination');
            $table->json('departure_times'); // Store departure times in JSON format
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('vehicle_id'); // Menghubungkan ke kendaraan tertentu
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade'); // Foreign key
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('travel_routes');
    }
}
