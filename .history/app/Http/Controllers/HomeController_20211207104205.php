<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CarBody;
use App\Models\Car;
use App\Models\CarMake;
use App\Models\Blog;
use App\Models\CarModel;
use App\Models\CarPrice;
use App\Models\EngineType;
use App\Models\EngineSize;
use App\Models\CarColor;
use App\Models\Cities;
use App\Models\CarTransmission;
use App\Models\CarCondition;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $admin = User::where('role', 'admin')->first();

        $RSVPs = RSVP::all();
               
                
        if(Auth::check())
        {
            $userName = Auth::user()->name;
            
            if($userName == $admin->name) //if user is admin
            {
                
                return view('welcome', compact('vehicleTypes', 'carBodies', 'carsCount', 'carMakesCount', 'carMakes', 'blogPosts', 'admin'));
            } 
            else //if user is not admin
            {
                return view('welcome', compact('vehicleTypes', 'carBodies', 'carsCount', 'carMakesCount', 'carMakes', 'blogPosts', 'admin'));
            }
        } 
        else { //not logged in
            return view('welcome', compact('vehicleTypes', 'carBodies', 'carsCount', 'carMakesCount', 'carMakes', 'blogPosts', 'admin'));
        }

    }

    public function searchCars()
    {
        $cars = Car::paginate();
        $carMakes = CarMake::all();
        $carModels = CarModel::all();
        $carBodies = CarBody::all();
        $carPrices = CarPrice::all();
        $engineTypes = EngineType::all();
        $engineSizes = EngineSize::all();
        $carColors = CarColor::all();
        $cities = Cities::all();
        $carTransmissions = CarTransmission::all();
        $carConditions = CarCondition::all();

        $carsCount = count($cars); 

        return view('user.searchcars', compact('cars', 'carMakes', 'carsCount', 'carBodies', 'carModels', 'carPrices', 'engineTypes', 'engineSizes', 'carColors', 'cities', 'carTransmissions', 'carConditions'));
    }

    public function keywordSearch(Request $request)
    {
        $results = Car::where('name', $request->name)->orWhere('makeId', $request->makeId)->get();

        $resultsCount = count($results);

        return view('search-results', compact('results', 'resultsCount',));
    }
}
