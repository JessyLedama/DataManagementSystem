<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RSVP;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $admin = User::where('role', 'admin')->first();

        $RSVPs = RSVP::all();

        $blogPosts = Blog::all();
               
                
        if(Auth::check())
        {
            $userName = Auth::user()->name;
            
            if($userName == $admin->name) //if user is admin
            {
                
                return view('welcome', compact('RSVPs', 'blogPo' 'admin'));
            } 
            else //if user is not admin
            {
                return view('welcome', compact('RSVPs', 'blogPo' 'admin'));
            }
        } 
        else { //not logged in
            return view('welcome', compact('RSVPs', 'blogPo' 'admin'));
        }

    }
}
