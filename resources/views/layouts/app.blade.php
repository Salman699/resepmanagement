<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<<<<<<< HEAD
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
=======
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
<<<<<<< HEAD
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
=======
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-transparant">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
<<<<<<< HEAD
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
=======
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif
<<<<<<< HEAD

=======
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
<<<<<<< HEAD
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    @endif
                    @else
=======
                    @endif
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
=======
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
<<<<<<< HEAD

=======
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
<<<<<<< HEAD
    <main class="py-8">
        @yield('content')
    </main>
    
</body>

</html>
=======

    <main class="py-8">
        @yield('content')
    </main>

    @yield('scripts')
</body>

</html>
>>>>>>> b3b440541589a093f123d135e0380c5aabe7be56
