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
                    <ul class="ext-box navbar-nav mr-auto mt-2 mt-lg-0 justify-content-center">
                        <li class="int-box nav-item">
                            <a class="nav-link" href="home">
                                <img src="images/ico-socios.png" class="img_socios_nav img-fluid" alt="Zona Socios">
                                @if (Auth::check())
                                <div>
                                    <span >Bienvenido <strong>{{ Auth::user()->name }}</strong> </span>
                                    <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger" style="display:inline;cursor:pointer">
                                            Cerrar sesión
                                        </button>
                                    </form>
                                </div>
                                @else
                                <span >{{ trans('nav.accesosDirectos_socios') }}</span>
                                @endif
                            </a>
                        </li>
                        @if (Auth::check())
                        <li class="int-box nav-item">
                            <a class="nav-link" href="#">
                                <img src="images/ico-reservas.png" class="img_reservas_nav img-fluid" alt="Resrvas On-line">
                                @if (App::getLocale() == 'es')
                                <span >{{ trans('nav.accesosDirectos_reservas') }}</span>
                                @else
                                <span >{{ trans('nav.accesosDirectos_reservas') }}</span>
                                @endif
                                
                            </a>
                        </li>
                        @endif
                        <li class="int-box nav-item cambio_idioma_nav">
                            <form action="language" method="post">
                                {{ csrf_field() }}
                                <select onchange="this.form.submit()" name="locale">
                                    <option  value="en" {{ App::getLocale() == 'en' ? ' selected' : '' }}>English</option>
                                    <option  value="es" {{ App::getLocale() == 'es' ? ' selected' : '' }}>Español</option>
                                </select>
                                @if (App::getLocale() == 'es')
                                <button class="btn-bandera-esp"></button>
                                @else
                                <button class="btn-bandera-eng"></button>
                                @endif
                                
                                <!--<input type="submit" class="btn btn-default" value="{{ trans('nav.accesosDirectos_idiomaBtn') }}">-->
                                <!--<button type="submit" value="Cambiar idioma"></button>-->

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
