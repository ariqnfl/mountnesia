<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Mountnesia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,300'>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<header id='main-header'>
    <div class='container'>
        <a class='logo'href="/" > <img src="{{asset('img/mountnesia.png')}}" height="53" width="53" style="margin-right: 10px">Mountnesia</a>
        <nav class="navbar navbar-expand-sm">
            @guest
                <div>
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </div>
                <div>
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </div>
            @else
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->user_type == "admin")
                                <a class="dropdown-item" href="{{route('home')}}">Admin Panel</a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            @endguest
        </nav>
    </div>
</header>
@yield('content')
<div id='main-footer'>
    <p> <a href="/">Mountnesia </a> &copy 2018</p>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{{asset('js/index.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@yield('footer-script')
</body>
</html>
