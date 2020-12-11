@extends('home.layouts.app')

@section('content')
    <div class="container ">
        <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login"  style="margin-top: 80px;height: 450px">
            <div class="kt-portlet container">
                <div class="kt-portlet__body ">
                    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" >
                        <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                            <div class="kt-login__container">
                                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                                <div class="card-body">
                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                        </div>
                                    @endif

                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
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
