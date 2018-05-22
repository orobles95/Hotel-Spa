<!DOCTYPE html>
<html lang="en">
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

    </head>
    <body>
        @include('navbar')
        
        @include('areas')

        @include('hotel_sections')

        @include('subscribe')

        @include('footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
    </body>
</html>

