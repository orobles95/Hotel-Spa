<div class="modal fade" id="miModalEditEmp" tabindex="-1" role="dialog" aria-labelledby="miModalEditEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerEmp" class="modal-content">
            <div class="text-center darkColor">
                <i class="fas fa-user"></i> Modificar empleado
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formEditEmp" name="formEditEmp" class="form-horizontal" method="POST" action="{{ url('/editEmp') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <div class="form-group row align-items-center">
                        <div class="col-3">
                            <label for="editEmpdni" class="control-label">DNI:</label>
                        </div>
                        <div class="col-4">
                            <input type="text" id="editEmpdni" name="editEmpdni" class="form-control" placeholder="12345678A" required />
                        </div>
                        <div class="col-2">
                            <label for="editEmpestado" class="control-label">Estado:</label>
                        </div>
                        <div class="col-3">
                            <select class="custom-select" id="editEmpestado" name="editEmpestado">
                                @foreach( $enum1 as $e1 )
                                <option value="{{ $e1 }}">{{ $e1 }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editEmpnombre" class="col-sm-3 control-label">Nombre:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editEmpnombre" name="editEmpnombre" class="form-control" placeholder="Nombre" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editEmpapellidos" class="col-sm-3 control-label">Apellidos:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editEmpapellidos" name="editEmpapellidos" class="form-control" placeholder="Apellidos"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editEmpemail" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="email" id="editEmpemail" name="editEmpemail" class="form-control" placeholder="example@example.com"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editEmpcontrasenya" class="col-sm-3 control-label">Contraseña:</label>
                        <div class="col-sm-9">
                            <input type="password" id="editEmpcontrasenya" name="editEmpcontrasenya" class="form-control" placeholder="********"  value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editEmptelefono" class="col-sm-3 control-label">Teléfono:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editEmptelefono" name="editEmptelefono" class="form-control" placeholder="666222555" value="" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="editEmpdireccion" class="col-sm-3 control-label">Dirección:</label>
                        <div class="col-sm-9">
                            <input type="text" id="editEmpdireccion" name="editEmpdireccion" class="form-control" placeholder="C/ calle, nº0" value="" required />
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-3">
                            <label for="editEmpcargo" class="control-label">Cargo:</label>
                        </div>
                        <div class="col-4">
                            <select class="custom-select" id="editEmpcargo" name="editEmpcargo">
                                @foreach( $enum2 as $e2 )
                                <option value="{{ $e2 }}">{{ $e2 }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <label for="editEmppuesto" class="control-label">Puesto:</label>
                        </div>
                        <div class="col-3">
                            <select class="custom-select" id="editEmppuesto" name="editEmppuesto">
                                @foreach( $enum3 as $e3 )
                                <option value="{{ $e3 }}">{{ $e3 }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>


                <div class="text-right darkColor">
                    <button id="modificar" class="btn btn-primary" type="submit">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>


