<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Reserva;
use App\Reservasrestaurant;
use App\Reservasspa;
use App\Reservastratamiento;

class EditaUsuarioController extends Controller {

    public function editaUsuario(Request $request) {

        $user = User::where('name', Auth::user()->name)->first();

        $user->name = $request->usuario_nombre;
        $user->card_number = $request->usuario_tarjeta;
        $user->holder_card = $request->usuario_tarjeta_titular;
        $user->secretNumber_card = $request->usuario_tarjeta_numsec;
        $user->expDate_card = $request->usuario_tarjeta_fechacad;
        $user->email = $request->usuario_email;
        
        $user->save();

        $reservas_hab = Reserva::all();
        $reservas_rest = Reservasrestaurant::all();
        $reservas_spa = Reservasspa::all();
        $reservas_trat = Reservastratamiento::all();
        
        return view('home', compact('user','reservas_hab','reservas_rest','reservas_spa','reservas_trat'));
    }

}
