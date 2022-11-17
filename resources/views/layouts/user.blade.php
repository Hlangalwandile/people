<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'People') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>

<body>
        @include('sidebar')
        <div class="content">
            <section class="p-4 my-container">
                <button class="btn bg-dark" id="menu-btn">toggle</button>
            
                <div id="btngotodash">
                    <a href="{{route('home.index')}}" class="btn btngotodash btn-primary">home</a>
                </div>
            </section>        
            <main class="py-4">
                @yield('content')
            </main>
        </div>
   
</body>
<!-- Scripts -->
<script src="{{ asset('js/dashboard.js') }}" defer></script>
</html>
