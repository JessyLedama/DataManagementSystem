@extends('layouts.app')
 
 @section('content')
   <!-- breadcrumb Start-->
   <div class="breadcrumb-area bg-light p-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
             <ol class="breadcrumb">
               <li class="breadcrumb-item">
                   <a href="index.html">Home</a>
                </li>

               <li class="breadcrumb-item active" aria-current="page">User Create Logbook Car Search Request</li>
             </ol>
           </nav>
           <h3>Create A New Logbook Car Search Request</h3>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Breadcrumb Start ****** -->
   @include('admin.settings')
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
 
             <form method="POST" action="{{ route('car-makes-store') }}">
             @csrf
               <div class="row">

                  <!-- Name -->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="mb-3">
                        
                        <label for="name" class="form-label" :value="__('Name')">Car Name</label>
                        
                        <input type="text" name="name" placeholder="Car Name" class="form-control" id="name" :value="old('name')" required autofocus>
                      </div>
                    </div>
                  </div>

                  <!-- Email -->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="mb-3">
                        
                        <label for="email" class="form-label" :value="__('Email')">Email</label>
                        
                        <input type="email" name="email" placeholder="Your Email" class="form-control" id="email" :value="old('email')" required>
                      </div>
                    </div>
                  </div>

                  <!-- Phone -->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="mb-3">
                        
                        <label for="phone" class="form-label" :value="__('Phone')">Phone Number</label>
                        
                        <input type="text" name="phone" placeholder="Phone Number" class="form-control" id="phone" :value="old('phone')" required>
                      </div>
                    </div>
                  </div>

                  <!-- Registration Number -->
                  <div class="col-md-6">
                    <div class="mb-3">
                      <div class="mb-3">
                        
                        <label for="registration_no" class="form-label" :value="__('Registration')">Registration Number</label>
                        
                        <input type="text" name="registration_no" placeholder="Registration Number" class="form-control" id="registration_no" :value="old('registration_no')" required>
                      </div>
                    </div>
                  </div>

               </div>

               <button type="submit">Submit</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Register Form End ****** -->
 
 @endsection