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
                                <h1>{{ __('Login') }}</h1>
                            </div>
                            <p>Please login to access content</p>
                        </div>
                    </div>
                </div>
                <!-- Form Panel    -->
                <div class="col-lg-6 bg-white">
                    <div class="form d-flex align-items-center">
                        <div class="content">
                            <form method="post" class="form-validate" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                @csrf
                                {{--For Email Auth--}}
                                {{--<div class="form-group">--}}
                                    {{--<input id="email" type="email" name="email" value="{{ old('email')}}" required class="input-material {{ $errors->has('email') ? ' is-invalid' : '' }}" >--}}
                                    {{--<label for="email" class="label-material">{{ __('E-Mail Address') }}</label>--}}
                                    {{--@if ($errors->has('email'))--}}
                                        {{--<span class="invalid-feedback" role="alert" style="display: block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                                <div class="form-group">
                                    <input id="username" type="text" name="username" value="{{ old('username')}}" required class="input-material {{ $errors->has('username') ? ' is-invalid' : '' }}" >
                                    <label for="username" class="label-material">{{ __('username') }}</label>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" name="password" required class="input-material {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                    <label for="password" class="label-material">{{ __('Password') }}</label>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert" style="display: block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4 offset-md-4" >
                                        <div class="form-check" >
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary"> {{ __('Login') }}</button>
                            </form>
                            <br>
                            <small>Reset Credentials</small><a type="button" href="{{ route('password.request') }}" class="btn btn-link">{{ __('Forgot Your Password?') }}</a>
                            <br>
                            <small>Do not have an account? </small><a  href="{{ route('register') }}" class="btn btn-link">Signup</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
