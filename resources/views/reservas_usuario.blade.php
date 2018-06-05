<a id="reservasBtn" data-toggle="modal" data-target="#myModal_2" style="cursor: pointer;">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-bed"></i> {{ trans('zona_socio.misReserva_titulo') }}</h4>
        </div>
        <div class="card-body">
            <p>{{ trans('zona_socio.misReserva') }}</p>
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
                        <h4 class="modal-title modal_title_socios">{{ trans('zona_socio.misReserva_titulo2') }}</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <table style="text-align: center;" class="table table-condensed table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center;">{{ trans('zona_socio.tipo_reserva') }}</th>
                                <th style="text-align: center;">{{ trans('zona_socio.info_reserva') }}</th>
                                <th style="text-align: center;">{{ trans('zona_socio.fecha_entrada') }}</th>  
                                <th style="text-align: center;">{{ trans('zona_socio.fecha_salida') }}</th> 
                                <th style="text-align: center;">{{ trans('zona_socio.opciones') }}</th> 
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $reservas_hab as $reserva_hab )
                            @if( $user->email === $reserva_hab->client_email )
                            <tr>
                                <td class="tipo_reserva">
                                    <input type="hidden" class="idReserva" name="idReserva" value="{{ $reserva_hab->id }}">
                                    <input type="hidden" class="tipoReserva" name="tipoReserva" value="Habitación">
                                    {{ trans('zona_socio.habitacion') }}
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
                                    <a class="btn btn-danger" style="color: white; cursor: pointer;" onclick="cancelaReserva(this);">{{ trans('zona_socio.cancelarReservaBtn') }}</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @foreach( $reservas_rest as $reserva_rest )
                            @if( $user->email === $reserva_rest->client_email )
                            <tr>
                                <td class="tipo_reserva">
                                    <input type="hidden" class="idReserva" name="idReserva" value="{{ $reserva_rest->id }}">
                                    <input type="hidden" class="tipoReserva" name="tipoReserva" value="Restaurante">
                                    {{ trans('zona_socio.restaurante') }}
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
                                    <a class="btn btn-danger" style="color: white; cursor: pointer;" onclick="cancelaReserva(this);">{{ trans('zona_socio.cancelarReservaBtn') }}</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @foreach( $reservas_spa as $reserva_spa )
                            @if( $user->email === $reserva_spa->client_email )
                            <tr>
                                <td class="tipo_reserva">
                                    <input type="hidden" class="idReserva" name="idReserva" value="{{ $reserva_spa->id }}">
                                    <input type="hidden" class="tipoReserva" name="tipoReserva" value="Spa">
                                    {{ trans('zona_socio.spa') }}
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
                                    <a class="btn btn-danger" style="color: white; cursor: pointer;" onclick="cancelaReserva(this);">{{ trans('zona_socio.cancelarReservaBtn') }}</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach

                            @foreach( $reservas_trat as $reserva_trat )
                            @if( $user->email === $reserva_trat->client_email )
                            <tr>
                                <td class="tipo_reserva">
                                    <input type="hidden" class="idReserva" name="idReserva" value="{{ $reserva_trat->id }}">
                                    <input type="hidden" class="tipoReserva" name="tipoReserva" value="Tratamiento">
                                    {{ trans('zona_socio.tratamiento') }}
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
                                    <a class="btn btn-danger" style="color: white; cursor: pointer;" onclick="cancelaReserva(this);">{{ trans('zona_socio.cancelarReservaBtn') }}</a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal-footer modal_footer_socios" style="text-align: center;">
                        <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('zona_socio.cerrarBtn') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modal_cancelar_reserva" class="modal"  data-backdrop="static" data-keyboard="false">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" style="text-align: center;"> {{ trans('zona_socio.eliminarUsuarioTitulo') }} </h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">{{ trans('zona_socio.eliminarReservaText') }}</p>
                    <form action="{{ url('/cancelaReservaUsuario') }}" method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field()  }}
                        <div class="text-center" >
                            <button type="submit" class=" btn btn-danger "  > {{ trans('zona_socio.cancelarReservaBtn') }}</button>
                            <button type="button" onclick="borrarcancelaReserva(this);" class=" btn btn-primary " data-dismiss="modal" > {{ trans('zona_socio.cancelarBtn') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>