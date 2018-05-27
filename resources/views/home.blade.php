<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mi Perfil</title>

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">
        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <section>

            @include('navbar')

            <div class="header-img">
                <img src="images/restauranteHeader.jpg" class="img-fluid" alt="Restaurante">
            </div>

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



        </section>

        @include('subscribe')

        @include('footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
    </body>
</html>

