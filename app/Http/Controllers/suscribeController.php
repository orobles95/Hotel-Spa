<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscrito;
use Krucas\Notification\Facades\Notification;

class suscribeController extends Controller {
    /* public function getIndex() {

      //return back();
      return redirect('master');
      } */

    public function afegirSuscriptor(Request $request) {

        $usuari = Suscrito::where('email', $request->suscribeEmail)->first();
        //$usuari = DB::select("SELECT * FROM suscritos WHERE email = '" . $request->suscribeEmail."'");


        if ($usuari == null) {
            $usuari = new Suscrito;
            $usuari->nombre = $request->suscribeNombre;
            $usuari->apellidos = $request->suscribeApellidos;
            $usuari->email = $request->suscribeEmail;
            $usuari->save();

            Notification::success("Se ha suscrito correctamente.");
            return back();
        } else {
            Notification::error("Error!!! Este usuario ya esta suscrito.");
            return back();
        }
    }

}
