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

               <li class="breadcrumb-item active" aria-current="page">Profile</li>
             </ol>
           </nav>
           <h3>Profile</h3>
         </div>
       </div>
     </div>
   </div>
   <!-- ****** Breadcrumb End ****** -->
@endsection