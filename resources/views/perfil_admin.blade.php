<a id="perfilBtn" data-toggle="modal" data-target="#myModal_3" style="cursor: pointer;">
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-user"></i> Mi Perfil</h4>
        </div>
        <div class="card-body">
            <p>Editar datos de esta cuenta administradora.</p>
        </div>
    </div>
</a>

<div class="modal modal_socios fade" tabindex="-1" role="dialog" id="myModal_3">
    <div id="modal_perfil_socios" class="modal-dialog modal_dialog_socios modal-lg" role="document">
        <div class="modal-content modal_content_socios">
            <form id="formEditarUsuario" name="formEditarUsuario" class="form-horizontal" method="POST" action="{{ url('/editaAdmin') }}">
                <div class="controls">
                    {{ method_field('PUT') }}
                    {{ csrf_field()  }}
                    <div class="modal-header modal_header_socios">
                        <h4 class="modal-title modal_title_socios">Mis datos</h4>
                        <button type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">
                            <a aria-hidden="true">&times;</a>
                        </button>
                    </div>
                    <div class="modal-body modal_body_socios">
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="admin_nombre">Nombre:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="admin_nombre" id="admin_nombre" placeholder="Nombre" value="{{ $admin->name }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="admin_email" >Correo electrónico:</label>
                            </div>
                            <div class="col-8">
                                <input type="email" style="width: 100%;" name="admin_email" id="admin_email" placeholder="Email" value="{{ $admin->email }}" required />
                            </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="admin_job">Trabajo:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" style="width: 100%;" name="admin_job" id="admin_job" minlength="5" value="{{ $admin->job_title }}" required />
                            </div>
                        </div>
                        <!--
                        <div class="row" style="margin-bottom: 15px;">
                            <div class="col-4">
                                <label for="contrasenya">Contrasenya:</label>
                            </div>
                            <div class="col-8">
                                <input type="password" style="width: 100%;" name="cu45_contrasenya" id="cu45_contrasenya" placeholder="Contrasenya" required />
                            </div>
                        </div>
                        -->
                    </div>
                    <div class="modal-footer modal_footer_socios" style="text-align: center;">
                        <button type="submit" class="btn btn-success" id="modalGuardar" style="margin-right: 25%;">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>