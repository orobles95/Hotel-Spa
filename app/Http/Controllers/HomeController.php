<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Reserva;
use App\Reservasrestaurant;
use App\Reservasspa;
use App\Reservastratamiento;


class HomeController extends Controller {

    public function index() {
        $user = User::where('name', Auth::user()->name)->first();
        $reservas_hab = Reserva::all();
        $reservas_rest = Reservasrestaurant::all();
        $reservas_spa = Reservasspa::all();
        $reservas_trat = Reservastratamiento::all();
        
        return view('/home', compact('user','reservas_hab','reservas_rest','reservas_spa','reservas_trat'));
    }

}
