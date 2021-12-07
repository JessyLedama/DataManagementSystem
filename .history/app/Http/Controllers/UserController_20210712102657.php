<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\CarMake;
use App\Models\ContactUs;
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

    public function searchCars()
    {
        $cars = Car::paginate();
        $carMakes = CarMake::all();

        return view('user.searchcars', compact('cars', 'carMakes'));
    }

    public function carInsurance()
    {
        return view('user.carinsurance');
    }

    public function aboutUs()
    {
        return view('user.aboutus');
    }

    public function contactUs()
    {
        return view('contactus');
    }

    public function contactUsStore(Request $request)
    {
        $contact = ContactUs::create($request->all());

        session()->flash('success', 'Your message has been recived! We will get back to you soon.');

        return view('contactus');
    }
}
