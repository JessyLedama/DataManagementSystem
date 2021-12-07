<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'modelId', 'price', 'priceType', 'mileage', 'conditionId', 'year', 'bodyId', 'transmissionId', 'enginetypeId', 'enginesizeId', 'image', 'youtubelink', 'tags', 'description', 'cityId', 'sellerId', 'sellermobile', 'selleraddress', 'adStatus', 'features'];

    
}