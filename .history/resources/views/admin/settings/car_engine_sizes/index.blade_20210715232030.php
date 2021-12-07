<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Car Engine Sizes | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Car Engine Sizes</li>
                        </ol>
                    </nav>

                    <h3>Car Engine Sizes</h3>
                </div>

                
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="admin-adjust clearfix">
        @include('admin.menu')
        @include('admin.settings')

        <article class="card pull-right admin-form">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    <span class="pull-left">
                            Car Engine Sizes
                    </span>
                    <a href="{{ route('car-engine-sizes-create') }}" class="pull-right">
                        Add Car Engine Size
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('car-engine-sizes-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Car Engine Sizes
                    </h4>

                    <a href="{{ route('car-engine-sizes-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Car Engine Size
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($engineSizes as $engineSize)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($engineSize->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $engineSize) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this engineSize') ? document.getElementById('delete-form-{{ $engineSize->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $engineSize->id }}" action="{{ route('delete-user', $engineSize) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $engineSizes->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
