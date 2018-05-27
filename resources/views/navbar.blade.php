<div class="container">
    <div class="row justify-content-between">
        <div class="col-5">
            <img src="images/titulo.jpg" class="img-fluid" alt="Gran Hotel Miramar">
        </div>
        <div class="col-5 align-self-center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarTogglerDemo01">
                    <a class="navbar-brand" href="#"></a>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
                        @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link">
                                <span>Bienvenido <strong>{{ Auth::user()->name }}</strong> </span>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="home">
                                <span>{{ trans('nav.accesosDirectos_socios') }}</span>
                                <img src="images/ico-socios.png" class="img-fluid" alt="Zona Socios">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>{{ trans('nav.accesosDirectos_reservas') }}</span>
                                <img src="images/ico-reservas.png" class="img-fluid" alt="Resrvas On-line">
                            </a>
                        </li>
                        <li>
                            <form action="language" method="post">
                                <select name="locale">
                                    <option value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                                    <option value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                                </select>
                                {{ csrf_field() }}
                                <!--<input type="submit" value="{{ trans('nav.accesosDirectos_idiomaBtn') }}">-->
                                <button type="submit" class="btn-bandera"></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="menu row justify-content-end">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row" id="navbarTogglerDemo02">
                <a class="navbar-brand" href="#"></a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="/Hotel-Spa/public">{{ trans('nav.menu_inicio') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="habitaciones">{{ trans('nav.menu_habitaciones') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="restaurante">{{ trans('nav.menu_restaurante') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="spa">{{ trans('nav.menu_spa') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertas">{{ trans('nav.menu_ofertas') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto">{{ trans('nav.menu_contacto') }}</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
