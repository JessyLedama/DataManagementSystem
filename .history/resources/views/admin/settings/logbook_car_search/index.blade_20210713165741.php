@extends('layouts.app')

@section('title', 'Logbook Car Search Requests | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
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
    
    <section class="clearfix">
        @include('admin.menu')
        @include('admin.settings')

        <article class="card pull-right">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    <span class="pull-left">
                            Logbook Car Search Requests
                    </span>
                    <a href="{{ route('cities-create') }}" class="pull-right">
                        Add Logbook Car Search Request
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('cities-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Logbook Car Search Requests
                    </h4>

                    <a href="{{ route('cities-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Logbook Car Search Request
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($logbookCarSearches as $logbookCarSearches)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($logbookCarSearches->current_owner) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $logbookCarSearches) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this request?') ? document.getElementById('delete-form-{{ $logbookCarSearches->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $logbookCarSearches->id }}" action="{{ route('delete-user', $logbookCarSearches) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach


                <div id="pagination">
                    {{ $vehicleTransferRequests->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
