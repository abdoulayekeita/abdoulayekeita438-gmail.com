@extends('home.layouts.app')
@section('style')
@endsection

@section('content')

<div class="container ">
    <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login"  style="margin-top: 80px">
        <div class="kt-portlet container">
            <div class="kt-portlet__body ">
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" >
                    <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__logo">
                                <a href="#">
                                    <img alt="Logo" src="{{asset('images/dashboard/yankadi.png')}}"  style="height: 50px;width: 140px"/>
                                </a>
                            </div>
                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title " style="color: #478fcd">Connectez vous</h3>
                                </div>
                                <form class="kt-form" action="">
                                    <div class="input-group">
                                        <input class="form-control" style="background-color: #478fcd" type="text" placeholder="Email" name="email" autocomplete="off">
                                    </div>
                                    <div class="input-group">
                                        <input class="form-control" style="background-color: #478fcd" type="password" placeholder="Mot de passe" name="password">
                                    </div>
                                    <div class="row kt-login__extra">
                                        <div class="col">
                                        </div>
                                        <div class="col kt-align-right">
                                            <a href="javascript:;" style="color: #478fcd;width: 200px" id="kt_login_forgot" class="kt-link kt-login__link">Mot de passe oublié ?</a>
                                        </div>
                                    </div>
                                    <div class="kt-login__actions mb-1">
                                        <button id="kt_login_signin_submit" style="background-color: #478fcd" class="btn btn-pill kt-login__btn-primary">Valider</button>
                                    </div>
                                </form>
                            </div>
                            <span class="kt-login__account-msg" style="color: #478fcd;width: 200px">
									Vous êtes un nouvel utilisateur ?
								</span>&nbsp;&nbsp;
                            <a  href="{{ route('register') }}"style="color: #478fcd" id="kt_login_signup" class="kt-link kt-link--light kt-login__account-link"> Créez un compte</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--    <div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    <form method="POST" action="{{ route('login') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <div class="form-check">--}}
{{--                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>--}}

{{--                                    <label class="form-check-label" for="remember">--}}
{{--                                        {{ __('Remember Me') }}--}}
{{--                                    </label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-8 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Login') }}--}}
{{--                                </button>--}}

{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
@endsection
@section('script')

@endsection
