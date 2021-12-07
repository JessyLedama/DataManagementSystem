<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')
 
 @section('content')
   <!-- breadcrumb Start-->
   <div class="admin-adjust breadcrumb-area bg-light p-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
             <ol class="breadcrumb">
               <li class="breadcrumb-item">
                   <a href="index.html">Home</a>
                </li>

               <li class="breadcrumb-item active" aria-current="page">Admin Create Car Model</li>
             </ol>
           </nav>
           <h3>Create A New Car Model</h3>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Breadcrumb End ****** -->
 
   <!-- ****** Car Makes Form Start ****** -->
   <div class="admin-adjust login-area register-area bg-light pb-5">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="login-form myForm register-form mb-5">
             
             <!-- Session Status -->
             <x-auth-session-status class="mb-4" :status="session('status')" />
 
             <!-- Validation Errors -->
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
 
             <form method="POST" action="{{ route('car-models-store') }}">
             @csrf
               <div class="row">
                 <div class="col-md-6">
                   <div class="mb-3">
                     <div class="mb-3">
                       
                       <label for="name" class="form-label" :value="__('Name')">Model Name</label>
                       
                       <input type="text" name="name" placeholder="Model Name" class="form-control" id="name" :value="old('name')" required autofocus>
                     </div>
                   </div>
                 </div>

                 <div class="col-md-6">
                    <!-- Car Make --->
                    <div class="mb-4">
                      <label class="pb-2">Select Make 
                        <span>Select make for this model  </span>
                      </label>
                    
                      <select class="form-control select2" name="makeId" required>
                        <option>Select</option>
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
               </div>

               <button type="submit" class="btn btn-success">Submit</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Car Makes Form End ****** -->
 
 @endsection