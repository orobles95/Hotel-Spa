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
use Krucas\Notification\Facades\Notification;

class ReservaController extends Controller {

    public function getShow($id) {
        return view('reservahabitacion', array('habitacion' => $model = Room::findOrFail($id)));
    }

    public function postCreate(Request $request) {


        $room = $request->room;
        $fechaentrada = $request->fechaentrada;
        $fechasalida = $request->fechasalida;

        $habitacio = Reserva::where('room', $room)
                        ->where('fechasalida', '>', $fechaentrada)
                        ->orderBy('fechasalida', 'desc')->first();


        if ($habitacio == null && $fechaentrada < $fechasalida) {

            $p = new Reserva;
            $p->room = $room;
            $p->fechaentrada = $fechaentrada;
            $p->fechasalida = $fechasalida;
            if (Auth::check()) {
                $p->client_email = Auth::user()->email;
                $p->card_number = Auth::user()->card_number;
                $p->holder_card = Auth::user()->holder_card;
                $p->expDate_card = Auth::user()->expDate_card;
            } else {
                $p->card_number = $request->card_number;
                $p->client_email = 'Usuario no registrado';
                $p->holder_card = $request->holder_card;
                $p->expDate_card = $request->expDate_card;
            }

            $p->save();

            Notification::success("La habitación se ha reservado correctamente");
            return back();
        } else {
            Notification::error("Esta habitación ya esta reservada para estas fechas");
            return back();
        }
    }

    public function getShowrestaurante($id) {
        return view('reservarestaurante', array('restaurante' => $model = Restaurant::findOrFail($id)));
    }

    public function postCreaterestaurante(Request $request) {


        $restaurant = $request->input('restaurant');
        $fechaentrada = $request->input('fechaentrada');
        $comensales = $request->input('comensales');
        $hora = $request->input('hora');


        $reserva_rest = Restaurant::where('restaurant', $restaurant)
                ->where('fechaentrada', $fechaentrada)
                ->where('hora', $hora);

        if ($reserva_rest !== null) {
            Notification::error("El restaurante en esta fecha ya tiene esta hora reservada");
            return back();
        }

        $p = new Reservasrestaurant;
        $p->restaurant = $restaurant;
        $p->fechaentrada = $fechaentrada;
        $p->comensales = $comensales;
        $p->hora = $hora;
        if (Auth::check()) {
            $p->client_email = Auth::user()->email;
            $p->card_number = Auth::user()->card_number;
            $p->holder_card = Auth::user()->holder_card;
            $p->expDate_card = Auth::user()->expDate_card;
        } else {
            $p->card_number = $request->card_number;
            $p->client_email = 'Usuario no registrado';
            $p->holder_card = $request->holder_card;
            $p->expDate_card = $request->expDate_card;
        }

        $p->save();

        Notification::success("Se ha reservado hora en el restaurante correctamente");
        return back();
    }

    public function getShowspa($id) {
        return view('reservaspa', array('spa' => $model = Spa::findOrFail($id)));
    }

    public function postCreatespa(Request $request) {


        $spa = $request->input('spa');
        $fechaentrada = $request->input('fechaentrada');
        $personas = $request->input('personas');
        $hora = $request->input('hora');

        $reserva_spa = Spa::where('spa', $spa)
                ->where('fechaentrada', $fechaentrada)
                ->where('hora', $hora);

        if ($reserva_spa !== null) {
            Notification::error("El Balneario-Spa en esta fecha ya tiene esta hora reservada");
            return back();
        }

        $p = new Reservasspa;
        $p->spa = $spa;
        $p->fechaentrada = $fechaentrada;
        $p->personas = $personas;
        $p->hora = $hora;
        if (Auth::check()) {
            $p->client_email = Auth::user()->email;
            $p->card_number = Auth::user()->card_number;
            $p->holder_card = Auth::user()->holder_card;
            $p->expDate_card = Auth::user()->expDate_card;
        } else {
            $p->card_number = $request->card_number;
            $p->client_email = 'Usuario no registrado';
            $p->holder_card = $request->holder_card;
            $p->expDate_card = $request->expDate_card;
        }

        $p->save();

        Notification::success("Se ha reservado hora en el Balneario-Spa correctamente");
        return back();
    }

    public function getShowtratamiento($id) {
        return view('reservatratamiento', array('tratamiento' => $model = Tratamiento::findOrFail($id)));
    }

    public function postCreatetratamiento(Request $request) {


        $tratamiento = $request->input('tratamiento');
        $fechaentrada = $request->input('fechaentrada');
        $hora = $request->input('hora');

        $reserva_tratamiento = Tratamiento::where('tratamiento', $tratamiento)
                ->where('fechaentrada', $fechaentrada)
                ->where('hora', $hora);

        if ($reserva_tratamiento !== null) {
            Notification::error("Este tratamiento en esta fecha ya tiene esta hora reservada");
            return back();
        }

        $p = new Reservastratamiento;
        $p->tratamiento = $tratamiento;
        $p->fechaentrada = $fechaentrada;
        $p->hora = $hora;
        if (Auth::check()) {
            $p->client_email = Auth::user()->email;
            $p->card_number = Auth::user()->card_number;
            $p->holder_card = Auth::user()->holder_card;
            $p->expDate_card = Auth::user()->expDate_card;
        } else {
            $p->card_number = $request->card_number;
            $p->client_email = 'Usuario no registrado';
            $p->holder_card = $request->holder_card;
            $p->expDate_card = $request->expDate_card;
        }

        $p->save();

        Notification::success("Se ha reservado hora para el tratamiento correctamente");
        return back();
    }

}
