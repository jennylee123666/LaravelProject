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
</head>
 <body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-md bg-light navbar-light ">
         <div class="container-fluid">
             <ul class="navbar-nav me-auto mb-2 mb-md-0">
                 <li class="nav-item">
                     <a class="nav-link" href=" {{route('main')}} ">Home</a>
                     </li>
                    @if (isset(Auth::user()->id))
                    <li class="nav-item">
                     <a class="nav-link" href="{{route('list')}}">Rental Page</a> 
                    </li>@endif

                     @if (isset(Auth::user()->id) && (Auth:: user()->description !=='customer'))
                     <li class="nav-item">
                     <a class="nav-link" href="{{route('computers')}}">Master Computer List Page</a> 
                    </li>
                    @endif
                    @if (isset(Auth::user()->id) && (Auth:: user()->description !=='customer'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('retals')}}">Manage Rental Page</a> 
                    </li>
                    @endif

                     @if (isset(Auth::user()->id))
                    <li class="nav-item">
                     <a class="nav-link" href="{{route('account_detail')}}">Account Details / User Rental History</a> 
                    </li>       @endif
                    @if (isset(Auth::user()->id) && (Auth:: user()->description !=='customer'))
                    <li class="nav-item">
                     <a class="nav-link" href="{{route('manage_user')}}">Manage Users Page</a> 
                    </li>
                    @endif
                    @if (isset(Auth::user()->id) && (Auth:: user()->description=='manager'))
                    <li class="nav-item">
                     <a class="nav-link" href="{{route('manager_dashboard')}}">Manager Dashboard</a> 
                    </li>
                    @endif



                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
       @yield('content')
    
        <footer class="container">
            <p>&copy; Group66  2022 KIT502 Assignment2. &middot;
                 <a href="#">Privacy</a> &middot; 
                 <a href="#">Terms</a>
                </p> 
            </footer>
        </body>  
</html>
