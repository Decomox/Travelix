<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('rental_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama pemesan
            $table->string('phone'); // Nomor telepon pemesan
            $table->string('pickup_option'); // Pilihan pengambilan (office atau address)
            $table->string('pickup_address')->nullable(); // Alamat pengambilan jika memilih "address"
            $table->string('driver_option'); // Pilihan opsi driver (with_driver atau without_driver)
            $table->date('pickup_date'); // Tanggal mulai
            $table->date('return_date'); // Tanggal berakhir
            $table->string('vehicle_model'); // Jenis kendaraan
            $table->text('catatan')->nullable(); // Catatan tambahan (optional)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rental_bookings');
    }
}
