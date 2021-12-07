<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Users | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Profile</li>
                        </ol>
                    </nav>

                    <h3>Update Profile</h3>
                </div>

                
            </div>
        </div>
    </div>
    <!-- ****** Breadcrumb end ****** -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <section class="admin-adjust clearfix">

        <article class="admin-form card pull-right">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    
                    <a href="{{ route('create-user') }}" class="pull-right heading">
                        Add user
                    </a>
                </h4>

                <!-- Mobile -->
                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('all-users') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Users
                    </h4>

                    <a href="{{ route('create-user') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add user
                    </a>
                </div>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session('success') }}
                    </span>
                @endif


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($users as $cover)
                    <tbody>
                        <tr>
                            <td scope="row">
                                {{ ucwords($cover->name) }}
                            </td>

                            <td>
                                <div class="manage-safari pull-right">
                                    <a href="{{ route('car-engine-types-edit', $cover) }}">
                                        <i class="lni-pencil-alt"></i>
                                        Edit
                                    </a>

                                    <a onclick="confirm('Are you sure to delete this insurance cover?') ? document.getElementById('delete-form-{{ $cover->id }}').submit() : NaN">
                                        <i class="lni-pencil-alt"></i>
                                        Delete
                                    </a>

                                    <form id="delete-form-{{ $cover->id }}" action="{{ route('delete-user', $cover) }}" method="post">

                                        @csrf 

                                        @method('DELETE')

                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <div id="pagination">
                    {{ $users->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
