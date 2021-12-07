@extends('layouts.app')
 
@section('content')

	@if (session()->has('success'))
		<span class="alert alert-success">
			{{ session('success') }}
		</span>
	@endif
	


@endsection

	