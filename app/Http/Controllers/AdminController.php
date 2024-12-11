<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\TravelBooking;
use App\Models\RentalBooking;
use App\Models\MitraArmada;

class AdminController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all(); // Data kendaraan
        $travelBookings = TravelBooking::all(); // Data travel bookings
        $rentalBookings = RentalBooking::all(); // Data travel bookings
        $mitraArmadas = MitraArmada::all(); // Data travel bookings

        // Mengirimkan data ke view
        return view('admin', compact('vehicles', 'travelBookings', 'rentalBookings', 'mitraArmadas'));
    }
}
