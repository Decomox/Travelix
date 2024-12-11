<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');


Route::get('/kendaraan', [VehicleController::class, 'showVehicles'])->name('kendaraan');

// Route for booking form
Route::get('/pemesanan', [BookingController::class, 'showBookingForm'])->name('formPemesanan');

// Route for handling booking submission
Route::post('/submitTravelBooking', [BookingController::class, 'submitTravelBooking'])->name('submitTravelBooking');
Route::post('/submitRentalBooking', [BookingController::class, 'submitRentalBooking'])->name('submitRentalBooking');


Route::get('/formmitra', [MitraController::class, 'showForm'])->name('formmitra');
Route::post('/submit-mitra', [MitraController::class, 'submitMitra'])->name('submitMitra');


