<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteVehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_route_id',
        'vehicle_id',
    ];

    public function travelRoute()
    {
        return $this->belongsTo(TravelRoute::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
