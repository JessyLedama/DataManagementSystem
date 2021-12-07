<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Car Models | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Models</li>
                        </ol>
                    </nav>

                    <h3>Car Models</h3>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <section class="clearfix admin-adjust">

        <article class="card pull-right admin-form">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    
                    <a href="{{ route('logbook-car-search-create') }}" class="pull-right heading">
                        Add Car Model 
                    </a>
                </h4>

                <!-- Mobile View -->
                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('logbook-car-search-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Car Models
                    </h4>

                    <a href="{{ route('logbook-car-search-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Car Model
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Model</th>

                            <th scope="col">Make</th>
                            
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($carModels as $carMake)
                    <tbody>
                        <tr>
                            <td scope="row">
                                {{ ucwords($carMake->name) }}
                            </td>

                            <td>
                                <div class="manage-safari pull-right">
                                    <a href="{{ route('vehicle-transfer-edit', $carMake) }}">
                                        <i class="lni-pencil-alt"></i>
                                        Edit
                                    </a>

                                    <a onclick="confirm('Are you sure to delete this make?') ? document.getElementById('delete-form-{{ $carMake->id }}').submit() : NaN">
                                        <i class="lni-pencil-alt"></i>
                                        Delete
                                    </a>

                                    <form id="delete-form-{{ $carMake->id }}" action="{{ route('delete-user', $carMake) }}" method="post">

                                        @csrf 

                                        @method('DELETE')

                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                
                <div id="pagination">
                    {{ $carModels->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
