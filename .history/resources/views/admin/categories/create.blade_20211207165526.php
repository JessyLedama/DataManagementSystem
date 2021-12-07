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

               <li class="breadcrumb-item active" aria-current="page">Create Categories</li>
             </ol>
           </nav>
           <h3>Create A New Category</h3>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Breadcrumb Start ****** -->


   <!-- ****** Product Form Start ****** -->
   <div class="admin-adjust login-area register-area bg-light pb-5">
     <div class="container">
       <div class="row admin-form">
         <div class="col-md-12">
           <div class="login-form myForm register-form mb-5">
             
             <!-- Session Status -->
             <x-auth-session-status class="mb-4" :status="session('status')" />
 
             <!-- Validation Errors -->
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
 
             <form method="POST" action="{{ route('categories-store') }}" enctype="multipart/form-data">
             
             @csrf
               <div class="row">
                 <div class="col-md-6">
                   <div class="mb-3">
                     <div class="mb-3">
                       
                       <label for="name" class="form-label" :value="__('Name')">Name</label>
                       
                       <input type="text" name="name" placeholder="Product Name" class="form-control" id="name" :value="old('name')" required autofocus>

                       <label for="name" class="form-label" :value="__('Product Image')">Product Image</label>
                       
                       <input type="file" name="image" placeholder="Product Image" class="form-control" id="image" :value="old('image')" required autofocus>

                       <label for="category" class="form-label" :value="__('Category')">Category</label>
                       
                       <input type="text" name="categoryId" placeholder="Category" class="form-control" id="category" :value="old('category')" required autofocus>

                       <label for="details" class="form-label" :value="__('Details')">Details</label>
                       
                       <input type="text" name="details" placeholder="Category" class="form-control" id="details" :value="old('details')" required autofocus>

                     </div>
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
   <!-- ****** Register Form End ****** -->
 
 @endsection