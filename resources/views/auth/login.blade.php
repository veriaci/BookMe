@extends('layouts.my-account')

@section('content')
<section class="my_account_area pt--80 pb--55 bg--white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="my__account__wrapper">
                <h3 class="account__title">{{ __('Login') }}</h3>

                <div class="account__form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input__box">
                            <label for="email"> {{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input__box">
                            <label for="password"> {{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form__btn">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <input class="input-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="label-for-checkbox" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>

                                @if (Route::has('password.request'))
                                    <a class="forget_pass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <a class="forget_pass"  href="{{route('register')}}" >
                                    Don't have an Account?
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
