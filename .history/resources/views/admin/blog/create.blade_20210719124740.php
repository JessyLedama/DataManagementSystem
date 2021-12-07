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

               <li class="breadcrumb-item active" aria-current="page">Admin Create Blog Post</li>
             </ol>
           </nav>
           <h3>Create A New Blog Post</h3>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Breadcrumb Start ****** -->


   <!-- ****** Register Form Start ****** -->
   <div class="admin-adjust login-area register-area bg-light pb-5">
     <div class="container">
       <div class="row admin-form">
         <div class="col-md-12">
           <div class="login-form myForm register-form mb-5">
             
             <!-- Session Status -->
             <x-auth-session-status class="mb-4" :status="session('status')" />
 
             <!-- Validation Errors -->
             <x-auth-validation-errors class="mb-4" :errors="$errors" />
 
             <form method="POST" action="{{ route('blog-store') }}">
             
             @csrf
               <div class="row">
                 <div class="col-md-6">
                   <div class="mb-3">
                     <div class="mb-3">
                       
                       <!-- Title -->
                       <label for="title" class="form-label" :value="__('Title')">Title</label>
                       
                       <input type="text" name="title" placeholder="Blog Title" class="form-control" id="title" :value="old('title')" required autofocus>

                       <!-- Image -->
                       <label for="image" class="form-label" :value="__('Image')">Image</label>

                       <input type="file"  class="form-control" name="image" accept="image/*">

                       <!-- Content -->
                       <label for="content" class="form-label" :value="__('Content')">Content</label>
                        <div class="mb-4">
                            <label class="form-label">Content <span>Blog Content</span></label>
                            <textarea name="content" rows="3" class="form-control"></textarea>
                        </div>

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