<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class EditaUsuarioController extends Controller {

    public function editaUsuario(Request $request) {

        $user = User::where('name', Auth::user()->name)->first();

        $user->name = $request->usuario_nombre;
        $user->card_number = $request->usuario_tarjeta;
        $user->email = $request->usuario_email;
        
        $user->save();

        return view('home')->with('user', $user);
    }

}
