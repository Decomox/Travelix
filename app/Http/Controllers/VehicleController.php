<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function showVehicles()
    {
        $vehicles = Vehicle::all(); // Mengambil semua data dari tabel vehicles
        return view('kendaraan', ['vehicles' => $vehicles]);
    }
}
