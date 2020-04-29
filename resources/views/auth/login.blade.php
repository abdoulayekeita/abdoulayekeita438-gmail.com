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
                                <form class="kt-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="input-group">
                                        <input class="form-control @error('email') is-invalid @enderror" style="background-color: #478fcd" type="text" placeholder="Email" name="email" >
                                    </div>
                                    @error('email')
                                        <span class="alert alert-danger mt-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="input-group">
                                        <input class="form-control @error('password') is-invalid @enderror" style="background-color: #478fcd" type="password" placeholder="Mot de passe" name="password">
                                    </div>
                                    @error('password')
                                    <span class="alert alert-danger mt-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="row kt-login__extra">
                                        <div class="col">
                                        </div>
                                        <div class="col kt-align-right">
                                            <a href="{{ route('password.request') }}" style="color: #478fcd;width: 200px" id="kt_login_forgot" class="kt-link kt-login__link">Mot de passe oublié ?</a>
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
@endsection
@section('script')

@endsection
