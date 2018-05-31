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
    <div id="modal_reservas_socios" class="modal-dialog modal_dialog_socios modal-lg" role="document">
        <div class="modal-content modal_content">
            <form id="formReservas" name="formReservas" class="form-horizontal" method="POST" action="{{ url('/editGrup') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">Mis reservas</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <table style="text-align: center;" class="table table-condensed table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Tipo reserva</th>
                                <th style="text-align: center;">Info reserva</th>
                                <th style="text-align: center;">Fecha entrada</th>  
                                <th style="text-align: center;">Fecha salida / hora</th> 
                                <th style="text-align: center;">Opciones</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $reservas_hab as $reserva_hab )
                            @if( $user->email === $reserva_hab->client_email )
                            <tr>
                                <td>
                                    Habitación
                                </td>
                                <td>
                                    {{ $reserva_hab->room }}
                                </td>
                                <td>
                                    {{ $reserva_hab->fechaentrada }}
                                </td>
                                <td>
                                    {{ $reserva_hab->fechasalida }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Cancelar reserva
                                    </button>
                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @foreach( $reservas_rest as $reserva_rest )
                            @if( $user->email === $reserva_rest->client_email )
                            <tr>
                                <td>
                                    Restaurante
                                </td>
                                <td>
                                    {{ $reserva_rest->restaurant }}
                                </td>
                                <td>
                                    {{ $reserva_rest->fechaentrada }}
                                </td>
                                <td>
                                    {{ $reserva_rest->hora }}
                                </td>
                                <td>

                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @foreach( $reservas_spa as $reserva_spa )
                            @if( $user->email === $reserva_spa->client_email )
                            <tr>
                                <td>
                                    Spa
                                </td>
                                <td>
                                    {{ $reserva_spa->spa }}
                                </td>
                                <td>
                                    {{ $reserva_spa->fechaentrada }}
                                </td>
                                <td>
                                    {{ $reserva_spa->hora }}
                                </td>
                                <td>

                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @foreach( $reservas_trat as $reserva_trat )
                            @if( $user->email === $reserva_trat->client_email )
                            <tr>
                                <td>
                                    Tratamiento
                                </td>
                                <td>
                                    {{ $reserva_trat->tratamiento }}
                                </td>
                                <td>
                                    {{ $reserva_trat->fechaentrada }}
                                </td>
                                <td>
                                    {{ $reserva_trat->hora }}
                                </td>
                                <td>

                                </td>
                            </tr>
                            @endif
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