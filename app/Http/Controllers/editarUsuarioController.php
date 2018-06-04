<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Krucas\Notification\Facades\Notification;

class editarUsuarioController extends Controller {

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function modificarUsuari(Request $request) {

        $user = User::where('id', $request->usuario_id)->first();

        $user->name = $request->usuario_nombre;
        $user->lastName = $request->usuario_apellido;
        $user->email = $request->usuario_email;
        $user->phoneNumber = $request->usuario_telefono;
        $user->card_number = $request->usuario_tarjeta;
        $user->holder_card = $request->usuario_tarjeta_titular;
        $user->expDate_card = $request->usuario_tarjeta_fechacad;

        $user->save();


        if ($user !== null) {
            Notification::success("Se han modificado los datos del usuario correctamente");
        } else {
            Notification::error("No se ha podido modificar los datos del usuario");
        }

        return redirect('admin');
    }

}
