@php 
    use App\Models\User;
    $Admin = User::where('role', 'admin')->first();
    $user = Auth::user();
@endphp


@if($user->name == $Admin->name)
    @include('admin.menu')
@else
    @include('layouts.app')
@endif

