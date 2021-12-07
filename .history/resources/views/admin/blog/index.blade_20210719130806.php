<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@extends('admin.menu')

@section('title', 'Blog Posts | ' . config('app.name'))

@section('content')
    <!-- breadcrumb Start-->
    <div class="admin-adjust breadcrumb-area bg-light p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
                        </ol>
                    </nav>

                    <h3>Blog Posts</h3>
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
                    
                    <a href="{{ route('blog-create') }}" class="pull-right heading">
                        Add Blog Post
                    </a>
                </h4>

                <!-- Mobile -->
                <div class="clearfix mobile">
                    <h4>
                        <a href="{{ route('blog-list') }}" id="back-to-menu">
                            <i class="lnr lnr-arrow-left"></i>
                        </a>
                        
                        Blog Posts
                    </h4>

                    <a href="{{ route('blog-create') }}">
                        <i class="lnr lnr-file-add"></i>
                        Add Blog Post
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
                            <th scope="col">Title</th>

                            <th scope="col">Image</th>

                            <th scope="col">Preview</th>
                            
                            <th scope="col">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($blogPosts as $blogPost)
                    <tbody>
                        <tr>
                            <td scope="row">
                                {{ ucwords($blogPost->title) }}
                            </td>

                            <td>
                                <img class="admin-list-image" src="{{ asset('/storage/'.$blogPost->image) }}">
                            </td>

                            <td>
                                <div class="manage-safari pull-right">
                                    <a href="{{ route('blog-edit', $blogPost) }}">
                                        <i class="lni-pencil-alt"></i>
                                        Edit
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>

                <div id="pagination">
                    {{ $blogPosts->links() }}
                </div>
            </div>
        </article>
    </section>
@endsection
