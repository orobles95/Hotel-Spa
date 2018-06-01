<section>
    <div class="container subscribe">
        <div class="row align-items-center">
            <div class="col-3 text-center"><div class="line"></div></div>
            <div class="col-6 text-center  text-title">{{ trans('suscribe.mensaje') }}</div>
            <div class="col-3 text-center"><div class="line"></div></div>
        </div>
        <div class="row">
            <div class="col text-center">
                <a href="#">
                    <img src="images/subscribe1.png" class="img-fluid" alt="Cada artículo en tu buzón">
                    <div class="text-med">{{ trans('suscribe.ventaja_titulo_1') }}</div>
                    <div class="text-slim">{{ trans('suscribe.ventaja_texto_1') }}</div>
                </a>
            </div>
            <div class="col text-center">
                <a href="#">
                    <img src="images/subscribe2.png" class="img-fluid" alt="Entérate siempre el primero">
                    <div class="text-med">{{ trans('suscribe.ventaja_titulo_2') }}</div>
                    <div class="text-slim">{{ trans('suscribe.ventaja_texto_2') }}</div>
                </a>
            </div>
            <div class="col text-center">
                <a href="#">
                    <img src="images/subscribe3.png" class="img-fluid" alt="Y sin gastar un euro">
                    <div class="text-med">{{ trans('suscribe.ventaja_titulo_3') }}</div>
                    <div class="text-slim">{{ trans('suscribe.ventaja_texto_3') }}</div>
                </a>
            </div>
        </div>
        <div>{!! Notification::showAll() !!}</div>
        <div class="row marco">
            <form id="formSuscribe" name="formSuscribe" method="POST" action="{{ url('/suscribe') }}">
                <div class="row">
                    <div class="col-3">
                        <input type="text" id="suscribeNombre" name="suscribeNombre" class="form-control form-control-sm" placeholder="{{ trans('suscribe.inputNombre') }}">
                    </div>
                    <div class="col-4">
                        <input type="text" id="suscribeApellidos" name="suscribeApellidos" class="form-control form-control-sm" placeholder="{{ trans('suscribe.inputApellidos') }}">
                    </div>
                    <div class="col-4">
                        <input type="text" id="suscribeEmail" name="suscribeEmail" class="form-control form-control-sm" placeholder="{{ trans('suscribe.inputEmail') }}">
                    </div>
                    <div class="col-1">
                        <button type="submit">{{ trans('suscribe.enviarBtn') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

