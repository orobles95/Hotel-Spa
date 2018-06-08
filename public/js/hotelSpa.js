$(document).ready(function() {
    // comenzamos que cuando cargue la pagina no se muestre el div que contiene los datos
    $('#containerEmpleados').hide();
});

$('#adminEmpleados').click(function() {
    $('#containerEmpleados').show();
});

$('#reservasBtn').click(function() {
    $('#containerUsuarios').css("display", "flex");
    $('#containerUsuarios').show();
});




var urlNew = "http://localhost/Hotel-Spa/public/crearEmpleado";
var urlEdit = "http://localhost/Hotel-Spa/public/modificarEmpleado?id=";
var urlDelete = "http://localhost/Hotel-Spa/public/eliminarEmpleado?id=";
var iduser;

$('#modalButtonNewEmp').click(function() {
    $.get(urlNew)
            .done(function(data) {
                $('#modalButtonNewEmp').modal('toggle');
                $('#miModalNewEmp').modal('show');
            })
            .fail(function() {
                alert('Error.....');
            })
            .always(function() {
                //alert('Fi');
            });
});

$("button[name='modalButtonEditEmp']").click(function() {
    iduser = this.value;
    $.get(urlEdit + iduser)
            .done(function(data) {
                $('#editEmpid').val(data[0].idEmp);
                $('#editEmpdni').val(data[0].dniEmp);
                $('#editEmpnombre').val(data[0].nombre);
                $('#editEmpapellidos').val(data[0].apellidos);
                $('#editEmpemail').val(data[0].email);
                $('#editEmpcontrasenya').val(data[0].contrasenya);
                $('#editEmptelefono').val(data[0].telefono);
                $('#editEmpdireccion').val(data[0].direccion);
                $('#editEmpcargo').val(data[0].cargo);
                $('#editEmppuesto').val(data[0].puesto);
                $('#editEmpestado').val(data[0].estado);

                $('#modalButtonEditEmp').modal('toggle');
                $('#miModalEditEmp').modal('show');
            })
            .fail(function() {
                alert('Error.....');
            })
            .always(function() {
                //alert('Fi');
            });
});

$("button[name='modalButtonDeleteEmp']").click(function() {
    iduser = this.value;
    $.get(urlDelete + iduser)
            .done(function(data) {
                $('#deleteEmpid').val(data[0].idEmp);
                $('#deleteEmpdni').html(data[0].dniEmp);
                $('#deleteEmpnombre').html(data[0].nombre);
                $('#deleteEmpapellidos').html(data[0].apellidos);
                $('#deleteEmpemail').html(data[0].email);
                $('#deleteEmpcontrasenya').html(data[0].contrasenya);
                $('#deleteEmptelefono').html(data[0].telefono);
                $('#deleteEmpdireccion').html(data[0].direccion);
                $('#deleteEmpcargo').html(data[0].cargo);
                $('#deleteEmppuesto').html(data[0].puesto);
                $('#deleteEmpestado').html(data[0].estado);

                $('#modalButtonDeleteEmp').modal('toggle');
                $('#miModalDeleteEmp').modal('show');
            })
            .fail(function() {
                alert('Error.....');
            })
            .always(function() {
                //alert('Fi');
            });
});

function cancelaReserva(t) {

    $('#modal_cancelar_reserva').modal('show');

    var idReserva = $(t).parent().parent().children('.tipo_reserva').children('.idReserva').val();

    var tipoReserva = $(t).parent().parent().children('.tipo_reserva').children('.tipoReserva').val();

    var modal_cancelaReserva = $('#modal_cancelar_reserva').children([0]).children([0]).children([0]).children('.modal-body').children('form');
    input_idReserva = jQuery('<input type="hidden" id="idcancelaReserva" name="idcancelaReserva" value="' + idReserva + '">');
    modal_cancelaReserva.append(input_idReserva);

    input_tipoReserva = jQuery('<input type="hidden" id="tipocancelaReserva" name="tipocancelaReserva" value="' + tipoReserva + '">');
    modal_cancelaReserva.append(input_tipoReserva);
}

function borrarcancelaReserva(t) {
    $(t).parent().parent().children('#idcancelaReserva').remove();
    $(t).parent().parent().children('#tipocancelaReserva').remove();
}

function eliminarUsuario(t) {

    $('#modal_eliminar_usuario').modal('show');

    var idUsuario = $(t).parent().parent().children('.nom_usuario').children('.idUsuario').val();
    console.log(idUsuario);

    var modal_eliminar_usuario = $('#modal_eliminar_usuario').children([0]).children([0]).children([0]).children('.modal-body').children('form');
    input_idUsuario = jQuery('<input type="hidden" id="ideliminaUsuario" name="ideliminaUsuario" value="' + idUsuario + '">');
    modal_eliminar_usuario.append(input_idUsuario);
}

function borrareliminarUsuario(t) {
    $(t).parent().parent().children('#ideliminaUsuario').remove();
}

function editaUsuari(t) {

    //Asigna nombre grupo en input
    var idUsuario = $(t).parent().parent().children('.nom_usuario').children('.idUsuario').val();
    var nomUsuario = $(t).parent().parent().children('.nom_usuario').children('.nomUsuario').val();
    var apellidoUsuario = $(t).parent().parent().children('.nom_usuario').children('.apellidoUsuario').val();
    var emailUsuario = $(t).parent().parent().children('.nom_usuario').children('.emailUsuario').val();
    var telefonoUsuario = $(t).parent().parent().children('.nom_usuario').children('.telefonoUsuario').val();
    var numTarjetaUsuario = $(t).parent().parent().children('.nom_usuario').children('.numTarjetaUsuario').val();
    var titularTarjetaUsuario = $(t).parent().parent().children('.nom_usuario').children('.titularTarjetaUsuario').val();
    var fechaTarjetaUsuario = $(t).parent().parent().children('.nom_usuario').children('.fechaTarjetaUsuario').val();

    $('#usuario_id').val(idUsuario);
    $('#usuario_nombre').val(nomUsuario);
    $('#usuario_apellido').val(apellidoUsuario);
    $('#usuario_email').val(emailUsuario);
    $('#usuario_telefono').val(telefonoUsuario);
    $('#usuario_tarjeta').val(numTarjetaUsuario);
    $('#usuario_tarjeta_titular').val(titularTarjetaUsuario);
    $('#usuario_tarjeta_fechacad').val(fechaTarjetaUsuario);
}
