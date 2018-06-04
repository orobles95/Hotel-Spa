<div id="containerUsuarios" class="card-header">

    @include('crearUsuario')

    <div class="rowTitulo row">
        <label class="col-3">Nombre y apellidos</label>
        <label class="col-3">Email</label>
        <label class="col-3">Teléfono</label>
        <label class="col-3">Acciones</label>
    </div>

    @foreach( $users as $user )
    <div class="rowRegistro row">
        <label class="col-3 nom_usuario">{{ $user->name }} {{ $user->lastName }}
            <input type="hidden" class="idUsuario" name="idUsuario" value="{{ $user->id }}">
        </label>
        <label class="col-3">{{ $user->email }}</label>
        <label class="col-3">{{ $user->phoneNumber }}</label>
        <div class="col-3 divAccions">
            @include('editarUsuario')
            @include('eliminarUsuario')
        </div>
    </div>
    @endforeach



</div>
