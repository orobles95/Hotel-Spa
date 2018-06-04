<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use App\User;

class eliminarUsuarioController extends Controller {

    public function eliminarUsuari(Request $request) {

        $user = User::where('id', $request->ideliminaUsuario)->first();

        if ($user != null) {

            $user->delete();

            Notification::success("El usuario se ha eliminado correctamente.");
        } else {
            Notification::error("Error!!! Este usuario no existe.");
        }
        return redirect('admin');
    }

}
