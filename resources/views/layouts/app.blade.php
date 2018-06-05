<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ trans('zona_socio.titulo_nav') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">
        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Arapey|IM+Fell+French+Canon+SC|Poppins" rel="stylesheet">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    </head>
    <body>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-5">
                    <a href="{{ url('/') }}">
                        <img src="../images/titulo.jpg" class="img-fluid" alt="Gran Hotel Miramar">
                    </a>
                </div>
                <div class="col-7">
                    <div class="row justify-content-end">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse row" id="navbarTogglerDemo01">
                                <a class="navbar-brand" href="#"></a>
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">

                                    @guest
                                    @if (auth('admin')->check())
                                    <li><a class="nav-link" href="{{ route('admin.dashboard') }}">{{ trans('zona_socio.admin_area') }}</a></li>
                                    @else
                                    <li><a class="nav-link" href="{{ route('admin.login') }}">{{ trans('zona_socio.admin_login') }}</a></li>
                                    @endif

                                    <li><a class="nav-link" href="{{ route('login') }}">{{ trans('zona_socio.usuario_login') }}</a></li>
                                    <li><a class="nav-link" href="{{ route('register') }}">{{ trans('zona_socio.registro') }}</a></li>
                                    @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ trans('zona_socio.cerrar_sesion') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    @endguest
                                    <li class="nav-item cambio_idioma_nav">
                                        <form action="language" method="post">
                                            {{ csrf_field() }}
                                            @if (App::getLocale() == 'es')
                                            <img src="../images/ico-bandera-esp.png" class="img-fluid">
                                            @else
                                            <img src="../images/ico-bandera-eng.png" class="img-fluid">
                                            @endif
                                            <select id="idioma" onchange="this.form.submit()" name="locale">
                                                <option  value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                                                <option  value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                                            </select>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>


            <main class="py-4">
                @yield('content')
            </main>
        </div>


    </body>
</html>
