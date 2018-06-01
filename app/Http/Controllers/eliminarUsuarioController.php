<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Cliente;

class eliminarUsuarioController extends Controller {

    public function mostraUsuari() {

        $id = $_GET['id'];
        $usuari = DB::select("SELECT * FROM clientes WHERE idCliente = " . $id);

        return $usuari;
    }

    public function eliminarUsuari(Request $request) {

        $id = $request->deleteidUsuario;
        $user = Cliente::findOrFail($id);

        if ($user != null) {

            $user->delete();

            Notification::success("El usuario se ha eliminado correctamente.");
            return redirect('admin');
        } else {
            Notification::error("Error!!! Este usuario no existe.");
            return redirect('admin');
        }
    }

}
