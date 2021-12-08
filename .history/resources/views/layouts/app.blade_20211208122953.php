<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


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

        <footer>
            @extends('layouts/footer')
        </footer>
        
