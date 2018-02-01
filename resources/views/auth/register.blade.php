@extends('layouts.auth')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}" media="screen">
@endsection

@section('content')
    <nav class="navbar bg-white absolute-position full-width align-self-center">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/coiner-dark.png')}}" class="logo-alt">
        </a>
        <span class="navbar-text text-sm ml-auto text-black mt-6 mr-3">Already have an account?</span>
        <a href="{{ route('login') }}" class="text-right btn btn-custom-white mt-6 mr-10 pl-10 pr-10 text-uppercase">Login
            Now</a>
    </nav>
    <div class="w-100"></div>
    <div class="col-md-10 mt-150 offset-md-1 align-items-center auth-form-wrapper">
        <h4>Get started absolutely fast</h4>
        <div class="text-muted mt-2 text-sm">Securely buy and sell bitcoin and other crypto currencies</div>
        <!--                <p><small class="text-success">A password reset link has been sent</small></p>-->
        <div class="w-100"></div>
        <form class="align-self-center mt-4 auth-form" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="emailRegister" class="text-uppercase text-sm">Email address</label>
                <input type="email" class="form-control form-control-lg simplebox text-sm input-custom"
                       id='emailRegister' name="email" aria-describedby="emailHelp" placeholder="jonny@gmail.com" required autofocus>
                @if ($errors->has('email'))
                    <small id="emailHelp" class="form-text text-muted text-sm">{{ $errors->first('email') }}
                    </small>
                @endif
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="passwordRegister" class="text-sm justify-content-between">
                    <span class="text-uppercase">Password</span>
                </label>
                <input type="password" class="form-control form-control-lg simplebox text-sm input-custom"
                      id="passwordRegister" name="password" placeholder="5+ Characters">
                @if ($errors->has('password'))
                    <small id="emailHelp" class="form-text text-muted text-sm">{{ $errors->first('password') }}
                    </small>
                @endif
            </div>
            <div class="form-group">
                <label for="password-confirm" class="text-sm justify-content-between">
                    <span class="text-uppercase">Confirm Password</span>
                </label>
                <input type="password" class="form-control form-control-lg simplebox text-sm input-custom"
                      id="password-confirm" name="password_confirmation" placeholder="Re-Type 5+ Characters">
            </div>
            <button type="submit" class="btn btn-custom text-uppercase simplebox">Create Account</button>
        </form>
    </div>
@endsection