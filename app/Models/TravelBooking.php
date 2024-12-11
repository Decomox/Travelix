<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'phone', 
        'route_id', 
        'departure_time', 
        'pickup_location',  // Perbaiki kesalahan penulisan
        'dropoff_location', // Pastikan kolom ini juga ada di sini
        'vehicle_model', 
        'travel_notes'      // Ganti 'catatan' dengan 'travel_notes' sesuai kolom di tabel
    ];

    public function route()
    {
        return $this->belongsTo(TravelRoute::class);
    }
}
