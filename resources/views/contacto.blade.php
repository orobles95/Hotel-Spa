<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Restaurante</title>

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
                <img src="images/contactoHeader.jpg" class="img-fluid" alt="Contacto">
            </div>
            <div class="texto-encabezado text-center">
                <div class="container">
                    <h1 class="titulo_contacto">Ponte en contacto con nosotros</h1>
                    <p class="subtitulo_contacto" >Explicanos brevemente en que podemos ayudarte</p>
                    <br>
                    <br>
                    <br>
                    <form action="enviar.php" method="POST" role="form" id="contactForm" data-toggle="validator" class="shake">    
                        <div class="row">
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">Nombre</label>
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">Correo electrónico</label>
                                <input type="email" name="correo" placeholder="Correo" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">Teléfono</label>
                                <input type="text" name="telefono" placeholder="Telefono" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">Asunto</label>
                                <input type="text" name="asunto" placeholder="Asunto" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="div_input form-group col-12">
                                <label class="input_contacto">Mensaje</label>
                                <textarea id="textarea" name="mensaje" placeholder="Mensaje" class="form-control" rows="5" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <input type="submit" id="boton" value="Enviar"class="btn btn-success btn-lg pull-right " >
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
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
