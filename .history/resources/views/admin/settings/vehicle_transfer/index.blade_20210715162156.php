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

        <article class="card pull-right">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    
                    <a href="{{ route('cities-create') }}" class="pull-right">
                        Add Vehicle Transfer Request
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('cities-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Vehicle Transfer Requests
                    </h4>

                    <a href="{{ route('cities-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Vehicle Transfer Request
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @php()
                    $i = 1;
                    foreach($row as $i){
                        $i++;
                        echo $i;
                    }
                @endphp

                @foreach ($vehicleTransferRequests as $vehicleTransferRequest)
                @php()
                    $i = 1;
                    foreach($row as $i){
                        $i++;
                        echo $i;
                    }
                @endphp
                    <div class="safari clearfix">
                    <div class="pull-left">
                            {{}}$i
                        </div>
                        <div class="pull-left">
                            {{ ucwords($vehicleTransferRequest->current_owner) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $vehicleTransferRequest) }}">
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
                    </div>
                @endforeach
                
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Type of Transfer</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr>
                            <th scope="row">{{ ucwords($vehicleTransferRequest->current_owner) }}</th>
                            <td>{{ ucwords($vehicleTransferRequest->current_owner) }}</td>
                            <td>{{ ucwords($vehicleTransferRequest->current_owner) }}</td>
                            <td>{{ ucwords($vehicleTransferRequest->current_owner) }}</td>
                        </tr>
                    </tbody>
                </table>
                
                <div id="pagination">
                    {{ $vehicleTransferRequests->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
