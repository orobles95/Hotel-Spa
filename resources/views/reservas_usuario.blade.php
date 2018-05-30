<a id="reservasBtn" data-toggle="modal" data-target="#myModal_2" style="cursor: pointer;">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-bed"></i> Mis Reservas</h4>
        </div>
        <div class="card-body">
            <p>Realizar el seguimiento o cancelar una reserva</p>
        </div>
    </div>
</a>

<div class="modal modal_socios fade" tabindex="-1" role="dialog" id="myModal_2">
    <div id="modal_reservas_socios" class="modal-dialog modal_dialog_socios" role="document">
        <div class="modal-content modal_content">
            <form id="formReservas" name="formReservas" class="form-horizontal" method="POST" action="{{ url('/editGrup') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">Modificar grup</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <div class="modal-body modal_body_socios">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="usuario_nombre">Nombre:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="usuario_nombre" id="usuario_nombre" placeholder="Nombre" value="{{ $user->name }}" required />
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
                        <div class="row">
                            <div class="col-4">
                                <label for="usuario_tarjeta">Tarjeta de pago:</label>
                            </div>
                            <div class="col-8">
                                <input type="number" style="width: 100%;" name="usuario_tarjeta" id="usuario_tarjeta" placeholder="16 numeros sin espacios" value="{{ $user->card_number }}" required />
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
                        <button type="submit" class="btn btn-success" id="modalAceptar" style="margin-right: 25%;">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>