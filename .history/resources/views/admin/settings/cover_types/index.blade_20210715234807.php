<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Cover Types | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
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
    
    <section class="admin-adjust clearfix">

        <article class="card pull-right admin-form">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    
                    <a href="{{ route('cover-types-create') }}" class="pull-right ">
                        Add Cover Type
                    </a>
                </h4>

                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('cover-types-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Cover Types
                    </h4>

                    <a href="{{ route('cover-types-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Cover Type
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif

                @foreach ($covers as $cover)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($cover->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('edit-user', $cover) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a onclick="confirm('Are you sure to delete this cover') ? document.getElementById('delete-form-{{ $cover->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $cover->id }}" action="{{ route('delete-user', $cover) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $covers->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
