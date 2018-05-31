<a id="reservasBtn" data-toggle="modal" data-target="#myModal_2" style="cursor: pointer;">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-bed"></i> Administrar Usuarios</h4>
        </div>
        <div class="card-body">
            <p>Administrar usuarios de la página web.</p>
        </div>
    </div>
</a>

<div class="modal modal_socios fade" tabindex="-1" role="dialog" id="myModal_2">
    <div id="modal_reservas_socios" class="modal-dialog modal_dialog_socios" role="document">
        <div class="modal-content modal_content_admin">
            <form id="formReservas" name="formReservas" class="form-horizontal" method="POST" action="{{ url('/editGrup') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">Administrar Usuarios</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <table style="text-align: center;" class="table table-condensed table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Nombre</th>
                                <th style="text-align: center;">Correo electrónico</th> 
                                <th style="text-align: center;">Número tarjeta</th>
                                <th style="text-align: center;">Titular tarjeta</th>  
                                <th style="text-align: center;">Número secreto tarjeta</th> 
                                <th style="text-align: center;">Fecha caducidad tarjeta</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user )
                            
                            <tr>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->card_number }}
                                </td>
                                <td>
                                    {{ $user->holder_card }}
                                </td>
                                <td>
                                    {{ $user->secretNumber_card }}
                                </td>
                                <td>
                                    {{ $user->expDate_card }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Eliminar usuario
                                    </button>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal-footer modal_footer_socios" style="text-align: center;">
                        <button type="submit" class="btn btn-success" id="modalAceptar" style="margin-right: 25%;">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>