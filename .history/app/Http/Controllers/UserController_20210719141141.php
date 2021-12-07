<?php

namespace App\Http\Controllers;

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

        $Admin = User::where('role', 'admin')->first();
        
        $profile = User::where('id', Auth::id())->first();

        if ($user->name == $Admin)
        { 
            return view('admin.dashboard', compact('user', 'profile'));
        }else {
            return view('auth.profile.index', compact('user', 'profile'));
        }
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
        $carModels = CarModel::all();
        $carBodies = CarBody::all();
        $carPrices = CarPrice::all();
        $engineTypes = EngineType::all();
        $engineSizes = EngineSize::all();
        $carColors = CarColor::all();
        $cities = Cities::all();

        $carsCount = count($cars); 
        $adsInCity = count

        return view('user.searchcars', compact('cars', 'carMakes', 'carsCount', 'carBodies', 'carModels', 'carPrices', 'engineTypes', 'engineSizes', 'carColors', 'cities'));
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