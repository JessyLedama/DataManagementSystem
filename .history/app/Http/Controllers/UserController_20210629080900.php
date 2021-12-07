<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Storage;

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

        // $profile = $request->file('profile')->store('profile', ['disk' => 'public']);

        $profile = Storage::disk('s3')->put('avatars/1', $request->file('profile'));

        $user->update($request->except(['password', ]) + [

            'profile'  => $profile,
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

    public function sellCar()
    {
        return view('auth.profile.index', compact('user', 'profile'));
    }
}
