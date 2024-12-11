<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MitraArmada;

class MitraController extends Controller
{
    public function showForm()
    {
        return view('formmitra');
    }

    public function submitMitra(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'telepon' => 'required|numeric',
            'email' => 'required|email',
            'alamat' => 'required|string',
            'identitas' => 'required|string',
            'jenis_kendaraan' => 'required|string',
            'merk_model' => 'required|string',
            'tahun_pembuatan' => 'required|numeric',
            'nomor_polisi' => 'required|string',
            'warna_kendaraan' => 'required|string',
            'kapasitas_penumpang' => 'required|numeric',
            'kondisi_fisik' => 'required|string',
            'kapasitas_bagasi' => 'required|string',
            'jarak_tempuh' => 'required|numeric',
            'dokumen_lengkap' => 'required|string',
            'jenis_asuransi' => 'required|string',
            'nomor_polis' => 'required|string',
            'masa_berlaku_asuransi' => 'required|date',
            'fitur_keamanan' => 'required|string',
            'ketersediaan_waktu' => 'required|string',
            'rute_disetujui' => 'required|string',
        ]);

        MitraArmada::create($request->all());

        return redirect()->route('formmitra')->with('success', 'Pendaftaran Mitra berhasil!');
    }
}
