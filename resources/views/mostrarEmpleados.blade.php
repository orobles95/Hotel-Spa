<div id="containerEmpleados" class="card-header">
    <div class="divBotoCrear">
        <button id="modalButtonNewEmp" class="btn btn-primary"><i class="fas fa-user-plus"></i> Crear nuevo empleado </button>
    </div>

    <div class="rowTitulo row">
        <label class="col-2">Nombre</label>
        <label class="col-2">Email</label>
        <label class="col-2">Teléfono</label>
        <label class="col-2">Cargo</label>
        <label class="col-4">Acciones</label>
    </div>

    @foreach( $empleados as $empleado )
    <div class="rowRegistro row">
        <label class="col-2">{{ $empleado->nombre }} {{ $empleado->apellidos }}</label>
        <label class="col-2">{{ $empleado->email }}</label>
        <label class="col-2">{{ $empleado->telefono }}</label>
        <label class="col-2">{{ $empleado->cargo }}</label>
        <div class="col-4 divAccions">
            <button name="modalButtonEditEmp" class="btn btn-warning" value="{{$empleado->idEmp}}"><i class="fas fa-pencil-alt"></i> Editar </button>
            @if ($empleado->estado == 'Baja')
            <button name="modalButtonAltaEmp" class="btn btn-success minbutton" value="{{$empleado->idEmp}}"><i class="fas fa-arrow-up"></i> Alta </button>
            @elseif($empleado->estado == 'Alta')
            <button name="modalButtonBajaEmp" class="btn btn-info minbutton" value="{{$empleado->idEmp}}"><i class="fas fa-arrow-down"></i> Baja </button>
            @endif
            <button name="modalButtonDeleteEmp" class="btn btn-danger" value="{{$empleado->idEmp}}"><i class="fas fa-trash-alt"></i> Eliminar </button>
        </div>
    </div>
    @endforeach
</div>

