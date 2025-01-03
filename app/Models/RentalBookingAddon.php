<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalBookingAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'rental_booking_id',
        'addon_id',
        'quantity',
    ];

    public function addon()
    {
        return $this->belongsTo(Addon::class);
    }
}
