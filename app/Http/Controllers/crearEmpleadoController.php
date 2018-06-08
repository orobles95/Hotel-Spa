<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleado;
use Krucas\Notification\Facades\Notification;

class crearEmpleadoController extends Controller {

    public function getEmpleado() {

        return redirect('admin');
    }

    public function afegirEmpleado(Request $request) {

        $usuari = Empleado::where('email', $request->newEmpemail)->first();

        if ($usuari == null) {
            $usuari = new Empleado;
            $usuari->dniEmp = $request->newEmpdni;
            $usuari->nombre = $request->newEmpnombre;
            $usuari->apellidos = $request->newEmpapellidos;
            $usuari->email = $request->newEmpemail;
            //$usuari->contrasenya = bcrypt($request->newEmpcontrasenya);
            $usuari->contrasenya = $request->newEmpcontrasenya;
            $usuari->telefono = $request->newEmptelefono;
            $usuari->direccion = $request->newEmpdireccion;
            $usuari->cargo = $request->newEmpcargo;
            $usuari->puesto = $request->newEmppuesto;
            $usuari->estado = $request->newEmpestado;
            $usuari->save();

            Notification::success("El empleado se ha creado correctamente.");
        } else {
            Notification::error("Error!!! Este empleado ya existe.");
        }

        return redirect('admin');
    }

}
