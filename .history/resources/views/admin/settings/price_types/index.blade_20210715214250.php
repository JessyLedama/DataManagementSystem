<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Price Types | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Price Types</li>
                        </ol>
                    </nav>

                    <h3>Price Types</h3>
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
                    <span class="pull-left">
                            Price Types
                    </span>
                    <a href="{{ route('car-price-create') }}" class="pull-right">
                        Add Price Type
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('car-price-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Car Price Types
                    </h4>

                    <a href="{{ route('car-price-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Car Price Type
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($carPriceTypes as $priceType)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($priceType->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('car-price-edit', $priceType) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this price type') ? document.getElementById('delete-form-{{ $priceType->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $priceType->id }}" action="{{ route('delete-user', $priceType) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $carPriceTypes->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
