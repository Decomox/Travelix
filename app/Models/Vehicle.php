<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 
        'type', 
        'cc', 
        'color', 
        'seating_capacity', 
        'license_plate', 
        'image', 
        'description'
    ];
}
