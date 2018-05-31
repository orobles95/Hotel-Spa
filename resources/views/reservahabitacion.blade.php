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

        <title>Reserva de {{$habitacion->nom}}</title>
    </head>
    <body>

        <div class="row" style="margin-top:20px">

            <div class="col-md-offset-3 col-md-6">

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Reserva de {{$habitacion->nom}}
                        </h3>
                    </div>

                    <div class="panel-body" style="padding:30px">
                        <div>{!! Notification::showAll() !!}</div>
                        <form action="#" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Habitación</label>
                                <input readonly="readonly" type="text" name="room" id="room" class="form-control" value="{{$habitacion->nom}}">
                            </div>

                            <div class="form-group">
                                <label for="year">Fecha Llegada</label>
                                <input type="text" name="fechaentrada" id="llegada" class="form-control" value="Selecciona la fecha">
                            </div>

                            <div class="form-group">
                                <label for="director">Fecha Salida</label>
                                <input type="text" name="fechasalida" id="salida" class="form-control" value="Selecciona la fecha">
                            </div>


                            <div class="form-group">
                                <label for="synopsis">Huéspedes</label>
                                <select  class="form-control" name="huespedes" id="huespedes" >
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>

                            @guest
                            <div class="form-group">
                                <label for="card_number">Numero targeta de pago</label>
                                <input id="card_number" name="card_number" type="number" class="form-control" placeholder="Sin espacios" required>
                            </div>
                            @endguest

                            <div class="form-group text-center">
                                <button onclick="{{ url('/habitaciones') }}" type="submit" class="btn btn-default" style="padding:8px 100px;margin-top:25px;">
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

$(function() {
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
$(function() {
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
    dateFormat: 'mmddyy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['es']);
$(function() {
    $("#salida").datepicker();
});
</script>