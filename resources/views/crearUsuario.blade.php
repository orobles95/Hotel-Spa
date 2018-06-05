
<div class="divBotoCrear">
    <button id="modalButtonNew" class="btn btn-primary" data-toggle="modal" data-target="#ModalnewUser"> {{ trans('zona_socio.crearUsuarioBtn') }} </button>
</div>

<div class="modal modal_socios fade" tabindex="-1" role="dialog" id="ModalnewUser">
    <div id="modal_perfil_socios" class="modal-dialog modal_dialog_socios modal-lg" role="document">
        <div class="modal-content modal_content_socios">
            <form id="formEditarUsuario" name="formEditarUsuario" class="form-horizontal" method="POST" action="{{ url('/newUser') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">{{ trans('zona_socio.admin_crearUsuario_titulo') }}</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <div class="modal-body modal_body_socios modal_widthLg">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName_newUser" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_apellido') }}</label>

                            <div class="col-md-6">
                                <input id="lastName_newUser" name="lastName_newUser" type="text" class="form-control"  minlength="2" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phoneNumber_newUser" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber_newUser" name="phoneNumber_newUser" type="number" class="form-control" min="111111111" max="999999999" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="card_number_newUser" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_tarjeta') }}</label>

                            <div class="col-md-6">
                                <input id="card_number_newUser" name="card_number_newUser" type="number" class="form-control" min="1111111111111111" max="9999999999999999" placeholder="{{ trans('zona_socio.input_tarjeta_placeholder') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="holder_card_newUser" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_titular') }}</label>

                            <div class="col-md-6">
                                <input id="holder_card_newUser" name="holder_card_newUser" type="text" class="form-control" minlength="5" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="expDate_card_newUser" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_fechaCad') }}</label>

                            <div class="col-md-6">
                                <input id="expDate_card_newUser" name="expDate_card_newUser" type="text" class="form-control" minlength="5" maxlength="5" placeholder="07/18" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" minlength="6" placeholder="{{ trans('zona_socio.input_password_placeholder') }}" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirm" class="col-md-4 col-form-label text-md-right">{{ trans('zona_socio.input_password_conf') }}</label>

                            <div class="col-md-6">
                                <input id="password_confirm" type="password" class="form-control" name="password_confirm" minlength="6" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer modal_footer_socios" style="text-align: center;">
                        <button type="submit" class="btn btn-success" style="margin-right: 25%;">{{ trans('zona_socio.crearBtn') }}</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('zona_socio.cerrarBtn') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

