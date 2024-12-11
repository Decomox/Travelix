<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('travel_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->foreignId('route_id')->constrained('travel_routes')->onDelete('cascade');
            $table->time('departure_time'); // Updated to match form field for departure time
            $table->string('vehicle_model'); // Changed to vehicle_model to match form
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->text('travel_notes')->nullable(); // Optional field for notes
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('travel_bookings');
    }
}
