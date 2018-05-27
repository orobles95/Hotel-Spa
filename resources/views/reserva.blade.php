<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">
        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Arapey|IM+Fell+French+Canon+SC|Poppins" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
        
        
        <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
        

        

    </head>
    <body>
        @include('navbar')
        
        <div class="row">

    <div class="col-sm-8">
    <h1>Reserva</h1>
    
    <form action="#" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}

        {{$habitacion->img}}
	<div class="form-group">
            <label for="year">Habitacion</label>
            <input readonly="readonly" type="text" name="room" id="room" class="form-control" value="{{$habitacion->nom}}">
	</div>

	<div class="form-group">
            <label for="fechaentrada">Llegada</label>
            <input name="fechaentrada" id="llegada"/>
	</div>

	<div class="form-group">
            <label for="fechallegada">Salida</label>
            <input name="fechasalida" id="salida"/>
	</div>

	<div class="form-group text-center">
            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
		Reservar
            </button>
	</div>

	</form>   
    

    </div>
  </div>


        @include('subscribe')

        @include('footer')
       

    </body>
</html>
            
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
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
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
 monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
 dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
 dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
 dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
 weekHeader: 'Sm',
 dateFormat: 'mmddyy',
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