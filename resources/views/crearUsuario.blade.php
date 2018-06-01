
<div class="modal fade" id="miModalNew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerUser" class="modal-content">
            <div class="text-center darkColor">
                Crear nuevo usuario
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formNewUser" name="formNewUser" class="form-horizontal" method="POST" action="{{ url('/newUser') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <div>
                        <input type="text" id="idUsuario" value="" hidden/>
                    </div>
                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-3 control-label">Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contrasenya" class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" id="contrasenya" name="contrasenya" class="form-control" placeholder="Contraseña"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 control-label">Telefono:</label>
                        <div class="col-sm-9">
                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="numTarjeta" class="col-sm-3 control-label">Numero Tarjeta:</label>
                        <div class="col-sm-9">
                            <input type="text" id="numTarjeta" name="numTarjeta" class="form-control" placeholder="Numero Tarjeta" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fechaTarjeta" class="col-sm-3 control-label">Fecha Caducidad:</label>
                        <div class="col-sm-9">
                            <input type="text" id="fechaTarjeta" name="fechaTarjeta" class="form-control" placeholder="Fecha Caducidad" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cvvTarjeta" class="col-sm-3 control-label">CVV:</label>
                        <div class="col-sm-9">
                            <input type="text" id="cvvTarjeta" name="cvvTarjeta" class="form-control" placeholder="CVV" value="" required />
                        </div>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button id="crear" class="btn btn-primary" type="submit">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>




