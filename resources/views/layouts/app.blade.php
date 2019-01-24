<!DOCTYPE html>
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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-teal p-3">
            <div class="flex items-center flex-no-shrink text-white mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                            <g id="icon-shape">
                                <path d="M2.92893219,17.0710678 C6.83417511,20.9763107 13.1658249,20.9763107 17.0710678,17.0710678 C20.9763107,13.1658249 20.9763107,6.83417511 17.0710678,2.92893219 C13.1658249,-0.976310729 6.83417511,-0.976310729 2.92893219,2.92893219 C-0.976310729,6.83417511 -0.976310729,13.1658249 2.92893219,17.0710678 L2.92893219,17.0710678 L2.92893219,17.0710678 Z M15.6568542,15.6568542 C18.7810486,12.5326599 18.7810486,7.46734008 15.6568542,4.34314575 C12.5326599,1.21895142 7.46734008,1.21895142 4.34314575,4.34314575 C1.21895142,7.46734008 1.21895142,12.5326599 4.34314575,15.6568542 C7.46734008,18.7810486 12.5326599,18.7810486 15.6568542,15.6568542 L15.6568542,15.6568542 Z M4,10 L6,8 L9,11 L14,6 L16,8 L9,15 L4,10 Z" id="Combined-Shape"></path>							
                            </g>
                        </g>
                    </svg>
                <a href="{{ url('/') }}" class="no-underline font-semibold text-xl tracking-tight text-white">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-lighter border-teal-light hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    @guest
                        <a href="{{ route('login') }}" class="block no-underline mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                            {{ __('Login') }}
                        </a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block no-underline mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4">
                            {{ __('Register') }}
                        </a>
                    @endif
                    @else
                        <a class="block no-underline mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4" href="#" role="button">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <a class="block no-underline mt-4 lg:inline-block lg:mt-0 text-teal-lighter hover:text-white mr-4" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
