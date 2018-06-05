<a id="perfilBtn" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-user"></i> {{ trans('zona_socio.miPerfil_titulo') }}</h4>
        </div>
        <div class="card-body">
            <p>{{ trans('zona_socio.miPerfil_user') }}</p>
        </div>
    </div>
</a>

<div class="modal modal_socios fade" tabindex="-1" role="dialog" id="myModal">
    <div id="modal_perfil_socios" class="modal-dialog modal_dialog_socios modal-lg" role="document">
        <div class="modal-content modal_content_socios">
            <form id="formEditarUsuario" name="formEditarUsuario" class="form-horizontal" method="POST" action="{{ url('/editaUsuario') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">{{ trans('zona_socio.editarMiPerfil_titulo') }}</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <div class="modal-body modal_body_socios">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_nombre">{{ trans('zona_socio.input_nombre') }}</label>
                                <input type="hidden" name="nom_user" value="{{ $user->name }}">
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_nombre" id="usuario_nombre" placeholder="Nombre" value="{{ $user->name }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_apellido">{{ trans('zona_socio.input_apellido') }}</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_apellido" id="usuario_apellido" minlength="2" value="{{ $user->lastName }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_email" >{{ trans('zona_socio.input_email') }}</label>
                            </div>
                            <div class="col-8">
                                <input type="email" style="width: 100%;" name="usuario_email" id="usuario_email" value="{{ $user->email }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_telefono">{{ trans('zona_socio.input_telefono') }}</label>
                            </div>
                            <div class="col-8">
                                <input type="number" style="width: 100%;" name="usuario_telefono" id="usuario_telefono" min="111111111" max="999999999" value="{{ $user->phoneNumber }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_tarjeta">{{ trans('zona_socio.input_tarjeta') }}</label>
                            </div>
                            <div class="col-8">
                                <input type="number" style="width: 100%;" name="usuario_tarjeta" id="usuario_tarjeta" min="1111111111111111" max="9999999999999999" placeholder="{{ trans('zona_socio.input_tarjeta_placeholder') }}" value="{{ $user->card_number }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_tarjeta_titular">{{ trans('zona_socio.input_titular') }}</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_tarjeta_titular" id="usuario_tarjeta_titular" minlength="5" value="{{ $user->holder_card }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_tarjeta_fechacad">{{ trans('zona_socio.input_fechaCad') }}</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_tarjeta_fechacad" id="usuario_tarjeta_fechacad" minlength="5" maxlength="5" placeholder="07/18" value="{{ $user->expDate_card }}" required />
                            </div>
                        </div>

                        <!--
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="contrasenya">Contrasenya:</label>
                            </div>
                            <div class="col-8">
                                <input type="password" style="width: 100%;" name="cu45_contrasenya" id="cu45_contrasenya" placeholder="Contrasenya" required />
                            </div>
                        </div>
                        -->
                    </div>
                    <div class="modal-footer modal_footer_socios" style="text-align: center;">
                        <button type="submit" class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">{{ trans('zona_socio.guardarBtn') }}</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('zona_socio.cerrarBtn') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
