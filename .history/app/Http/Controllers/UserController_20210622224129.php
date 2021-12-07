<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {

        $user = Auth::user();
        
        $profile = User::where('id', Auth::id())->first();

        return view('auth.profile.index', compact('user', 'profile'));
    }

    pu
}
