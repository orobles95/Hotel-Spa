<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Habitaciones</title>
        
        
        
        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">
        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    </head>
    <body>
        @include('navbar')
        
        
        <form>
            
        <label>Selecciona una fecha: <label>
     
        <input type="text" name="datetimes" />
        
        <select>
                    <option value="habiacion" >Habitacion</option>
        </select>
        
            
            
         <div class="text-right darkColor">
            <button id="reservar" class="btn btn-success" type="submit">Reservar</button>
        </div>   
        </form>
        
        
        @include('subscribe')

        @include('footer')
        
         <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
        
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
        
        
        
 

</body>

<script>
$(function() {
  $('input[name="datetimes"]').daterangepicker({
     timePicker: true,
     timePicker24Hour: true,
     timePickerIncrement: 30,
     showCustomRangeLabel: false,
     alwaysShowCalendars: true,
     startDate: "05/09/2018",
     endDate: "05/15/2018",
     cancelClass: "btn-warning"
}, function(start, end, label) {
    console.log(start,end,label);
}); 

});
</script>

</html>