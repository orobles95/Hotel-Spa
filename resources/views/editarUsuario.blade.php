<button name="modalButtonEdit" onclick="editaUsuari(this);" class="btn btn-warning" data-toggle="modal" data-target="#ModaleditUser" value="{{$user->id}}"> 
    Editar 
</button>


<div class="modal modal_socios fade" tabindex="-1" role="dialog" id="ModaleditUser">
    <div id="modal_perfil_socios" class="modal-dialog modal_dialog_socios modal-lg" role="document">
        <div class="modal-content modal_content_socios">
            <form id="formEditarUsuario" name="formEditarUsuario" class="form-horizontal" method="POST" action="{{ url('/editUser') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">Datos del usuario</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <div class="modal-body modal_body_socios modal_widthLg">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_nombre">Nombre:</label>
                            </div>
                            <div class="col-8">
                                <input type="hidden" name="usuario_id" id="usuario_id" value="{{ $user->id }}">
                                <input type="text" style="width: 100%;" name="usuario_nombre" id="usuario_nombre" placeholder="Nombre" value="{{ $user->name }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_apellido">Apellido:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_apellido" id="usuario_apellido" minlength="2" placeholder="Apellido" value="{{ $user->lastName }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_email" >Correo electrónico:</label>
                            </div>
                            <div class="col-8">
                                <input type="email" style="width: 100%;" name="usuario_email" id="usuario_email" placeholder="Email" value="{{ $user->email }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_telefono">Telefono:</label>
                            </div>
                            <div class="col-8">
                                <input type="number" style="width: 100%;" name="usuario_telefono" id="usuario_telefono" min="111111111" max="999999999" placeholder="Telefono" value="{{ $user->phoneNumber }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_tarjeta">Tarjeta de pago:</label>
                            </div>
                            <div class="col-8">
                                <input type="number" style="width: 100%;" name="usuario_tarjeta" id="usuario_tarjeta" min="1111111111111111" max="9999999999999999" placeholder="16 numeros sin espacios" value="{{ $user->card_number }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_tarjeta_titular">Titular tarjeta:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_tarjeta_titular" id="usuario_tarjeta_titular" minlength="5" value="{{ $user->holder_card }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_tarjeta_fechacad">Fecha cad. tarjeta:</label>
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
                        <button type="submit" class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>