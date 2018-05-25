<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('restaurante.titulo') }}</title>

        <!-- Bootstrap and my style -->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">
        <!-- Fonts and Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

    </head>
    <body>
        <section>
            @include('navbar')
            
            <div class="header-img">
                <img src="images/restauranteHeader.jpg" class="img-fluid" alt="Restaurante">
            </div>
            <div class="container">
                <div class="rel">
                    <div class="description">
                        <p>{{ trans('restaurante.bienvenida') }}</p>
                    </div>
                </div>
                <div class="row rest-ficha">
                    <div class="rest-description">
                        <p class="rest_menu_title">{{ trans('restaurante.titulo_1') }}</p>
                        <p>{{ trans('restaurante.descripcion_1') }} </p>
                        <p>{{ trans('restaurante.descripcion_1_2') }} </p>
                    </div>
                    <div class="rest-img dcha-img">
                        <img src="images/restauranteMenu.jpg" class="img-fluid" alt="Suite Presidencial">
                    </div>
                </div>
                <div class="row rest-ficha">
                    <div class="rest-description dcha-description">
                        <p>{{ trans('restaurante.titulo_1') }}</p>
                    </div>
                    <div class="rest-img">
                        <img src="images/suitePresidencial.jpg" class="img-fluid" alt="Suite Presidencial">
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
