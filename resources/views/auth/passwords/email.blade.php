@extends('home.layouts.app')

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
{{--                                <div class="kt-login__head">--}}
{{--                                    <h3 class="kt-login__title " style="color: #478fcd">Changer votre mot de passe</h3>--}}
{{--                                </div>--}}
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <form class="kt-form" method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="input-group">
                                        <input class="form-control @error('email') is-invalid @enderror" style="background-color: #478fcd" type="text" placeholder="Email" name="email" >
                                    </div>
                                    @error('email')
                                    <span class="alert alert-danger mt-1" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="kt-login__actions mb-1">
                                        <button  style="background-color: #478fcd" class="btn btn-pill kt-login__btn-primary">Evoyer un lien de renitialisation</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
