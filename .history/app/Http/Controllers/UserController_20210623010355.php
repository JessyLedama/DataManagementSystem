<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;

class UserController extends Controller
{
    public function profile()
    {

        $user = Auth::user();
        
        $profile = User::where('id', Auth::id())->first();

        return view('auth.profile.index', compact('user', 'profile'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $profile = $request->file('profile')->store('profile', ['disk' => 'public']);

        $user->update($request->except(['password', ]) + [

            'profile'  =>
            'password' => $request->password ? Hash::make($request->password) : $user->getAuthPassword()

        ]);

        session()->flash('success', 'Account has been updated.');

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
