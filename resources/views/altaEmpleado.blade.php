<div class="modal fade" id="miModalAltaEmp" tabindex="-1" role="dialog" aria-labelledby="miModalAltaEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerEmp" class="modal-content">
            <div class="text-center darkColor">
                <i class="fas fa-arrow-up"><i class="fas fa-user"></i></i> Alta empleado
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formAltaEmp" name="formAltaEmp" class="form-horizontal" method="POST" action="{{ url('/altaEmp') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <input type="text" id="altaEmpid" name="altaEmpid" hidden />
                    <div class="row">
                        <label class="col-5 eliminarEmp">DNI: </label>
                        <label id="altaEmpdni"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Estado: </label>
                        <label id="altaEmpestado"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Nombre: </label>
                        <label id="altaEmpnombre"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Apellidos: </label>
                        <label id="altaEmpapellidos"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Email: </label>
                        <label id="altaEmpemail"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Contraseña: </label>
                        <label id="altaEmpcontrasenya"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Teléfono: </label>
                        <label id="altaEmptelefono"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Dirección: </label>
                        <label id="altaEmpdireccion"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Cargo: </label>
                        <label id="altaEmpcargo"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Puesto: </label>
                        <label id="altaEmppuesto"></label>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button id="alta" class="btn btn-success" type="submit">Alta</button>
                </div>
            </form>
        </div>
    </div>
</div>


