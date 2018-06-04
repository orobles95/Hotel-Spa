<button name="modalButtonEdit" class="btn btn-warning" value="{{$user->id}}"> 
    Editar 
</button>

<div class="modal fade" id="miModalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerUser" class="modal-content">
            <div class="text-center darkColor">
                Crear nou usuari
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formNewUser" name="formNewUser" class="form-horizontal" method="POST" action="{{ url('/editUser') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <div>
                        <input type="text" id="editidUsuario" name="editidUsuario" value="" hidden/>
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editnombre" name="editnombre" class="form-control" placeholder="Nombre" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-3 control-label">Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editapellidos" name="editapellidos" class="form-control" placeholder="Apellidos"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" id="editemail" name="editemail" class="form-control" placeholder="Email"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contrasenya" class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" id="editcontrasenya" name="editcontrasenya" class="form-control" placeholder="Contraseña"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 control-label">Telefono:</label>
                        <div class="col-sm-9">
                            <input type="text" id="edittelefono" name="edittelefono" class="form-control" placeholder="Teléfono" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numTarjeta" class="col-sm-3 control-label">Numero Tarjeta:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editnumTarjeta" name="editnumTarjeta" class="form-control" placeholder="Numero Tarjeta" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fechaTarjeta" class="col-sm-3 control-label">Fecha Caducidad:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editfechaTarjeta" name="editfechaTarjeta" class="form-control" placeholder="Fecha Caducidad" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cvvTarjeta" class="col-sm-3 control-label">CVV:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editcvvTarjeta" name="editcvvTarjeta" class="form-control" placeholder="CVV" value="" required />
                        </div>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button name="modificar" class="btn btn-primary" type="submit">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>






