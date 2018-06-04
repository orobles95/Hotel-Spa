<button name="modalButtonDelete" class="btn btn-danger" value="{{$user->id}}"> 
    Eliminar 
</button>

<div class="modal fade" id="miModalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerUser" class="modal-content">
            <div class="text-center darkColor">
                Eliminar usuario
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formNewUser" name="formNewUser" class="form-horizontal" method="POST" action="{{ url('/delUser') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <div>
                        <input type="text" id="deleteidUsuario" name="deleteidUsuario" value="" hidden/>
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" id="deletenombre" name="deletenombre" class="form-control" placeholder="Nombre" value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-3 control-label">Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" id="deleteapellidos" name="deleteapellidos" class="form-control" placeholder="Apellidos"  value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" id="deleteemail" name="deleteemail" class="form-control" placeholder="Email"  value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contrasenya" class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" id="deletecontrasenya" name="deletecontrasenya" class="form-control" placeholder="Contraseña"  value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 control-label">Telefono:</label>
                        <div class="col-sm-9">
                            <input type="text" id="deletetelefono" name="deletetelefono" class="form-control" placeholder="Teléfono" value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numTarjeta" class="col-sm-3 control-label">Numero Tarjeta:</label>
                        <div class="col-sm-9">
                            <input type="text" id="deletenumTarjeta" name="deletenumTarjeta" class="form-control" placeholder="Numero Tarjeta" value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fechaTarjeta" class="col-sm-3 control-label">Fecha Caducidad:</label>
                        <div class="col-sm-9">
                            <input type="text" id="deletefechaTarjeta" name="deletefechaTarjeta" class="form-control" placeholder="Fecha Caducidad" value="" required disabled />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cvvTarjeta" class="col-sm-3 control-label">CVV:</label>
                        <div class="col-sm-9">
                            <input type="text" id="deletecvvTarjeta" name="deletecvvTarjeta" class="form-control" placeholder="CVV" value="" required disabled />
                        </div>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button name="eliminar" class="btn btn-danger" type="submit">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>








