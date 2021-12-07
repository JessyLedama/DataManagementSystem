

<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

    <section class="clearfix">

        <article class="card pull-right">
            <form action="{{ route('profileUpdate') }}" method="post" id="edit-profile-form">
                <h4 class="mobile">
                    <a href="" id="back-to-menu">
                        <i class="lnr lnr-arrow-left"></i>
                    </a>
    
                    My account
                </h4>

                @if (session()->has('success'))
                    <span class="alert alert-success">
                        {{ session()->get('success') }}
                    </span>
                @endif

                @csrf
        
                @method('POST')

                <h4>Full name</h4>

                <div class="input-group clearfix" id="name-group">
                    <input type="text" placeholder="Name" value="{{ old('name', $profile->name) }}" name="name" class="pull-left" required>
                    
                </div>

                <h4>E-mail Address</h4>

                <input type="text" placeholder="E-mail address" value="{{ old('email', $user->email) }}" name="email" id="email-input" required>

                <h4>Phone Number</h4>

                <input type="text" placeholder="Phone" value="{{ old('phone', $user->phone) }}" name="phone" id="phone-input" required>

                <h4>Change password</h4>

                <div class="input-group clearfix" id="password-group">
                    <input type="password" placeholder="Password" name="password" class="pull-left" value="{{ old('password', $user->password) }}">
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" class="pull-right">
                </div>

                <button type="submit">Update Account</button>
            </form>
        </article>
    </section>


@section('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/profile.css') }}">
@endsection