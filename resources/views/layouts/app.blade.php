<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Jobersonline') }}</title>

    <!-- Styles -->
    @include('sections/head')

</head>

<body>
    @include('sections/header')

    @yield('content')

    @include('sections/footer')

    <!-- JavaScript -->
    @include('sections/footer-script')

    <!-- Inline JavaScript -->
    @stack('inline-script')
</body>

</html>
