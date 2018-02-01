@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/wallet.css') }}" media="screen">
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        You are logged in!
                    </div>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
