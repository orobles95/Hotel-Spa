<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Empleado;

class eliminarEmpleadoController extends Controller {

    public function muestraEmpleado() {

        $id = $_GET['id'];
        $usuari = DB::select("SELECT * FROM empleados WHERE idEmp = " . $id);
        //$usuari = Empleado::where('idEmp', $id)->first();

        return $usuari;
    }

    public function eliminaEmpleado(Request $request) {

        $id = $request->deleteEmpid;
        $usuari = Empleado::findOrFail($id);

        if ($usuari != null) {

            $usuari->delete();

            Notification::success("El empleado se ha eliminado correctamente.");
        } else {
            Notification::error("Error!!! Este empleado ya existe.");
        }

        return redirect('admin');
    }

}
