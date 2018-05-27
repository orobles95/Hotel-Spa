<a id="perfilBtn" data-toggle="modal" data-target="#myModal" style="cursor: pointer;">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-bed"></i> Mis Reservas</h4>
        </div>
        <div class="card-body">
            <p>Realizar el seguimiento o cancelar una reserva</p>
        </div>
    </div>
</a>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div id="modal_modificar" class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formEditGrup" name="formEditGrup" class="form-horizontal" method="POST" action="{{ url('/editGrup') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header" style="text-align: center; background: #455A64; color: white; border-radius: 5px 5px 0px 0px;">
                        <h4 class="modal-title" style="text-align: center; display:inline; cursor:default;">Modificar grup</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="display:inline;">
                            <a aria-hidden="true" style="font-size: 30px;">&times;</a>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="nomUsuari">Nom Usuari:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="cu45_nomUsuari" id="cu45_nomUsuari" placeholder="Nom Usuari" value="" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="contrasenya">Contrasenya:</label>
                            </div>
                            <div class="col-8">
                                <input type="password" style="width: 100%;" name="cu45_contrasenya" id="cu45_contrasenya" placeholder="Contrasenya" value="" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="nom" >Nom:</label>

                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="cu45_nom" id="cu45_nom" placeholder="Nom" value="" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="cognoms">Cogmons:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="cu45_cognoms" id="cu45_cognoms" placeholder="Cognoms" value="" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="email" >Email:</label>
                            </div>
                            <div class="col-8">
                                <input type="email" style="width: 100%;" name="cu45_email" id="cu45_email" placeholder="Email" value="" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="dadesPostals">Dades Postals:</label>
                            </div>
                            <div class="col-8">
                                 <input type="text" style="width: 100%;" name="cu45_dadesPostals" id="cu45_dadesPostals" placeholder="Dades Postals" value="" required />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="text-align: center;">
                        <button type="submit" class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>