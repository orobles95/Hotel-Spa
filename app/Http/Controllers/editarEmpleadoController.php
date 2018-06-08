<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Empleado;

class editarEmpleadoController extends Controller {

    public function muestraEmpleado() {

        $dni = $_GET['dni'];
        $usuari = DB::select("SELECT * FROM empleados WHERE dniEmp = " . $dni);

        return $usuari;
    }

    public function modificaEmpleado(Request $request) {

        $dni = $request->editEmpdni;
        //$empdni = DB::select("SELECT * FROM empleados WHERE dniEmp = " . $dni . " AND email = '" . $request->editEmpemail . "'");
        $empdni = DB::select("SELECT * FROM empleados WHERE dniEmp = '" . $dni . "'");
        $empemail = DB::select("SELECT * FROM empleados WHERE email = '" . $request->editEmpemail . "'");
        $usuari = Empleado::findOrFail($dni);

        if ($empdni == null) {
            if ($empemail == null) {
                $usuari->dniEmp = $request->editEmpdni;
                $usuari->nombre = $request->editEmpnombre;
                $usuari->apellidos = $request->editEmpapellidos;
                $usuari->email = $request->editEmpemail;
                //$usuari->contrasenya = bcrypt($request->editEmpcontrasenya);
                $usuari->contrasenya = $request->editEmpcontrasenya;
                $usuari->telefono = $request->editEmptelefono;
                $usuari->direccion = $request->editEmpdireccion;
                $usuari->cargo = $request->editEmpcargo;
                $usuari->puesto = $request->editEmppuesto;
                $usuari->estado = $request->editEmpestado;
                $usuari->save();
            } else {
                Notification::error("Error!!! Este email ya existe.");
            }
            Notification::success("El empleado se ha modificado correctamente.");
        } else {
            Notification::error("Error!!! Este empleado ya existe.");
        }

        return redirect('admin');
    }

}
