<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\CarMake;
use App\Models\CarBody;
use App\Models\ContactUs;
use App\Models\CoverTypes;
use App\Models\CarModel;
use App\Models\CarPrice;
use App\Models\EngineType;
use App\Models\EngineSize;
use App\Models\CarColor;
use App\Models\Cities;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function profile()
    {

        $user = Auth::user();

        $admin = User::where('role', 'admin')->first();
        
        $profile = User::where('id', Auth::id())->first();
 
        if ($user->name == $admin->name) //if user is admin
        { 
            return view('admin.dashboard', compact('user', 'profile', 'admin'));
        }elseif( $user->name != $admin->name) { //user is not admin
            return view('auth.profile.index', compact('user', 'profile', 'admin'));
        }

        // return view('admin.dashboard', compact('user', 'profile', 'admin'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if($request->hasFile('profile')){
            $profile = $request->file('profile')->store('profiles');

            $user->update($request->except(['password', 'profile']) + [
                'profile'  => $profile,
                'password' => $request->password ? Hash::make($request->password) : $user->getAuthPassword()
    
            ]);
        } else {
            $user->update($request->all());
        }

        session()->flash('success', 'Your profile has been updated.');

        return back();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function carInsurance()
    {
        $carBodies = CarBody::all();

        $coverTypes = CoverTypes::all();

        return view('user.carinsurance', compact('carBodies', 'coverTypes'));
    }

    public function aboutUs()
    {
        return view('aboutus'); 
    }

    public function contactUs()
    {
        return view('contactus');
    }

    public function contactUsStore(Request $request)
    {
        $contact = ContactUs::create($request->all());

        session()->flash('success', 'Your message has been received! We will get back to you soon.');

        return view('contactus');
    }

    public function sendSMS()
    {
        $url = 'https://sms.zeiya.co.ke/api/services/sendsms/';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json')); //setting custom header

        $verificationCode = random_int(100000, 999999);

        $curl_post_data = array(
                //Fill in the request parameters with valid values
                'partnerID' => '2368',
                'apikey' => 'e97b2aef8865a292b33b8710622db5da',
                'mobile' => Auth::user()->phone,
                'message' => 'Welcome to CARBAZAAR. Kindly enter this code to verify your phone '.$verificationCode,
                'shortcode' => 'CARBAZAAR',
                'pass_type' => 'plain', //bm5 {base64 encode} or plain
        );

        $storeVerificationCode = User::where('id', Auth::user()->id)->update([
            'verification_code' => $verificationCode
        ]);

        $data_string = json_encode($curl_post_data);

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

        $curl_response = curl_exec($curl);
        // print_r($curl_response);

        
        return view('auth.verify-phone');
    }

    public function verifySMS(Request $request)
    {
        $code = $request->phone_verification;

        if($code == Auth::user()->verification_code)
        {
            $updateUser = User::where('id', Auth::user()->id)->update([
                'status' => 'active'
            ]);

            session()->flash('success', 'Thank you for verifying your phone number.');

            return redirect()->route('/');
        } else{
            session()->flash('error', 'The code you entered is incorrect, try again.');

            return back();
        }
    }
}
