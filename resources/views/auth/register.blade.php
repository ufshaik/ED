@extends('layouts.app')

@section('content')
<div class="container d-flex align-items-center">
    <div class="form-holder has-shadow">
        <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
                <div class="info d-flex align-items-center">
                    <div class="content">
                        <div class="logo">
                            <h1>{{ __('Register') }}</h1>
                        </div>
                        <p>Please Fill out all the details</p>
                    </div>
                </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
                <div class="form d-flex align-items-center">
                    <div class="content">
                        <form class="form-validate" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" required data-msg="Please enter your name" class="input-material{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name"  name="name"  value="{{ old('name') }}">
                                <label for="name" class="label-material" > {{ __('Name') }} </label>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" required data-msg="Please enter your username" class="input-material{{ $errors->has('username') ? ' is-invalid' : '' }}" id="username"  name="username"  value="{{ old('username') }}">
                                <label for="username" class="label-material" > {{ __('Username') }} </label>
                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" name="email" required data-msg="Please enter a valid email address" class="input-material{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}">
                                <label for="email" class="label-material">{{ __('E-Mail Address') }}</label>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" required data-msg="Please enter your password" class="input-material{{ $errors->has('password') ? ' is-invalid' : '' }}">  {{-- form-control--}}
                                <label for="password" class="label-material">{{ __('Password') }}</label>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" type="password" name="password_confirmation" required data-msg="Please enter your password" class="input-material">
                                <label for="password-confirm" class="label-material">{{ __('Confirm Password') }}</label>
                            </div>
                            <div class="form-group terms-conditions">
                                <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="checkbox-template">
                                <label for="register-agree">Agree the terms and policy</label>
                            </div>
                            <div class="form-group">
                                <button id="register" type="submit" name="registerSubmit" class="btn btn-primary"> {{ __('Register') }}</button>
                            </div>
                        </form><small>Already have an account? </small><a href="{{ route('login') }}" class="btn btn-link" >Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
