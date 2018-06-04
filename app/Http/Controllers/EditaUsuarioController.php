<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\User;
use Auth;

class EditaUsuarioController extends Controller {

    public function editaUsuario(Request $request) {

        $user = User::where('id', Auth::user()->id)->first();

        $user->name = $request->usuario_nombre;
        $user->lastName = $request->usuario_apellido;
        $user->email = $request->usuario_email;
        $user->phoneNumber = $request->usuario_telefono;
        $user->card_number = $request->usuario_tarjeta;
        $user->holder_card = $request->usuario_tarjeta_titular;
        $user->expDate_card = $request->usuario_tarjeta_fechacad;

        $user->save();

        
        if ($user !== null) {
            Notification::success("Se han modificado tus datos correctamente");
        } else {
            Notification::error("No se ha podido modificar tus datos");
        }
        
        return redirect('/home');
        
    }

}
