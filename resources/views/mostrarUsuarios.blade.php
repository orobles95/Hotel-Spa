<div id="containerUsuarios" class="card-header">
    <div class="rowTitulo row">
        <label class="col-3">Nombre y apellidos</label>
        <label class="col-3">Email</label>
        <label class="col-3">Teléfono</label>
        <label class="col-3">Acciones</label>
    </div>

    @foreach( $clientes as $cliente )
    <div class="rowRegistro row">
        <label class="col-3">{{ $cliente->nombre }} {{ $cliente->apellidos }}</label>
        <label class="col-3">{{ $cliente->email }}</label>
        <label class="col-3">{{ $cliente->telefono }}</label>
        <div class="col-3 divAccions">
            <button name="modalButtonEdit" class="btn btn-warning" value="{{$cliente->idCliente}}"> Editar </button>
            <button name="modalButtonDelete" class="btn btn-danger" value="{{$cliente->idCliente}}"> Eliminar </button>
        </div>
    </div>
    @endforeach

    <div class="divBotoCrear">
        <button id="modalButtonNew" class="btn btn-primary"> Crear nuevo usuario </button>
    </div>
</div>
