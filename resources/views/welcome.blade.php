<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('lib/bootstrap-select/dist/css/bootstrap-select.min.css') }}" media="screen">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" media="screen">
</head>

<script src="{{ asset('lib/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('lib/popper.js/dist/umd/popper.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.selectpicker').selectpicker({
            size: 4
        });
    });
</script>
<body>
</body>
</html>