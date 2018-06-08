<div class="modal fade" id="miModalBajaEmp" tabindex="-1" role="dialog" aria-labelledby="miModalBajaEmp" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div id="containerEmp" class="modal-content">
            <div class="text-center darkColor">
                <i class="fas fa-arrow-down"><i class="fas fa-user"></i></i> Baja empleado
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="formBajaEmp" name="formBajaEmp" class="form-horizontal" method="POST" action="{{ url('/bajaEmp') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <input type="text" id="bajaEmpid" name="bajaEmpid" hidden />
                    <div class="row">
                        <label class="col-5 eliminarEmp">DNI: </label>
                        <label id="bajaEmpdni"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Estado: </label>
                        <label id="bajaEmpestado"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Nombre: </label>
                        <label id="bajaEmpnombre"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Apellidos: </label>
                        <label id="bajaEmpapellidos"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Email: </label>
                        <label id="bajaEmpemail"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Contraseña: </label>
                        <label id="bajaEmpcontrasenya"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Teléfono: </label>
                        <label id="bajaEmptelefono"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Dirección: </label>
                        <label id="bajaEmpdireccion"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Cargo: </label>
                        <label id="bajaEmpcargo"></label>
                    </div>
                    <div class="row">
                        <label class="col-5 eliminarEmp">Puesto: </label>
                        <label id="bajaEmppuesto"></label>
                    </div>
                </div>
                <div class="text-right darkColor">
                    <button id="baja" class="btn btn-success" type="submit">Baja</button>
                </div>
            </form>
        </div>
    </div>
</div>




