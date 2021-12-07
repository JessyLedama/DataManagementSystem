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
                            <input type="text" placeholder="Enter verification code" class="form-control" id="phone_verification" name="phone_verification" :value="{{ old('phone_verification') ?: old('phone_verification')}}" required autofocus>
                        </div>
                        
                        <button type="submit">V</button>
                        </form>
                        
                        <p class="text-center pt-4 mb-0"><a href="{{ route('register') }}">Sign up for an account.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ****** Login End ****** -->
@endsection