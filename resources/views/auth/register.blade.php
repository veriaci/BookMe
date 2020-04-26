@extends('layouts.my-account')

@section('content')
<section class="my_account_area pt--80 pb--55 bg--white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-12">
            <div class="my__account__wrapper">
                <h3 class="account__title">{{ __('Register') }}</h3>

                <div class="account__form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="input__box">
                            <label for="name">{{ __('Name') }}<span>*</span></label>

                            <div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input__box">
                            <label for="email">{{ __('E-Mail Address') }}<span>*</span></label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input__box">
                            <label for="password">{{ __('Password') }}<span>*</span></label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="input__box">
                            <label for="password-confirm" >{{ __('Confirm Password') }}<span>*</span></label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form__btn">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
