<?php

namespace App\Http\Controllers;

//use Auth;
use Krucas\Notification\Facades\Notification;
use Illuminate\Http\Request;
//use App\User;
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

        /*
        $user = User::where('name', Auth::user()->name)->first();
        $reservas_hab = Reserva::all();
        $reservas_rest = Reservasrestaurant::all();
        $reservas_spa = Reservasspa::all();
        $reservas_trat = Reservastratamiento::all();

        return view('home', compact('user', 'reservas_hab', 'reservas_rest', 'reservas_spa', 'reservas_trat'));
*/

        Notification::success("Se ha cancelado la reserva");
        return redirect('/home');
    }

}
