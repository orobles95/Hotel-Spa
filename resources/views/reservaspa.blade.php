<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">

        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Arapey|IM+Fell+French+Canon+SC|Poppins" rel="stylesheet">
        <title>Reserva en {{$spa->nom}}</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-5">
                        <a href="{{ url('/') }}">
                            <img src="../../public/images/titulo.jpg" class="img-fluid" alt="Gran Hotel Miramar">
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
                                            <a class="nav-link" href="{{ route('home') }}">
                                                <div class="row align-items-center">
                                                    <img src="../../public/images/ico-socios.png" class="img_socios_nav img-fluid" alt="Zona Socios">
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
                                                <img src="../../public/images/ico-bandera-esp.png" class="img-fluid margin-bandera">
                                                @else
                                                <img src="../../public/images/ico-bandera-eng.png" class="img-fluid margin-bandera">
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

                <div class="row" style="margin-top:20px">

                    <div class="col-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">
                                    <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                                    Reserva en el Balneario-Spa {{$spa->nom}}
                                </h3>
                            </div>

                            <div class="panel-body" style="padding:30px">
                                <div>{!! Notification::showAll() !!}</div>
                                <form action="#" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="title">Balneario-Spa</label>
                                        <input readonly="readonly" type="text" name="spa" id="spa" class="form-control" value="{{$spa->nom}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="year">Fecha</label>
                                        <input type="text" name="fechaentrada" id="llegada" class="form-control" value="Selecciona la fecha">
                                    </div>

                                    <div class="form-group">
                                        <label for="synopsis">Personas</label>
                                        <select  class="form-control" name="personas" id="personas" >
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="synopsis">Hora</label>
                                        <select  class="form-control" name="hora" id="hora" >
                                            <option value="13:00">13:00</option>
                                            <option value="13:30">13:30</option>
                                            <option value="14:00">14:00</option>
                                            <option value="14:30">14:30</option>
                                            <option value="15:00">15:00</option>
                                            <option value="15:30">15:30</option>
                                            <option value="16:00">16:00</option>
                                            <option value="20:30">20:30</option>
                                            <option value="21:00">21:00</option>
                                            <option value="21:30">21:30</option>
                                            <option value="22:00">22:00</option>
                                            <option value="22:30">22:30</option>
                                        </select>
                                    </div>

                                    @guest
                                    <div class="form-group">
                                        <label for="card_number">Numero targeta de pago</label>
                                        <input id="card_number" name="card_number" type="number" class="form-control" min="1111111111111111" max="9999999999999999" placeholder="16 numeros sin espacios" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="holder_card">{{ __('Titular tarjeta') }}</label>
                                        <input id="holder_card" name="holder_card" type="text" class="form-control" minlength="5" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="expDate_card">{{ __('Fecha cad. tarjeta') }}</label>
                                        <input id="expDate_card" name="expDate_card" type="text" class="form-control" minlength="5" maxlength="5" placeholder="07/18" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="secretNumber_card">{{ __('Num. secreto tarjeta') }}</label>
                                        <input id="secretNumber_card" name="secretNumber_card" type="password" class="form-control"  minlength="3" maxlength="3" required>
                                    </div>
                                    @endguest

                                    <div class="form-group text-center">

                                        <button onclick="{{ url('/spa') }}" type="submit" class="btn btn-default" style="padding:8px 100px;margin-top:25px;">
                                            Volver
                                        </button>

                                        <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                            Reservar
                                        </button>

                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>





<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>


<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>

                                                    $(function () {
                                                        $("#fecha").datepicker();
                                                    });


                                                    $.datepicker.regional['es'] = {
                                                        closeText: 'Cerrar',
                                                        prevText: '< Ant',
                                                        nextText: 'Sig >',
                                                        currentText: 'Hoy',
                                                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                                        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                                                        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                                                        weekHeader: 'Sm',
                                                        dateFormat: 'yy/mm/dd',
                                                        firstDay: 1,
                                                        isRTL: false,
                                                        showMonthAfterYear: false,
                                                        yearSuffix: ''
                                                    };
                                                    $.datepicker.setDefaults($.datepicker.regional['es']);
                                                    $(function () {
                                                        $("#llegada").datepicker();
                                                    });
                                                    $.datepicker.regional['es'] = {
                                                        closeText: 'Cerrar',
                                                        prevText: '< Ant',
                                                        nextText: 'Sig >',
                                                        currentText: 'Hoy',
                                                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                                        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                                                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
                                                        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
                                                        weekHeader: 'Sm',
                                                        dateFormat: 'dd/mm/yy',
                                                        firstDay: 1,
                                                        isRTL: false,
                                                        showMonthAfterYear: false,
                                                        yearSuffix: ''
                                                    };
                                                    $.datepicker.setDefaults($.datepicker.regional['es']);
                                                    $(function () {
                                                        $("#salida").datepicker();
                                                    });
</script>
