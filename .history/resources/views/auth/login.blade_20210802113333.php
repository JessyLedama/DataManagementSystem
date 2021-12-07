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
                        <li class="breadcrumb-item active" aria-current="page">Login</li>
                    </ol>
                    </nav>
                    <h3>Login</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->


    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    
    <!-- ****** Login start ****** -->
    <div class="login-area bg-light pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-3">
                    @if (session()->has('success'))
                        <span class="alert alert-success">
                            {{ session('success') }}
                        </span>
                    @endif
                </div>
                <div class="col-md-12">
                    <div class="myForm login-form mb-5">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        @if
                        <div class="mb-5">
                            <label class="form-label" for="email" :value="__('Email or  Phone')">Email or Phone</label>
                            <input type="text" placeholder="Your Email or Phone" class="form-control" id="email" name="email" :value="{{ old('email') ?: old('phone')}}" required autofocus>
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