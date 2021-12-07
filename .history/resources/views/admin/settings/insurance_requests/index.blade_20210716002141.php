<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Car Insurance Requests | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Insurance Requests</li>
                        </ol>
                    </nav>

                    <h3>Car Insurance Requests</h3>
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
                    
                    <a href="{{ route('logbook-car-search-create') }}" class="pull-right">
                        Add Car Insurance Request 
                    </a>
                </h4>

                <!-- Mobile View -->
                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('logbook-car-search-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Car Insurance Requests
                    </h4>

                    <a href="{{ route('logbook-car-search-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Car Insurance Request
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
                            <th scope="col">Vehicle Category</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Vehicle Type</th>
                            <th scope="col">Cover Type</th>
                            <th scope="col">Vehicle Value</th>
                            <th scope="col">Vehicle Registration</th>
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($insuranceRequests as $logbookSearch)
                    <tbody>
                        <tr>
                            <td scope="row">
                                {{ ucwords($logbookSearch->vehicle_category) }}
                            </td>
                            
                            <td>
                                {{ ucwords($logbookSearch->mobile) }}
                            </td>
                            
                            <td>
                                {{ ucwords($logbookSearch->vehicle_type) }}
                            </td>

                            <td>
                                {{ ucwords($logbookSearch->cover_type) }}
                            </td>

                            <td>
                                {{ ucwords($logbookSearch->vehicle_value) }}
                            </td>

                            <td>
                                {{ ucwords($logbookSearch->vehicle_registration) }}
                            </td>

                            <td>
                                <div class="manage-safari pull-right">
                                    <a href="{{ route('vehicle-transfer-edit', $logbookSearch) }}">
                                        <i class="lni-pencil-alt"></i>
                                        Edit
                                    </a>

                                    <a onclick="confirm('Are you sure to delete this request?') ? document.getElementById('delete-form-{{ $logbookSearch->id }}').submit() : NaN">
                                        <i class="lni-pencil-alt"></i>
                                        Delete
                                    </a>

                                    <form id="delete-form-{{ $logbookSearch->id }}" action="{{ route('delete-user', $logbookSearch) }}" method="post">

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
                    {{ $insuranceRequests->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
