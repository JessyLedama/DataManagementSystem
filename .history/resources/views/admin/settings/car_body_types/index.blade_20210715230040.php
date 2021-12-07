<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Car Body Types | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">  
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Body Types</li>
                        </ol>
                    </nav>

                    <h3>Car Body Types</h3>
                </div>

                
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="clearfix">

        <article class="card pull-right">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    
                    <a href="{{ route('car-body-create') }}" class="pull-right heading">
                        Add Car Body Type
                    </a>
                </h4>

                <!-- Mobile -->
                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('car-body-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Car Body Types
                    </h4>

                    <a href="{{ route('car-body-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Car Body Type
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($carBodies as $carBodyType)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($carBodyType->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $carBodyType) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this carBodyType') ? document.getElementById('delete-form-{{ $carBodyType->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $carBodyType->id }}" action="{{ route('delete-user', $carBodyType) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $carBodies->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
