<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="assets/parallax/jarallax.css">
        <link rel="stylesheet" href="assets/dropdown/css/style.css">
        <link rel="stylesheet" href="assets/socicon/css/styles.css">
        <link rel="stylesheet" href="assets/theme/css/style.css">
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"></noscript>
        <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
    </head>
    <body>
        <section data-bs-version="5.1" class="menu cid-s48OLK6784" once="menu" id="menu1-h">
        
            <nav class="navbar navbar-dropdown navbar-fixed-top collapsed">
                <div class="container">
                    <div class="navbar-brand">
                        <span class="navbar-logo">
                            <a href="/">
                                <img src="{{ asset('img/logo.png') }}" alt="Mobirise" style="height: 8rem;">
                            </a>
                        </span>
                        <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="/">DMS</a></span>
                    </div>

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
            </nav>

        </section>
        
        <main>
            @yield('content')
        </main>

        @php 
            use App\Models\User;
            $Admin = User::where('role', 'admin')->first();
            $user = Auth::user();
        @endphp

        <footer>
            @extends('layouts/footer')
        </footer>
        
