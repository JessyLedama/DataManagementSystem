<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Auth\

class UserController extends Controller
{
    public function profile()
    {

        $user = Auth::user();
        
        $profile = User::where()
    }
}
