<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @auth
            <meta name="api-token" content="{{ auth()->user()->api_token }}">
        @endauth
    </head>
    <body>
    <div class="fakeLoader"></div>
        @include('shared/mobile-navbar')

    <main id="panel" class="panel">
        <header id="header">
            @include('shared.topbar')
            @include('shared.navbar')
        </header>

        <div id="app">
            @unless(route('home'))
                <x-agency.breadcrumb />
            @endunless
            @yield('content')
        </div>
    </main>
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{ mix('js/custom.js') }}" defer></script>
    </body>
</html>
