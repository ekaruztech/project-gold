<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="{{ asset('css/global.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-select/dist/css/bootstrap-select.min.css') }}" media="screen">
    @stack('styles')
</head>
@guest
    @include('layouts.partials.nav')
    @else
        @include('layouts.partials.nav-user')
        @endguest
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
        @stack('scripts')
        <body>
        </body>
</html>