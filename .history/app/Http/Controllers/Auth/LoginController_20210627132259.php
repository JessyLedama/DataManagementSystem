<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
 
class LoginController extends Controller
{
   
    use AuthenticatesUsers;
 
    protected $redirectTo = '/';
 
    protected $username;
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
 
        $this->username = $this->findUsername();
    }
 
    public function findUsername()
    {
        $login = request()->input('login');
 
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
 
        request()->merge([$fieldType => $login]);
 
        return $fieldType;
    }
 
    public function username()
    {
        return $this->username;
    }
}
