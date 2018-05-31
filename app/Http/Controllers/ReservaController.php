<?php

namespace App\Http\Controllers;

use App\Room;
use App\Reserva;
use App\Restaurant;
use App\Reservasrestaurant;
use App\Spa;
use App\Reservasspa;
use App\Tratamiento;
use App\Reservastratamiento;
use Auth;
use Illuminate\Http\Request;

class ReservaController extends Controller {

    public function getShow($id) {
        return view('reservahabitacion', array('habitacion' => $model = Room::findOrFail($id)));
    }

    public function postCreate(Request $request) {


        $room = $request->input('room');
        $fechaentrada = $request->input('fechaentrada');
        $fechasalida = $request->input('fechasalida');




        $habitacio = Reserva::where('room', $request->room)
                        ->where('fechasalida', '>', $request->fechaentrada)
                        ->orderBy('fechasalida', 'desc')->first();

        if ($habitacio == null && $fechaentrada < $fechasalida) {

            $p = new Reserva;
            $p->room = $room;
            
            $p->fechaentrada = $fechaentrada;
            $p->fechasalida = $fechasalida;
            if (Auth::check()) {
                $p->client_email = Auth::user()->email;
                $p->card_number = Auth::user()->card_number;
            } else {
                $p->card_number = $request->card_number;
                $p->client_email = 'Usuario no registrado';
            }

            $p->save();

            return redirect('/habitaciones');
        }


        return redirect('/habitaciones');
    }

    public function getShowrestaurante($id) {
        return view('reservarestaurante', array('restaurante' => $model = Restaurant::findOrFail($id)));
    }

    public function postCreaterestaurante(Request $request) {


        $restaurant = $request->input('restaurant');
        $fechaentrada = $request->input('fechaentrada');
        $comensales = $request->input('comensales');
        $hora = $request->input('hora');


        $p = new Reservasrestaurant;
        $p->restaurant = $restaurant;
        $p->client_email = Auth::user()->email;
        $p->fechaentrada = $fechaentrada;
        $p->comensales = $comensales;
        $p->hora = $hora;
        if (Auth::check()) {
            $p->card_number = Auth::user()->card_number;
        } else {
            $p->card_number = $request->card_number;
        }

        $p->save();

        return redirect('/restaurante');
    }

    public function getShowspa($id) {
        return view('reservaspa', array('spa' => $model = Spa::findOrFail($id)));
    }

    public function postCreatespa(Request $request) {


        $spa = $request->input('spa');
        $fechaentrada = $request->input('fechaentrada');
        $personas = $request->input('personas');
        $hora = $request->input('hora');


        $p = new Reservasspa;
        $p->spa = $spa;
        $p->client_email = Auth::user()->email;
        $p->fechaentrada = $fechaentrada;
        $p->personas = $personas;
        $p->hora = $hora;
        if (Auth::check()) {
            $p->card_number = Auth::user()->card_number;
        } else {
            $p->card_number = $request->card_number;
        }

        $p->save();

        return redirect('/spa');
    }

    public function getShowtratamiento($id) {
        return view('reservatratamiento', array('tratamiento' => $model = Tratamiento::findOrFail($id)));
    }

    public function postCreatetratamiento(Request $request) {


        $tratamiento = $request->input('tratamiento');
        $fechaentrada = $request->input('fechaentrada');
        $hora = $request->input('hora');


        $p = new Reservastratamiento;
        $p->tratamiento = $tratamiento;
        $p->client_email = Auth::user()->email;
        $p->fechaentrada = $fechaentrada;
        $p->hora = $hora;
        if (Auth::check()) {
            $p->card_number = Auth::user()->card_number;
        } else {
            $p->card_number = $request->card_number;
        }

        $p->save();

        return redirect('/tratamientos');
    }

}
