<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelBooking;
use App\Models\RentalBooking;
use App\Models\TravelRoute;
use App\Models\Vehicle;
use App\Models\Addon;
use Illuminate\Support\Facades\Log;

class BookingController extends Controller
{
    public function showBookingForm()
    {
        // Mengambil data rute perjalanan, kendaraan, dan addon untuk ditampilkan di form
        $travelRoutes = TravelRoute::with('vehicles')->get();
        $addons = Addon::all();
        $vehicles = Vehicle::all();

        return view('formpemesanan', compact('travelRoutes', 'addons', 'vehicles'));
    }

    public function submitTravelBooking(Request $request)
    {
        // Validasi pemesanan travel
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'route_id' => 'required|exists:travel_routes,id',
            'departure_time' => 'required',
            'vehicle_model' => 'required|string|max:255',
            'pickup_location' => 'required|string|max:255',
            'dropoff_location' => 'required|string|max:255',
            'travel_notes' => 'nullable|string|max:500',
        ]);

        try {
            // Log data request untuk debugging
            Log::info('Data travel booking received: ', $request->all());

            // Membuat pemesanan travel
            $travelBooking = TravelBooking::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'route_id' => $request->route_id,
                'departure_time' => $request->departure_time,
                'vehicle_model' => $request->vehicle_model,
                'pickup_location' => $request->pickup_location,
                'dropoff_location' => $request->dropoff_location,
                'travel_notes' => $request->travel_notes,
            ]);

            Log::info('Travel booking created successfully: ', $travelBooking->toArray());

            return redirect()->back()->with('success', 'Pemesanan travel berhasil dibuat!');
            // return redirect()->route('pemesanan')->with('success', 'Pemesanan Travel berhasil!');
        } catch (\Exception $e) {
            Log::error('Travel Booking error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memproses pemesanan travel. Silakan coba lagi.');
        }
    }
    



    // RENTAL
    public function showRentalForm()
    {
        $vehicles = Vehicle::all(); // Ambil semua data kendaraan
        return view('formpemesanan', compact('vehicles')); // Kirim data kendaraan ke view
    }

    public function submitRentalBooking(Request $request)
    {
        // Validasi inputan dari form rental
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'pickup_option' => 'required|string',
            'pickup_date' => 'required|date',
            'return_date' => 'required|date|after:pickup_date',
            'vehicle_model' => 'required|exists:vehicles,id',
            'driver_option' => 'required|string',
            'pickup_address' => 'nullable|string|max:255',
            'addons' => 'nullable|array',
            'addons.*' => 'exists:addons,id', // Validasi addon
        ]);

        try {
            // Log data untuk debugging
            Log::info('Data rental booking received: ', $request->all());

            // Membuat pemesanan rental
            $rentalBooking = RentalBooking::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'pickup_option' => $request->pickup_option,
                'pickup_date' => $request->pickup_date,
                'return_date' => $request->return_date,
                'vehicle_model' => $request->vehicle_model, // Ubah sesuai kolom tabel di database jika vehicle_model
                'driver_option' => $request->driver_option,
                'pickup_address' => $request->pickup_address,
            ]);

            Log::info('Rental booking created successfully: ', $rentalBooking->toArray());

            // Menambahkan addons jika ada
            if ($request->has('addons')) {
                foreach ($request->addons as $addon) {
                    $rentalBooking->addons()->create([
                        'addon_id' => $addon,
                        'quantity' => 1, // Atur default atau tambahkan field input untuk jumlah
                    ]);
                }
            }
            

            // Kembali ke form dengan pesan sukses
            return redirect()->back()->with('success', 'Pemesanan rental berhasil dibuat!');
        } catch (\Exception $e) {
            // Tangani error dan log error
            Log::error('Rental Booking error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memproses pemesanan rental. Silakan coba lagi.');
        }
    }

}
