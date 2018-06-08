<div class="modal fade" id="miModalNewEmp" tabindex="-1" role="dialog" aria-labelledby="miModalNewEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerEmp" class="modal-content">
            <div class="text-center darkColor">
                <i class="fas fa-user"></i> Crear nuevo empleado
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formNewEmp" name="formNewEmp" class="form-horizontal" method="POST" action="{{ url('/newEmp') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <div class="form-group row align-items-center">
                        <div class="col-3">
                            <label for="newEmpdni" class="control-label">DNI:</label>
                        </div>
                        <div class="col-4">
                            <input type="text" id="newEmpdni" name="newEmpdni" class="form-control" placeholder="12345678A" required />
                        </div>
                        <div class="col-2">
                            <label for="newEmpestado" class="control-label">Estado:</label>
                        </div>
                        <div class="col-3">
                            <select class="custom-select" id="newEmpestado" name="newEmpestado">
                                @foreach( $enum1 as $e1 )
                                <option value="{{ $e1 }}">{{ $e1 }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newEmpnombre" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" id="newEmpnombre" name="newEmpnombre" class="form-control" placeholder="Nombre" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newEmpapellidos" class="col-sm-3 control-label">Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" id="newEmpapellidos" name="newEmpapellidos" class="form-control" placeholder="Apellidos"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newEmpemail" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" id="newEmpemail" name="newEmpemail" class="form-control" placeholder="example@example.com"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newEmpcontrasenya" class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" id="newEmpcontrasenya" name="newEmpcontrasenya" class="form-control" placeholder="********"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newEmptelefono" class="col-sm-3 control-label">Teléfono:</label>
                        <div class="col-sm-9">
                            <input type="text" id="newEmptelefono" name="newEmptelefono" class="form-control" placeholder="666222555" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="newEmpdireccion" class="col-sm-3 control-label">Dirección:</label>
                        <div class="col-sm-9">
                            <input type="text" id="newEmpdireccion" name="newEmpdireccion" class="form-control" placeholder="C/ calle, nº0" value="" required />
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-3">
                            <label for="newEmpcargo" class="control-label">Cargo:</label>
                        </div>
                        <div class="col-4">
                            <select class="custom-select" id="newEmpcargo" name="newEmpcargo">
                                @foreach( $enum2 as $e2 )
                                <option value="{{ $e2 }}">{{ $e2 }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="newEmppuesto" class="control-label">Puesto:</label>
                        </div>
                        <div class="col-3">
                            <select class="custom-select" id="newEmppuesto" name="newEmppuesto">
                                @foreach( $enum3 as $e3 )
                                <option value="{{ $e3 }}">{{ $e3 }}</option>
                                @endforeach
                            </select>
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
