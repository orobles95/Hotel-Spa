<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Empleado;

class eliminarEmpleadoController extends Controller {

    public function muestraEmpleado() {

        $dni = $_GET['dni'];
        $usuari = DB::select("SELECT * FROM empleados WHERE dniEmp = " . $dni);

        return $usuari;
    }

    public function eliminaEmpleado(Request $request) {

        $dni = $request->deleteEmpdni;
        $usuari = Empleado::findOrFail($dni);

        if ($usuari != null) {

            $usuari->delete();

            Notification::success("El empleado se ha eliminado correctamente.");
        } else {
            Notification::error("Error!!! Este empleado ya existe.");
        }

        return redirect('admin');
    }

}
