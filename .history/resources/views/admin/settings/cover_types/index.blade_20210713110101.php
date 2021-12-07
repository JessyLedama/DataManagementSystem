@extends('layouts.app')

@section('title', 'Cover Types | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cover Types</li>
                        </ol>
                    </nav>

                    <h3>Cover Types</h3>
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
                            Cities
                    </span>
                    <a href="{{ route('cover-types-create') }}" class="pull-right">
                        Add City
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('cover-types-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Cities
                    </h4>

                    <a href="{{ route('cover-types-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add City
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($covers as $city)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($city->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $city) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this city') ? document.getElementById('delete-form-{{ $city->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $city->id }}" action="{{ route('delete-user', $city) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $cities->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
