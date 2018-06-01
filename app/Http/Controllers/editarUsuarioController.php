<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class editarUsuarioController extends Controller {

    public function mostraUsuari() {

        $id = $_GET['id'];
        $usuari = DB::select("SELECT * FROM clientes WHERE idCliente = " . $id);

        return $usuari;
    }

    public function modificarUsuari(Request $request) {

        $id = $request->editidUsuario;
        $usuari = DB::select("SELECT * FROM clientes WHERE idCliente <> " . $id . " AND email = '" . $request->editemail . "'");
        $user = Cliente::findOrFail($id);

        if ($usuari == null) {
            $user->nombre = $request->editnombre;
            $user->apellidos = $request->editapellidos;
            $user->email = $request->editemail;
            //$user->contrasenya = bcrypt($request->contrasenya);
            $user->contrasenya = $request->editcontrasenya;
            $user->telefono = $request->edittelefono;
            $user->numTarjeta = $request->editnumTarjeta;
            $user->fechaTarjeta = $request->editfechaTarjeta;
            $user->cvvTarjeta = $request->editcvvTarjeta;
            $user->save();

            Notification::success("El usuario se ha modificado correctamente.");
            return redirect('admin');
        } else {
            Notification::error("Error!!! Este usuario ya existe.");
            return redirect('admin');
        }
    }

}
