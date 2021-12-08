@extends('layouts.app')
 
@section('content')

	@if (session()->has('success'))
		<span class="alert alert-success">
			{{ session('success') }}
		</span>
	@endif
	
	<!DOCTYPE html>
<html  >

<body>
  


<section data-bs-version="5.1" class="header1 cid-s48MCQYojq mbr-fullscreen mbr-parallax-background" id="header1-f">
    
    <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(255, 255, 255);"></div>

    <div class="align-center container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-2"><strong>Data Management System</strong></h1>
                
                <p class="mbr-text mbr-fonts-style display-7">This is a simple Data Management System. It is built on PHP Laravel 8 and uses a MySQL Database.&nbsp;</p>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content1 cid-s48udlf8KU" id="content1-8">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-md-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>User Account Management</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">With this project, you can manage users on your system. Users can create accounts and login to them. On the admin dashboard, you can view and manage users on your system. Admin can Create, Ban, or Suspend a user from the dashboard.<br>There are User Status, which can be used to manage user subscriptions, where if a user's subscription ends their status is automatically changed to inactive, then they can be denied access to certain features.&nbsp;<br>There is also User Type, which can manage such users as Admin, Moderator, Editor etc depending on business setup.&nbsp;</h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content1 cid-s48vaXqeL6" id="content1-b">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-md-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Create &amp; Manage Categories</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">On this project you can create and manage different categories for your products. The categories can have subcategories. Through these categories and subcategories, you can filter data presented to the user as you need. This data can also be used to present data in a database through different sorts of reports as you may need them.&nbsp;</h4>
                
            </div>
        </div>
    </div>
</section>

<section data-bs-version="5.1" class="content1 cid-s48vnjULo4" id="content1-c">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-md-9">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2"><strong>Create &amp; Manage Blogs</strong></h3>
                <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7">You can also create and manage different blog posts. You can also group blogs into different categories and subcategories.&nbsp;</h4>
                
            </div>
        </div>
    </div>
</section>


@endsection

	