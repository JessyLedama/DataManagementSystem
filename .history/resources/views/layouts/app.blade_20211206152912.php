<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Azimio La Umoja </title> 
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" href="{{ asset('img/carbazaar.png') }}" type="image/x-icon"/>
        <!-- All css file -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('webfonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        
        <!-- ****** Header start ****** -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light ">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="/"><img src="{{ asset('img/carbazaar.png') }}"></a>
                                
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link"href="{{ route('search-cars') }}">Search Cars</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"href="{{ route('sell-car') }}">Sell your car</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('car-insurance') }}">Car insurance</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logbook-car-search-create') }}">Logbook Car Search</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about-us') }}">About us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('contact-us') }}">Contact us</a>
                                        </li>
                                    </ul>

                                    
                                
                                    @php()
                                        $isAdmin = User::where('role', 'admin');
                                    @endphp

                                    
                                    @guest()    
                                        <a class="login-btn" href="{{ route('login') }}">Login</a>
                                        <a class="register-btn" href="{{ route('register') }}">Register</a>
                                                    
                                    @else
                                        <div class="d-flex">
                                            <li class="nav-item dropdown">

                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-user"></i>
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('profile') }}">Account </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
                                                        </li>
                                                </ul>
                                            </li>
                                        </div>
                                    @endguest
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ****** Header end ****** -->

        <main>
            @yield('content')
        </main>

        @php 
            use App\Models\User;
            $Admin = User::where('role', 'admin')->first();
            $user = Auth::user();
        @endphp

        @if(Auth::check())
            @if($user->name == $Admin->name)
                <footer>
                    @extends('layouts/admin_footer')
                </footer>
            @else
                <footer>
                    @extends('layouts/footer')
                </footer>
            @endif
        @endif    
        
