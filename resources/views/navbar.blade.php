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
                            <li class="int-box nav-item">
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
                        <a class="nav-link" href="tratamientos">{{ trans('nav.menu_tratamientos') }}</a>
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
