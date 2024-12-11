<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddonsTable extends Migration
{
    public function up()
    {
        Schema::create('addons', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama Add-On
            $table->decimal('price', 10, 2); // Harga Add-On
            $table->timestamps(); // Kolom untuk waktu dibuat dan diperbarui
        });
    }

    public function down()
    {
        Schema::dropIfExists('addons');
    }
};

