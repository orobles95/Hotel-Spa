<div id="containerEmpleados" class="card-header">
    <div class="rowTitulo row">
        <label class="col-3">Nombre y apellidos</label>
        <label class="col-2">Email</label>
        <label class="col-2">Teléfono</label>
        <label class="col-2">Cargo</label>
        <label class="col-3">Acciones</label>
    </div>

    @foreach( $empleados as $empleado )
    <div class="rowRegistro row">
        <label class="col-3">{{ $empleado->nombre }} {{ $empleado->apellidos }}</label>
        <label class="col-2">{{ $empleado->email }}</label>
        <label class="col-2">{{ $empleado->telefono }}</label>
        <label class="col-2">{{ $empleado->cargo }}</label>
        <div class="col-3 divAccions">
            <button name="modalButtonEditEmp" class="btn btn-warning" value="{{$empleado->idEmp}}"> Editar </button>
            @if ($empleado->estado == 'Baja')
            <button name="modalButtonAltaEmp" class="btn btn-success" value="{{$empleado->idEmp}}"> Alta </button>
            @elseif($empleado->estado == 'Alta')
            <button name="modalButtonBajaEmp" class="btn btn-info" value="{{$empleado->idEmp}}"> Baja </button>
            @endif
            <button name="modalButtonDeleteEmp" class="btn btn-danger" value="{{$empleado->idEmp}}"> Eliminar </button>
        </div>
    </div>
    @endforeach

    <div class="divBotoCrear">
        <button id="modalButtonNewEmp" class="btn btn-primary"> Crear nuevo empleado </button>
    </div>
</div>

