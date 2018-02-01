<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" media="screen">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('styles')
</head>
<div class="container-fluid auth-wrapper">
    <div class="row">
        <div class="col-md-6 auth-banner">
            <img src="{{ asset('images/coiner-logo.png') }}" class="logo">
        </div>
        <div class="col-md-6 login-parent p-0">
            @yield('content')
        </div>
    </div>
</div>
<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
@yield('scripts')
<body>
</body>
</html>