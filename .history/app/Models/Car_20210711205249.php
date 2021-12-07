<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'makeId', 'modelId', 'price', 'mileage', 'conditionId', 'year', 'bodytypeId', 'transmissionId', 'enginetypeId', 'enginesizeId', 'image', 'youtubelink', 'tags', 'description', 'city', 'sellername', 'sellermobile', 'selleraddress'];

    
}
