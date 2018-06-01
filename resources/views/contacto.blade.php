<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ trans('contacto.titulo') }}</title>

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
            <div class="texto-encabezado text-center margin_bottom">
                <div class="container">
                    <h1 class="titulo_contacto">{{ trans('contacto.titulo_1') }}</h1>
                    <p class="subtitulo_contacto" >{{ trans('contacto.subtitulo_1') }}</p>
                    <br>
                    <br>
                    <br>
                    <form action="enviar.php" method="POST" role="form" id="contactForm" data-toggle="validator" class="shake">    
                        <div class="row">
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">{{ trans('contacto.inputNombre') }}</label>
                                <input type="text" name="nombre" placeholder="{{ trans('contacto.inputNombre') }}" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">{{ trans('contacto.inputEmail') }}</label>
                                <input type="email" name="correo" placeholder="{{ trans('contacto.inputEmail') }}" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">{{ trans('contacto.inputTelefono') }}</label>
                                <input type="text" name="telefono" placeholder="{{ trans('contacto.inputTelefono') }}" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="div_input form-group col-6">
                                <label class="input_contacto">{{ trans('contacto.inputAsunto') }}</label>
                                <input type="text" name="asunto" placeholder="{{ trans('contacto.inputAsunto') }}" class="form-control" required>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="div_input form-group col-12">
                                <label class="input_contacto">{{ trans('contacto.inputMensaje') }}</label>
                                <textarea id="textarea" name="mensaje" placeholder="{{ trans('contacto.inputMensaje_2') }}" class="form-control" rows="5" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <input type="submit" id="boton" value="{{ trans('contacto.enviarBtn') }}"class="btn btn-success btn-lg pull-right " >
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </section>


        @include('footer')

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{ url('/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ url('/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ url('/js/hotelSpa.js') }}"></script>
    </body>
</html>
