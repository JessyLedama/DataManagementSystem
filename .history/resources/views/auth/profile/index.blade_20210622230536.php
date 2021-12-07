<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" href="img/carbazaar.png" type="image/x-icon"/>
	
	<!-- All css file -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<!-- <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/select2.min.css" />
	<link rel="stylesheet" href="{{ asset('webfonts/flaticon/flaticon.css') }}">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/dropzone.css" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- ****** Header start ****** -->
<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg navbar-light ">
				  <div class="container-fluid">
				    <a class="navbar-brand" href="/"><img src="img/carbazaar.png"></a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
				    
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
				      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				        <li class="nav-item">
				          <a class="nav-link"href="search-cars.html">Search Cars</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link"href="sell-your-car.html">Sell your car</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="car-insurance.html">Car insurance</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="about-us.html">About us</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="contact-us.html">Contact us</a>
				        </li>
				      </ul>
				      
					  <div class="d-flex">
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            <i class="fas fa-user"></i>
				          </a>
				          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
				            <li><a class="dropdown-item" href="profile">Account</a></li>
				            <li><a class="dropdown-item" href="login.html">Log Out</a></li>
				            <li><a class="dropdown-item" href="register.html">Register</a></li>
				          </ul>
				        </li>
				      </div>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- ****** Header end ****** -->

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

    <section class="clearfix">

        <article class="card pull-right">
            <form action="{{ route('profileUpdate') }}" method="post" id="edit-profile-form">
                <h4 class="mobile">
                    <a href="" id="back-to-menu">
                        <i class="lnr lnr-arrow-left"></i>
                    </a>
    
                    My account
                </h4>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session()->get('success') }}
                    </span>
                @endif

                @csrf
        
                @method('POST')

                <h4>Full name</h4>

                <div class="input-group clearfix" id="name-group">
                    <input type="text" placeholder="Name" value="{{ old('name', $profile->name) }}" name="name" class="pull-left" required>
                    
                </div>

                <h4>E-mail Address</h4>

                <input type="text" placeholder="E-mail address" value="{{ old('email', $user->email) }}" name="email" id="email-input" required>

                <h4>Phone Number</h4>

                <input type="text" placeholder="Phone" value="{{ old('phone', $user->phone) }}" name="phone" id="phone-input" required>

                <h4>Change password</h4>

                <div class="input-group clearfix" id="password-group">
                    <input type="password" placeholder="Password" name="password" class="pull-left" value="{{ old('password', $user->password) }}">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="pull-right">
                </div>

                <button type="submit">Update Account</button>
            </form>
        </article>
    </section>


@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/profile.css') }}">
@endsection