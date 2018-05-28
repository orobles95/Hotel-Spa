<?php

namespace App\Http\Controllers;
use App\Room;
use App\Reserva;

use Illuminate\Http\Request;


class ReservaController extends Controller
{


  public function getIndex(){
    $rooms = Room::all();
    return view('calendario',['arrayHabitaciones'=> $rooms]);
  }
  
  public function getShow($id){
    return view('reservahabitacion', array('habitacion'=>$model = Room::findOrFail($id)));
  }

  public function getCreate(){
    return view('catalog.create');
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

}