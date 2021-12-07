@extends('layouts.app')

@section('title', 'Insurance Requests | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Insurance Requests</li>
                        </ol>
                    </nav>

                    <h3>Insurance Requests</h3>
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
                            Insurance Cover Requests
                    </span>
                    <a href="{{ route('cover-types-create') }}" class="pull-right">
                        Add Insurance Cover Request
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('insurance-requests-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Insurance Cover Requests
                    </h4>

                    <a href="{{ route('cover-types-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Insurance Cover Request
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($insuranceRequests as $insuranceRequest)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($insuranceRequest->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $insuranceRequest) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this insurance request') ? document.getElementById('delete-form-{{ $insuranceRequest->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $insuranceRequest->id }}" action="{{ route('delete-user', $insuranceRequest) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $insuranceRequests->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
