<div id="containerUsuarios" class="card-header">

    @include('crearUsuario')

    <div class="rowTitulo row">
        <label class="col-3">{{ trans('zona_socio.nombre_apellido') }}</label>
        <label class="col-3">{{ trans('zona_socio.input_email') }}</label>
        <label class="col-3">{{ trans('zona_socio.input_telefono') }}</label>
        <label class="col-3">{{ trans('zona_socio.acciones') }}</label>
    </div>

    @foreach( $users as $user )
    <div class="rowRegistro row">
        <label class="col-3 nom_usuario">{{ $user->name }} {{ $user->lastName }}
            <input type="hidden" class="idUsuario" value="{{ $user->id }}">
            <input type="hidden" class="nomUsuario" value="{{ $user->name }}">
            <input type="hidden" class="apellidoUsuario" value="{{ $user->lastName }}">
            <input type="hidden" class="emailUsuario" value="{{ $user->email }}">
            <input type="hidden" class="telefonoUsuario" value="{{ $user->phoneNumber }}">
            <input type="hidden" class="numTarjetaUsuario" value="{{ $user->card_number }}">
            <input type="hidden" class="titularTarjetaUsuario" value="{{ $user->holder_card }}">
            <input type="hidden" class="fechaTarjetaUsuario" value="{{ $user->expDate_card }}"> 


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
