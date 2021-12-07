<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\RSVP;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $blogPosts = Blog::all();
                
        if(Auth::check())
        {
            $userName = Auth::user()->name;
            
            // if($userName == $admin->name) //if user is admin
            // {
                
            //     return view('welcome', compact('blogPosts'));
            // } 
            // else //if user is not admin
            // {
            //     return view('welcome', compact('blogPosts'));
            // }

            return view('welcome', )
        } 
        else { //not logged in
            return view('welcome', compact('blogPosts'));
        }

    }
}
