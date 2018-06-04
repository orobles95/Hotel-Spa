<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class EditaUsuarioController extends Controller {

    public function editaUsuario(Request $request) {

        $user = User::where('name', $request->nom_user)->first();

        $user->name = $request->usuario_nombre;
        $user->card_number = $request->usuario_tarjeta;
        $user->holder_card = $request->usuario_tarjeta_titular;
        $user->secretNumber_card = $request->usuario_tarjeta_numsec;
        $user->expDate_card = $request->usuario_tarjeta_fechacad;
        $user->email = $request->usuario_email;

        $user->save();

        return redirect('/home');
        
    }

}
