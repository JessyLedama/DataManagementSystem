@extends('layouts.app')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Phone Verification</li>
                    </ol>
                    </nav>
                    <h3>Phone Verification</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    @if (session()->has('success'))
        <span class="alert alert-success">
            {{ session('success') }}
        </span>
    @endif
    <!-- ****** Phone Verification start ****** -->
    <div class="login-area bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="myForm login-form mb-5">
                        <form method="POST" action="{{ route('verify-sms') }}">
                        @csrf
                        <div class="mb-5">
                            <label class="form-label" for="phone_verification" :value="__('Verification PHone')">Phone Verification</label>
                            <input type="text" placeholder="Enter your phone verification number" class="form-control" id="phone_verification" name="phone_verification" :value="{{ old('phone_verification') ?: old('phone_verification')}}" required autofocus>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="password" :value="__('password')">Password</label>
                            <input type="password" placeholder="Your Password" class="form-control" id="password" name="password" :value="old('password')" required>
                        </div>
                        
                        <div class="mb-3 form-check">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                
                                <div class="col-md-6 forget-pass">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">Forgot password?</a>
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                        <button type="submit">Submit</button>
                        </form>
                        
                        <p class="text-center pt-4 mb-0"><a href="{{ route('register') }}">Sign up for an account.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Login End ****** -->
@endsection