@extends('layouts.auth')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" media="screen">
@endpush

@section('content')
    <nav class="navbar bg-white absolute-position full-width align-self-center">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/coiner-dark.png')}}" class="logo-alt">
        </a>
        <span class="navbar-text text-sm simplebox ml-auto mt-6 mr-3">Don't have an account?</span>
        <a href="{{ route('register') }}" class="text-right btn btn-custom-white text-uppercase simplebox m-10">Create
            Account</a>
    </nav>
    <div class="w-100"></div>
    <div class="col-md-10 mt-150 offset-md-1 align-items-center auth-form-wrapper">
        <h4>Login</h4>
        <p class="text-muted mt-2">Enter your login details below</p>
        <!--                <p><small class="text-success">A password reset link has been sent</small></p>-->
        <form class="align-self-center mt-4 auth-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="emailLogin" class="text-uppercase text-sm">Email address</label>
                <input type="email" class="form-control form-control-lg simplebox text-sm input-custom"
                      id="emailLogin" name="email" aria-describedby="emailHelp"
                       placeholder="jonny@gmail.com" {{ old('email') }} required autofocus>
                @if ($errors->has('email'))
                    <small id="emailHelp" class="form-text text-muted text-sm">{{ $errors->first('email') }}
                    </small>
                @endif
            </div>
            <div class="form-group">
                <label for="passwordLogin" class="text-sm">
                    <span class="text-uppercase">Password</span>
                    <a href="{{ route('password.request') }}" class="text-black text-muted ml-auto">Forgot password?</a>
                </label>
                <input type="password" name="password" class="form-control form-control-lg simplebox text-sm input-custom"
                       id="passwordLogin" placeholder="Enter your password">
                @if ($errors->has('password'))
                    <small id="emailHelp" class="form-text text-muted text-sm">{{ $errors->first('password') }}
                    </small>
                @endif
            </div>
            <a class="btn btn-link" href="{{ route('password.request') }}">
                        Forgot Your Password?
                </a>
            <button type="submit" class="btn btn-custom text-uppercase simplebox">Log In</button>            
    </div>
@endsection