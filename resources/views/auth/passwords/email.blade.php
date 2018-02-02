@extends('layouts.auth')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/forgot-password.css') }}" media="screen">
@endsection

@section('content')
    <nav class="navbar bg-white absolute-position full-width mt-2 align-self-center">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/coiner-dark.png')}}" class="logo-alt">
        </a>
        <span class="navbar-text text-sm ml-auto simplebox mt-6 mr-3">Don't have an account?</span>
        <a href="{{ route('register') }}" class="text-right btn btn-custom-white simplebox mt-6 mr-10 text-uppercase">Create
            Account
        </a>
    </nav>
    <div class="w-100"></div>
    <div class="col-md-10 mt-150 offset-md-1 align-items-center auth-form-wrapper">
        <h4>Forgot your password?</h4>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <p>
            <small class="text-muted">Enter your email address below and we'll get you back on track</small>
        </p>
        <form class="align-self-center auth-form mt-30" method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="text-uppercase text-sm">Email address</label>
                <input type="email" name="email" class="form-control form-control-lg simplebox text-sm input-custom"
                       id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="jonny@gmail.com"
                       value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <small id="emailHelp" class="form-text text-muted text-sm">{{ $errors->first('email') }}
                    </small>
                @endif
            </div>
            <button type="submit" class="btn btn-custom text-uppercase simplebox">Send Password Reset Link</button>
        </form>
    </div>
@endsection
