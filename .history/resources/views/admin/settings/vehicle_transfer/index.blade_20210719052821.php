<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Vehicle Transfer Requests | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vehicle Transfer Requests</li>
                        </ol>
                    </nav>

                    <h3>Vehicle Transfer Requests</h3>
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
                    
                    <a href="{{ route('vehicle-transfer-create') }}" class="pull-right heading">
                        Add Vehicle Transfer Request 
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('vehicle-transfers-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Vehicle Transfer Requests
                    </h4>

                    <a href="{{ route('vehicle-transfer-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Vehicle Transfer Request
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
                            <th scope="col">Type of Transfer</th>
                            <th scope="col">Type of Vehicle</th>
                            <th scope="col">Vehicle Capacity</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($vehicleTransferRequests as $vehicleTransferRequest)
                    <tbody>
                        <tr>
                            <th scope="row">
                                {{ ucwords($vehicleTransferRequest->name) }}
                            </th>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->phone) }}
                            </td>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->transfer_type) }}
                            </td>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->vehicle_type) }}
                            </td>
                            
                            <td>
                                {{ ucwords($vehicleTransferRequest->engine_capacity) }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                
                <div id="pagination">
                    {{ $vehicleTransferRequests->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
