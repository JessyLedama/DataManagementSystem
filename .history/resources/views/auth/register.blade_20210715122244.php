@extends('layouts.app')
 
@section('content')
  <!-- breadcrumb Start-->
  <div class="breadcrumb-area bg-light p-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
            </ol>
          </nav>
          <h3>Register</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- ****** Breadcrumb Start ****** -->

  <!-- ****** Register Form Start ****** -->
  <div class="login-area register-area bg-light pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="login-form myForm register-form mb-5">
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('register') }}">
            @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <div class="mb-3">
                      
                      <label for="name" class="form-label" :value="__('Name')">Name</label>
                      <input type="text" name="name" placeholder="Your Name" class="form-control" id="name" :value="old('name')" required autofocus>
                    </div>
                    
                    <label for="email" class="form-label" :value="__('Email')">Email</label>
                    <input type="email" name="email" placeholder="Your Email" class="form-control" id="email" :value="old('email')">

                    <label for="phone" class="form-label" :value="__('phone')">Contact Number</label>
                    <input type="text" name="phone" placeholder="Your Contact Number" class="form-control" id="number" :value="old('phone')" required>
                  </div>
                </div>
                
                <div class="col-md-6">
                  
                  <div class="mb-3">
                    <label for="password" class="form-label" :value="__('password')">Password</label>
                    <input type="password" name="password" placeholder="Your Password" class="form-control" id="password" :value="old('password')" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Your Password" class="form-control" id="password" :value="old('password')" required>
                  </div>
                </div>
              </div>

              <div class="mb-3">
              <label class="pb-2">User Type </label>
                <select class="form-control select2">
                   <option>Select</option> 
                   <option>Individual</option> 
                   <option>Dealer</option>
                </select>
              </div>

              <div class="mb-3 form-check">
                <div class="row">
                  <div class="col-md-6">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I accept the terms and conditions.</label>
                  </div>
                  <div class="col-md-6 forget-pass">
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                  </div>
                </div>
              </div>
              <button type="submit">Submit</button>
            </form>
            <p class="text-center pt-4 mb-0"><a href="{{ route('login') }}">Already registered? Log in here</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ****** Register Form End ****** -->

@endsection