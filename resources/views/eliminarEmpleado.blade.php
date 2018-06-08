<div class="modal fade" id="miModalDeleteEmp" tabindex="-1" role="dialog" aria-labelledby="miModalDeleteEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerEmp" class="modal-content">
            <div class="text-center darkColor">
                <i class="fas fa-user"></i> Eliminar empleado
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formDeleteEmp" name="formDeleteEmp" class="form-horizontal" method="POST" action="{{ url('/delEmp') }}">
                <div class="controls">
                    {{ csrf_field() }}
                    <input type="text" id="deleteEmpid" name="deleteEmpid" hidden />
                    <div class="form-group row">
                        <label class="col-3 control-label">DNI: </label>
                        <label id="deleteEmpdni" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Estado: </label>
                        <label id="deleteEmpestado" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-3">Nombre: </label>
                        <label id="deleteEmpnombre" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Apellidos:</label>
                        <label id="deleteEmpapellidos" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Email:</label>
                        <label id="deleteEmpemail" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Contraseña:</label>
                        <label id="deleteEmpcontrasenya" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Teléfono:</label>
                        <label id="deleteEmptelefono" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Dirección:</label>
                        <label id="deleteEmpdireccion" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Cargo:</label>
                        <label id="deleteEmpcargo" class="control-label"></label>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 control-label">Puesto:</label>
                        <label id="deleteEmppuesto" class="control-label"></label>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button id="eliminar" class="btn btn-danger" type="submit">Eliminar</button>
                </div>
            </form>
        </div>
    </div>
</div>



