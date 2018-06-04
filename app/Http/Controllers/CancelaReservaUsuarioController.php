<?php

namespace App\Http\Controllers;

use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
use App\Reserva;
use App\Reservasrestaurant;
use App\Reservasspa;
use App\Reservastratamiento;

class CancelaReservaUsuarioController extends Controller {

    public function cancelaReservaUsuario(Request $request) {

        $tipo_reserva = $request->tipocancelaReserva;
        $id_reserva = $request->idcancelaReserva;

        if ($tipo_reserva === 'Habitación') {
            $reservas_hab = Reserva::where('id', $id_reserva)->first();
            $reservas_hab->delete();
        }
        if ($tipo_reserva === 'Restaurante') {
            $reservas_rest = Reservasrestaurant::where('id', $id_reserva)->first();
            $reservas_rest->delete();
        }
        if ($tipo_reserva === 'Spa') {
            $reservas_spa = Reservasspa::where('id', $id_reserva)->first();
            $reservas_spa->delete();
        }
        if ($tipo_reserva === 'Tratamiento') {
            $reservas_trat = Reservastratamiento::where('id', $id_reserva)->first();
            $reservas_trat->delete();
        }


        if (($tipo_reserva !== null) && ($id_reserva !== null)) {
            Notification::success("Se ha cancelado la reserva");
        } else {
            Notification::error("No se ha podido cancelar la reserva");
        }
        
        return redirect('/home');
    }
}