@extends('layouts.app')

@section('title', 'Mileage Verification Requests | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mileage Verification Requests</li>
                        </ol>
                    </nav>

                    <h3>Mileage Verification Requests</h3>
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
                            Mileage Verification Requests
                    </span>
                    <a href="{{ route('cities-create') }}" class="pull-right">
                        Add Mileage Verification Request
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('cities-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Mileage Verification Requests
                    </h4>

                    <a href="{{ route('cities-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Mileage Verification Request
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($mileageVerifications as $mileageVerification)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($mileageVerification->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $mileageVerification) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this request?') ? document.getElementById('delete-form-{{ $mileageVerification->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $mileageVerification->id }}" action="{{ route('delete-user', $mileageVerification) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach


                <div id="pagination">
                    {{ $mileageVerifications->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
