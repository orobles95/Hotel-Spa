<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Krucas\Notification\Facades\Notification;

class crearUsuarioController extends Controller {

    public function __construct() {
        $this->middleware('auth:admin');
    }
    
    public function afegirUsuari(Request $request) {

        $usuari = User::where('email', $request->email)->first();
        $pass1 = $request->password;
        $pass2 = $request->password_confirm;


        if ($usuari == null) {
            
            if ($pass1 !== $pass2) {
                Notification::error("Las contraseñas no coinciden");
                return redirect('admin');
            }
            
            $usuari = new User;
            $usuari->name = $request->name;
            $usuari->lastName = $request->lastName_newUser;
            $usuari->phoneNumber = $request->phoneNumber_newUser;
            $usuari->email = $request->email;
            $usuari->card_number = $request->card_number_newUser;
            $usuari->holder_card = $request->holder_card_newUser;
            $usuari->expDate_card = $request->expDate_card_newUser;
            /*$usuari->contrasenya = $request->contrasenya;*/
            $usuari->password = Hash::make($request->password);
            
            $usuari->save();

            Notification::success("El usuario se ha creado correctamente.");
        } else {
            Notification::error("Este usuario ya existe");
        }
        return redirect('admin');
    }

}
