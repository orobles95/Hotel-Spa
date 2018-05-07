<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel-Spa Miramar</title>

        <!-- Bootstrap and my style-->
        <link href="{{ url('/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('/css/hotel_Spa.css') }}" rel="stylesheet">

    </head>
    <body>
        @include('navbar')

        <div class="container">
            @notification()

            @yield('content')
        </div>

        <div id="section_container">
            <div id="secciones">
                <div id="instalaciones_container">
                    <div id="imgPortada_instalaciones_container">
                        <img src="../images/instalaciones.jpg" class="img-rounded" alt="Instalaciones Spa">
                    </div>
                    <div id="text_instalaciones_container">
                        <h4 id="instalaciones_title">Instalaciones</h4>
                        <p id="instalaciones_description">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
                    </div>
                    <div id="imgCercle_instalaciones_container">
                        <!--<img src="../images/imagesTest/qh_grand_boras_spa1.jpg" class="img-circle" alt="Instalaciones Spa 2" width="304" height="236"> -->
                    </div>
                </div>
                <div id="tratamientos_container">

                </div>
                <div id="socios_container">
                </div>
            </div>
        </div>





        <div id="servicios">

        </div>





        @include('footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
    </body>
</html>

