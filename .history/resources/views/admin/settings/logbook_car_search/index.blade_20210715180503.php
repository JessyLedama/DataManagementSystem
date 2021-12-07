<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Logbook Car Search Requests | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Logbook Car Search Requests</li>
                        </ol>
                    </nav>

                    <h3>Logbook Car Search Requests</h3>
                </div>
                
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <section class="clearfix admin-adjust">

        <article class="card pull-right">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    
                    <a href="{{ route('logbook-car-search-create') }}" class="pull-right">
                        Add Logbook Car Search Request 
                    </a>
                </h4>

                <!-- Mobile View -->
                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('logbook-car-search-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Logbook Car Search Requests
                    </h4>

                    <a href="{{ route('logbook-car-search-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Logbook Car Search Request
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
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Registration No.</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($logbookCarSearches as $vehicleTransferRequest)
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{ ucwords($vehicleTransferRequest->name) }}
                            </th>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->phone) }}
                            </td>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->registration_no) }}
                            </td>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->vehicle_type) }}
                            </td>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->engine_capacity) }}
                            </td>

                            <td>
                            <div class="manage-safari pull-right">
                                <a href="{{ route('vehicle-transfer-edit', $vehicleTransferRequest) }}">
                                    <i class="lni-pencil-alt"></i>
                                    Edit
                                </a>

                                <a onclick="confirm('Are you sure to delete this request?') ? document.getElementById('delete-form-{{ $vehicleTransferRequest->id }}').submit() : NaN">
                                    <i class="lni-pencil-alt"></i>
                                    Delete
                                </a>

                                <form id="delete-form-{{ $vehicleTransferRequest->id }}" action="{{ route('delete-user', $vehicleTransferRequest) }}" method="post">

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
                    {{ $logbookCarSearches->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
