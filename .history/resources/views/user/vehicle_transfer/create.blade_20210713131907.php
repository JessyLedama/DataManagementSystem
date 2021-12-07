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
           <h3>Transfer A Vehicle to another user</h3>
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
 
             <form method="POST" action="{{ route('vehicle-transfer-store') }}">
             @csrf
               <div class="row">
                 <div class="col-md-6">
                <div class="mb-3">
                    <div class="mb-3">
                        <label for="name" class="form-label" :value="__('Name')">Model Name</label>
                        
                        <input type="text" name="name" placeholder="Car Name" class="form-control" id="name" :value="old('name')" required autofocus>
                    </div>
                </div>

                   <h4>Select Make</h4>

                    <select name="makeId" required>
                        @foreach ($carMakes as $make)
                            <option value="{{ $make->id }}" {{ $make->id == old('makeId') ? 'selected' : ''}}>
                                    {{ ucwords($make->name) }}
                            </option>
                        @endforeach
                    </select>

                    @error('makeId')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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