<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraArmada extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'telepon', 'email', 'alamat', 'identitas',
        'jenis_kendaraan', 'merk_model', 'tahun_pembuatan',
        'nomor_polisi', 'warna_kendaraan', 'kapasitas_penumpang',
        'kondisi_fisik', 'kapasitas_bagasi', 'jarak_tempuh',
        'dokumen_lengkap', 'jenis_asuransi', 'nomor_polis',
        'masa_berlaku_asuransi', 'fitur_keamanan', 'ketersediaan_waktu',
        'rute_disetujui'
    ];
}
