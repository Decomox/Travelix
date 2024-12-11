<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'pickup_option',
        'pickup_address',
        'driver_option',
        'pickup_date',
        'return_date',
        'vehicle_model',
        'catatan',
    ];

    public function addons()
    {
        return $this->hasMany(RentalBookingAddon::class);
    }
}
