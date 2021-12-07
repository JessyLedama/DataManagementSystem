<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'makeId', 'modelId', 'price', 'price' 'mileage', 'conditionId', 'year', 'bodyId', 'transmissionId', 'enginetypeId', 'enginesizeId', 'image', 'youtubelink', 'tags', 'description', 'cityId', 'sellerId', 'sellermobile', 'selleraddress'];

    
}
