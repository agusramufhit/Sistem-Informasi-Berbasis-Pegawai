<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Maleo</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @include('includes.style')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class=" row navbar navbar-expand-lg navbar-light bg-white">
                <a class="navbar-brand mt-2" href="{{ route('home')}}">
                    <img src="{{ url('frontend/images/logo_maleo.png')}}" width="120" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active align-self-center">
                            <a class="nav-link" href="#">Product <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link" href="#">Customers</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item align-self-center">
                            <a class="nav-link" href="#">Resources</a>
                        </li>
        
                        @guest
                                            <!--Mobile-->
                        <form class="form-inline d-sm-block d-md-none">
                            <button class="btn btn-login my-2 my-sm-0" type="button" 
                                onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                                Masuk
                            </button>
                        </form>
                        <!--Dekstop-->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                            <button class="btn px-4 btn-primary ml-2" type="button" 
                                onclick="event.preventDefault(); location.href='{{ url('login')}}';">
                                Masuk
                            </button>
                        </form>
                        @endguest
        
                        @auth
                        <!--Mobile-->
                        <form class="form-inline d-sm-block d-md-none" action="{{ url('logout')}}" 
                        method="POST">
                        @csrf 
                        <button class="btn btn-login my-2 my-sm-0" type="submit">
                            Keluar
                        </button>
                        </form>
                        <!--Dekstop-->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout')}}" 
                        method="POST">
                        @csrf 
                        <button class="btn px-4 btn-secondary ml-2" type="submit">
                            Keluar
                        </button>
                        </form>
                        @endauth
        
                    </ul>
                </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
