<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-select/dist/css/bootstrap-select.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" media="screen">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('styles')
</head>
@include('layouts.partials.nav')
@yield('content')
<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker({
            size: 4
        });
    });
</script>
@yield('scripts')
<body>
</body>
</html>