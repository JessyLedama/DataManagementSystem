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

               <li class="breadcrumb-item active" aria-current="page">User Vehicle Transfer</li>
             </ol>
           </nav>
           <h3>Submit A Vehicle Transfer Request</h3>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Breadcrumb Start ****** -->
   
   <!-- ****** Vehicle Transfer Form Start ****** -->
   <div class="login-area register-area bg-light pb-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="login-form myForm register-form mb-5">
             
             <!-- Session Status -->
             <x-auth-session-status class="mb-4" :status="session('status')" />
 
             <!-- Validation Errors -->
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
 
             <form method="POST" action="{{ route('vehicle-transfer-store') }}">
             @csrf
               <div class="row">
                 <!-- Name -->
                 <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name" class="form-label" :value="__('Name')">Your Name</label>
                            
                            <input type="text" name="name" placeholder="Your Name" class="form-control" id="name" :value="old('name')" required autofocus>
                        </div>
                    </div>
                 </div>

                 <!-- Email (Optional) -->
                 <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="email" class="form-label" :value="__('Email')">Email (Optional)</label>
                            
                            <input type="text" name="email" placeholder="Email (Optional)" class="form-control" id="email" :value="old('email')">
                        </div>
                    </div>
                 </div>

                 <!-- Phone -->
                 <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="phone" class="form-label" :value="__('Phone')">Phone</label>
                            
                            <input type="text" name="phone" placeholder="Phone" class="form-control" id="phone" :value="old('phone')" required>
                        </div>
                    </div>
                 </div>

                 <!-- Type of Transfer -->
                 <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="transfer_type" class="form-label" :value="__('Type of Transfer')">Type of Transfer</label>
                            
                            <input type="text" name="transfer_type" placeholder="Type of Transfer" class="form-control" id="transfer_type" :value="old('transfer_type')" required>
                        </div>
                    </div>
                 </div> 

                 <!-- Type of Vehicle -->
                 <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="vehicle_type" class="form-label" :value="__('Type of Vehicle')">Type of Vehicle</label>
                            
                            <input type="text" name="vehicle_type" placeholder="Type of Vehicle" class="form-control" id="vehicle_type" :value="old('vehicle_type')" required>
                        </div>

                        
                    </div>
                 </div>

                 <!-- Engine Capacity -->
                 <div class="col-md-12">
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="engine_capacity" class="form-label" :value="__('Engine Capacity')">Engine Capacity</label>
                            
                            <input type="text" name="engine_capacity" placeholder="Engine Capacity" class="form-control" id="engine_capacity" :value="old('engine_capacity')" required>
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
   <!-- ****** Vehicle Transfer Form End ****** -->
 
 @endsection