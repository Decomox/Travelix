<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNotesToTravelBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('travel_bookings', function (Blueprint $table) {
            $table->text('catatan')->nullable(); // Add the 'catatan' column
        });
    }

    public function down()
    {
        Schema::table('travel_bookings', function (Blueprint $table) {
            $table->dropColumn('catatan'); // Remove the column if the migration is rolled back
        });
    }
}
