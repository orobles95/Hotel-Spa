<!--
<button name="modalButtonDelete" class="btn btn-danger" value="{{$user->id}}"> 
    Eliminar 
</button>
-->
<a class="btn btn-danger" class="eliminaUsuarioBtn" style="color: white; cursor: pointer;" onclick="eliminarUsuario(this);">
    {{ trans('zona_socio.eliminarUsuarioBtn') }}
</a>


<div id="modal_eliminar_usuario" class="modal"  data-backdrop="static" data-keyboard="false">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">

                    <h4 class="modal-title" style="text-align: center;"> {{ trans('zona_socio.eliminarUsuarioTitulo') }} </h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">{{ trans('zona_socio.eliminarUsuarioText') }}</p>
                    <form action="{{ url('/delUser') }}" method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field()  }}
                        <div class="text-center" >
                            <button type="submit" class=" btn btn-danger "  > {{ trans('zona_socio.eliminarUsuarioBtn') }}</button>
                            <button type="button" onclick="borrareliminarUsuario(this);" class=" btn btn-primary " data-dismiss="modal" > {{ trans('zona_socio.cancelarBtn') }}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>