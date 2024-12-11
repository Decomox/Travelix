<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function rentalBookings()
    {
        return $this->belongsToMany(RentalBooking::class, 'rental_booking_addons')->withPivot('quantity');
    }
}
