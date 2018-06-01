$(document).ready(function() {
    // comenzamos que cuando cargue la pagina no se muestre el div que contiene los datos
    $('#containerUsuarios').hide();
});

$('#reservasBtn').click(function() {
    $('#containerUsuarios').show();
});

var urlNew = "http://localhost/Hotel-Spa/public/crearUsuario";
var urlEdit = "http://localhost/Hotel-Spa/public/modificarUsuario?id=";
var urlDelete = "http://localhost/Hotel-Spa/public/eliminarUsuario?id=";
var iduser;

$('#modalButtonNew').click(function() {
    $.get(urlNew)
            .done(function(data) {
                $('#modalButtonNew').modal('toggle');
                $('#miModalNew').modal('show');
            })
            .fail(function() {
                alert('Error.....');
            })
            .always(function() {
                //alert('Fi');
            });
});

$("button[name='modalButtonEdit']").click(function() {
    iduser = this.value;
    $.get(urlEdit + iduser)
            .done(function(data) {
                $('#editidUsuario').val(data[0].idCliente);
                $('#editnombre').val(data[0].nombre);
                $('#editapellidos').val(data[0].apellidos);
                $('#editemail').val(data[0].email);
                $('#editcontrasenya').val(data[0].contrasenya);
                $('#edittelefono').val(data[0].telefono);
                $('#editnumTarjeta').val(data[0].numTarjeta);
                $('#editfechaTarjeta').val(data[0].fechaTarjeta);
                $('#editcvvTarjeta').val(data[0].cvvTarjeta);

                $('#modalButtonEdit').modal('toggle');
                $('#miModalEdit').modal('show');
            })
            .fail(function() {
                alert('Error.....');
            })
            .always(function() {
                //alert('Fi');
            });
});

$("button[name='modalButtonDelete']").click(function() {
    iduser = this.value;
    $.get(urlDelete + iduser)
            .done(function(data) {
                $('#deleteidUsuario').val(data[0].idCliente);
                $('#deletenombre').val(data[0].nombre);
                $('#deleteapellidos').val(data[0].apellidos);
                $('#deleteemail').val(data[0].email);
                $('#deletecontrasenya').val(data[0].contrasenya);
                $('#deletetelefono').val(data[0].telefono);
                $('#deletenumTarjeta').val(data[0].numTarjeta);
                $('#deletefechaTarjeta').val(data[0].fechaTarjeta);
                $('#deletecvvTarjeta').val(data[0].cvvTarjeta);

                $('#modalButtonDelete').modal('toggle');
                $('#miModalDelete').modal('show');
            })
            .fail(function() {
                alert('Error.....');
            })
            .always(function() {
                //alert('Fi');
            });
});
