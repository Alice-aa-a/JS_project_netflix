<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('js/app.js')}}" rel="stylesheet">

    </head>
    <body>

        @include('layouts.nav')
        <div>Menu</div>

        <div class="container">
            @yield('content')
        </div>

        <div>Footer</div>
    </body>
</html>
