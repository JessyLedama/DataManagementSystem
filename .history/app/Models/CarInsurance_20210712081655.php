<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInsurance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_category', 'mobile', 'email', 'vehicle_type', 'covertype', 'vehiclevalue', 'vehicleregistration',
    ];
}
