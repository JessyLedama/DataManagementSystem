@extends('layouts.app')

@section('title', 'Car Colors | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Colors</li>
                        </ol>
                    </nav>

                    <h3>Car Colors</h3>
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
                            Car Colors
                    </span>
                    <a href="{{ route('car-transmission-types-create') }}" class="pull-right">
                        Add Car Color
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('car-transmission-types-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Car Colors
                    </h4>

                    <a href="{{ route('car-transmission-types-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Car Color
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($carColors as $carColor)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($carColor->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $carColor) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this carColor') ? document.getElementById('delete-form-{{ $carColor->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $carColor->id }}" action="{{ route('delete-user', $carColor) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $carColors->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
