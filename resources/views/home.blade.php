<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel-Spa Miramar</title>

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">

        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Arapey|IM+Fell+French+Canon+SC|Poppins" rel="stylesheet">

    </head>
    <body>
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <a href="{{ url('/') }}">
                            <img src="images/titulo.jpg" class="img-fluid" alt="Gran Hotel Miramar">
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
                                    <ul class="ext-box navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
                                        <li class="int-box nav-item">
                                            <a class="nav-link" href="home">
                                                <div class="row align-items-center">
                                                    <img src="images/ico-socios.png" class="img_socios_nav img-fluid" alt="Zona Socios">
                                                    @if (Auth::check())
                                                    <div>
                                                        <span>Bienvenido/a <strong name="nomUsuari">{{ Auth::user()->name }}</strong> </span>
                                                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                                            {{ csrf_field() }}
                                                            <!--<button type="submit" class="btn btn-danger" style="display:inline;cursor:pointer">-->
                                                            <button type="submit" class="btn btn-danger">
                                                                Cerrar sesión
                                                            </button>
                                                        </form>
                                                    </div>
                                                    @else
                                                    <span >{{ trans('nav.accesosDirectos_socios') }}</span>
                                                    @endif
                                                </div>
                                            </a>
                                        </li>
                                        <!--<li class="int-box nav-item">
                                            <a class="nav-link" href="#">
                                                <img src="images/ico-reservas.png" class="img_reservas_nav img-fluid" alt="Resrvas On-line">
                                                <span >{{ trans('nav.accesosDirectos_reservas') }}</span>
                                            </a>
                                        </li>-->
                                        <li class="int-box nav-item select_lang_nav">
                                            <form action="language" method="post">
                                                {{ csrf_field() }}
                                                @if (App::getLocale() == 'es')
                                                <img src="images/ico-bandera-esp.png" class="img-fluid margin-bandera">
                                                @else
                                                <img src="images/ico-bandera-eng.png" class="img-fluid margin-bandera">
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
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row justify-content-center" style="margin-top: 50px;">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tablero de usuario (User dashboard)</strong>
                            </div>
                            <div class="card-body">
                                <div class="row justify-content-center" style="margin-top: 50px;">

                                    <div class="col-6">
                                        @include('perfil_usuario')
                                    </div>

                                    <div class="col-6">
                                        @include('reservas_usuario')
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
    </body>
</html>

