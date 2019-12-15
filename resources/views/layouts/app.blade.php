<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }

    </style>
</head>
<body>
    <div id="app" class=" "  style="background: #edf2f7;">
        <div class="bg-purple-800 p-6 ">
            <div class="bg-white flex flex-col font-sans rounded-lg">
                <div class="container mx-auto px-8">
                    @include('layouts.partials.nav')

                    <main class="flex flex-col-reverse sm:flex-row jusitfy-between items-center py-12 ">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
