<?php

namespace App\Http\Controllers;
use App\Room;
use App\Reserva;
use App\Restaurant;
use App\Reservasrestaurant;

use Illuminate\Http\Request;


class ReservaController extends Controller
{

  
  public function getShow($id){
    return view('reservahabitacion', array('habitacion'=>$model = Room::findOrFail($id)));
  }
  
  public function postCreate(Request $request) {
     
      
    $room = $request->input('room');
    $fechaentrada = $request->input('fechaentrada');
    $fechasalida = $request->input('fechasalida');
  
    
    $habitacio = Reserva::where('room', $request->room)
                        ->where('fechasalida', '>' , $request->fechaentrada)
                        ->orderBy('fechasalida', 'desc')->first();
    
    if($habitacio == null && $fechaentrada < $fechasalida ) {
        
        $p = new Reserva;
        $p->room = $room;
        $p->fechaentrada = $fechaentrada;
        $p->fechasalida = $fechasalida;

        $p->save();
     
        return redirect('/habitaciones');
    
    }

    
    return redirect('/habitaciones');

    }
    
     public function getShowrestaurante($id){
    return view('reservarestaurante', array('restaurante'=>$model = Restaurant::findOrFail($id)));
  }
  
  public function postCreaterestaurante(Request $request) {
     
      
    $restaurant = $request->input('restaurant');
    $fechaentrada = $request->input('fechaentrada');
    $comensales = $request->input('comensales');
    $hora = $request->input('hora');
  
        
        $p = new Reservasrestaurant;
        $p->restaurant = $restaurant;
        $p->fechaentrada = $fechaentrada;
        $p->comensales = $comensales;
        $p->hora = $hora;

        $p->save();
     
        return redirect('/restaurante');
    

    }

}