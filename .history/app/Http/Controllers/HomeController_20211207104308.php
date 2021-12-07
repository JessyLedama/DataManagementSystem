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
                
                return view('welcome', compact('RSVPs', 'admin'));
            } 
            else //if user is not admin
            {
                return view('welcome', compact('RSVPs', 'admin'));
            }
        } 
        else { //not logged in
            return view('welcome', compact('RSVPs', 'admin'));
        }

    }
}
