<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TravelRoute extends Model
{
    use HasFactory;

    protected $fillable = [
        'route_name',
        'origin',
        'destination',
        'departure_times',
        'price',
        'vehicle_id'
    ];

    protected $casts = [
        'departure_times' => 'array', // Cast JSON to array
    ];

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'route_vehicle', 'travel_route_id', 'vehicle_id');
    }
}
