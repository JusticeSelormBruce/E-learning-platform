<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Akrofi Books</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('boostrap/css/bootstrap.css') }}" rel="stylesheet">
    <style>
        a {
            text-decoration: none !important;
        }
        hr{
            margin: 0.3rem;
        }
    </style>
</head>
<body class="bg-light">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                Akrofi Books
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="/">{{ __('Home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#profile">{{ __('Book Profile') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#author">{{ __('Author') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactUs">{{ __('Online WASSCE Tutorial') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                More <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <div class="row">
                                    <a  href="#Features"  class="mx-auto">{{ __('Features') }}</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <a  href="#grab_a_copy"  class="mx-auto">{{ __('Grab A Copy') }}</a>
                                </div>
                                <div class="row">
                                    <a  href="latest-posts"  class="mx-auto">{{ __(' Latest Posts') }}</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <a href="#mission_vision" class="mx-auto">Vision & Mission</a>
                                </div>
                                <hr>
                                <div class="row">
                                    <a href="#contactUs" class="mx-auto">Contact Us</a>
                                </div>

                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if(Auth::user()->role_id ==1)
                                    <a href="/student/dashboard" class="ml-4">Dashboard</a>
                                @endif
                                @if(Auth::user()->role_id >=2)
                                    <a href="/super-admin/dashboard" class="ml-4">Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<script src="{{asset('boostrap/js/jquery.js')}}"></script>
<script src="{{asset('boostrap/js/bootstrap.js')}}"></script>

</body>
</html>
