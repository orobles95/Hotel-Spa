<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use Krucas\Notification\Facades\Notification;

class crearUsuarioController extends Controller {

    public function getIndex() {

        return redirect('admin');
    }

    public function afegirUsuari(Request $request) {

        $usuari = Cliente::where('email', $request->email)->first();


        if ($usuari == null) {
            $usuari = new Cliente;
            $usuari->nombre = $request->nombre;
            $usuari->apellidos = $request->apellidos;
            $usuari->email = $request->email;
            //$usuari->contrasenya = bcrypt($request->contrasenya);
            $usuari->contrasenya = $request->contrasenya;
            $usuari->telefono = $request->telefono;
            $usuari->numTarjeta = $request->numTarjeta;
            $usuari->fechaTarjeta = $request->fechaTarjeta;
            $usuari->cvvTarjeta = $request->cvvTarjeta;
            $usuari->save();

            Notification::success("Se ha registrado correctamente.");
            return redirect('admin');
        } else {
            Notification::error("Error!!! Este usuario ya existe.");
            return redirect('admin');
        }
    }

}
