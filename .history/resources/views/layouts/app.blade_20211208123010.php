<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <body>

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
        
