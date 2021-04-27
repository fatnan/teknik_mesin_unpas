@extends('frontend.layouts.app')

@section('title')
   login
@endsection

@section('content')
<div class="limiter">
    <div class="container-login100" style="background-image: url('../images/background-login.jpg');">
        <div class="wrap-login100 p-t-30 p-b-50">
            <span class="login100-form-title p-b-41 pb-5">
                Account Login
            </span>
            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-b-33 p-t-5">
                @csrf
                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input  id="password" type="password" class="input100  @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>

                <div class="container-login100-form-btn m-t-32 pt-3 pb-3">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                    
                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>
@endsection
