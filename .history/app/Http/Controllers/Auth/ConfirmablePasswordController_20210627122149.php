<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class ConfirmablePasswordController extends Controller
{
    /**
     * Show the confirm password view.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('auth.confirm-password');
    }

    /**
     * Confirm the user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function store(Request $request)
    {
        // if (! Auth::guard('web')->validate([
        //     'email' => $request->user()->email,
        //     'password' => $request->password,
        // ])) {
        //     throw ValidationException::withMessages([
        //         'password' => __('auth.password'),
        //     ]);
        // }


        $input = $request->all();

  

        $this->validate($request, [

            'username' => 'required',

            'password' => 'required',

        ]);

  

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if(auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password'])))

        {

            return redirect()->route('home');

        }else{

            return redirect()->route('login')

                ->with('error','Email-Address And Password Are Wrong.');

        }

        $request->session()->put('auth.password_confirmed_at', time());

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
