<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitraArmadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitra_armadas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('telepon');
            $table->string('email');
            $table->string('alamat');
            $table->string('identitas');
            $table->string('jenis_kendaraan');
            $table->string('merk_model');
            $table->integer('tahun_pembuatan');
            $table->string('nomor_polisi');
            $table->string('warna_kendaraan');
            $table->integer('kapasitas_penumpang');
            $table->text('kondisi_fisik');
            $table->integer('kapasitas_bagasi');
            $table->integer('jarak_tempuh');
            $table->enum('dokumen_lengkap', ['yes', 'no']);
            $table->string('jenis_asuransi');
            $table->string('nomor_polis');
            $table->date('masa_berlaku_asuransi');
            $table->text('fitur_keamanan');
            $table->enum('ketersediaan_waktu', ['full-time', 'part-time']);
            $table->text('rute_disetujui');
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
        Schema::dropIfExists('mitra_armadas');
    }
}
