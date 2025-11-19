<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
<head>
    @vite(['resources/js/app.js'])
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexlet Blog - @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('pages.home') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link {{ Route::currentRouteName() === 'pages.home' ? 'active' : '' }}" aria-current="page" href="{{ route('pages.home') }}">Home</a>
                    <a class="nav-link {{ Route::currentRouteName() === 'articles.index' ? 'active' : '' }}" href="{{ route('articles.index') }}">Articles</a>
{{--                    <a class="nav-link" href="#">Pricing</a>--}}
                </div>
            </div>
        </div>
    </nav>
</header>
<div class="container mt-4">
    <h1>@yield('header')</h1>
    <div>
        @yield('content')
    </div>
</div>
</body>
</html>
