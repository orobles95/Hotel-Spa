<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <title>20 bootstrap</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
    @foreach( $arrayHabitaciones as $key => $habitacion )
    <div class="col-xs-6 col-sm-4 col-md-3 text-center">

        <a href="{{ url('/reserva/' . $key ) }}">
            <h4 style="min-height:45px;margin:5px 0 10px 0">
                {{$habitacion['nom']}}
            </h4>
        </a>

    </div>
    @endforeach
   
</body>
</html>
        
            
        
