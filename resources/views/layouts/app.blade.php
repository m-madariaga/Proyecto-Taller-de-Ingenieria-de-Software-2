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
    <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        body {
            background-color: #0069A5;
            font-family: 'Montserrat', sans-serif;
        }

        .signup-form h2,
        .reset-form h2 {
            color: #1a2341;
            text-align: center;
            margin-bottom: 10%;
        }


        .signup-form,
        .reset-form {
            border-radius: 3px;
            margin-bottom: 15px;
            background-color: #f2f3f7;
            box-shadow: 0px 2prgb(184, 184, 184)gba(0, 0, 0, 0.3);
            padding: 20px;
            width: 700px;
            margin: 0 auto;
            font-size: 15px;
        }

        .loginup-form button[id="button-login"],
        .signup-form button[id="button-save"] {
            background-color: #0069A5;
            color: #f2f3f7;
            font-size: 16px;
            min-width: 140px;
            outline: none !important;
        }


        .loginup-form button[id="button-save"] {
            background-color: #0069A5;
            color: #f2f3f7;
            font-size: 16px;
            min-width: 140px;
            outline: none !important;
        }

        .text-center[id="havent_register"] {
            color: #f2f3f7;

        }

        .text-center a[id="link_register"] {
            color: #f2f3f7;
            text-decoration: underline;
        }

        .form-group,
        .signup-form {
            margin-bottom: 20px;
        }

        .text-center a[id="forgot_user"] {
            color: #0b0b0b;
        }

        .signup-form .form-select[id="rol_register"] {
            margin-top: 20px;
            margin-bottom: 15px;

        }

        .navbar[ id="nav_header"] {
            background-color: #1a2341;

        }

        .navbar[ id="nav_header"] .navbar-brand {
            color: #f2f3f7;
            font-family: 'Montserrat', sans-serif;
        }

        .aside {
            background-color: #1A2341;
            color: #f2f3f7;
        }
    </style>
</head>

<body>
    <div id="app" class="wrapper">
        @guest
            @else
            @include('layouts.sidebar')
        @endguest

        <div id=content>
            @include('layouts.sidehead')
            <main class="py-4">
                @yield('content')
            </main>
        </div>

    </div>
</body>

</html>
