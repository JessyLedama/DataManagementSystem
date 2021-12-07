@extends('layouts.app')

@section('title', 'Users | ' . config('app.name'))

@section('content')
    <section class="clearfix">
        @include('admin.menu')

        <article class="card pull-right">
            <div id="safaris">
                <h4 class="clearfix desktop">
                    <span class="pull-left">
                            Users
                    </span>
                    <a href="{{ route('create-user') }}" class="pull-right">
                        Add user
                    </a>
                </h4>

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

                @foreach ($safaris as $safari)
                    <div class="safari clearfix">
                        <div class="pull-left">
                            {{ ucwords($safari->name) }}
                        </div>

                        <div class="manage-safari pull-right">
                            <a href="{{ route('safari.edit', $safari) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit
                            </a>

                            <a href="{{ route('safari.edit-price', $safari) }}">
                                <i class="lni-pencil-alt"></i>
                                Edit Price
                            </a>

                            <a onclick="confirm('Are you sure to delete this safari') ? document.getElementById('delete-form-{{ $safari->id }}').submit() : NaN">
                                <i class="lni-pencil-alt"></i>
                                Delete
                            </a>

                            <form id="delete-form-{{ $safari->id }}" action="{{ route('safari.destroy', $safari) }}" method="post">

                                @csrf

                                @method('DELETE')

                            </form>
                        </div>
                    </div>
                @endforeach

                <div id="pagination">
                    {{ $safaris->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection

@section('css')
    
@endsection