<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Krucas\Notification\Facades\Notification;
use Illuminate\Support\Facades\DB;
use App\Empleado;

class EmpleadoController extends Controller {

    public function getEmpleado() {

        return redirect('admin');
    }

    public function muestraEmpleado() {

        $id = $_GET['id'];
        $usuari = DB::select("SELECT * FROM empleados WHERE idEmp = " . $id);

        return $usuari;
    }

    public function creaEmpleado(Request $request) {

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

    public function modificaEmpleado(Request $request) {

        $id = $request->editEmpid;
        $empdni = DB::select("SELECT * FROM empleados WHERE idEmp <> '" . $id . "' AND dniEmp = '" . $request->editEmpdni . "'");
        //$empdni = DB::select("SELECT * FROM empleados WHERE dniEmp = '" . $dni . "'");
        $empemail = DB::select("SELECT * FROM empleados WHERE email = '" . $request->editEmpemail . "'");
        $usuari = Empleado::where('idEmp', $id)->first();

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

    public function altaEmpleado(Request $request) {

        $id = $request->altaEmpid;
        //$usuari = DB::select("SELECT * FROM empleados WHERE idEmp = '" . $id . "'");
        //$usuari = Empleado::findOrFail($id);
        $usuari = Empleado::where('idEmp', $id)->first();

        if ($usuari != null) {
            $usuari->estado = "Alta";
            $usuari->save();

            Notification::success("El empleado se ha dado de alta correctamente.");
        } else {
            Notification::error("Error!!! Este empleado no existe.");
        }

        return redirect('admin');
    }

    public function bajaEmpleado(Request $request) {

        $id = $request->bajaEmpid;
        $usuari = Empleado::where('idEmp', $id)->first();

        if ($usuari != null) {
            $usuari->estado = "Baja";
            $usuari->save();

            Notification::success("El empleado se ha dado de baja correctamente.");
        } else {
            Notification::error("Error!!! Este empleado no existe.");
        }

        return redirect('admin');
        echo "baja";
    }

    public function eliminaEmpleado(Request $request) {

        $id = $request->deleteEmpid;
        $usuari = Empleado::where('idEmp', $id)->first();

        if ($usuari != null) {

            $usuari->delete();

            Notification::success("El empleado se ha eliminado correctamente.");
        } else {
            Notification::error("Error!!! Este empleado ya existe.");
        }

        return redirect('admin');
    }

}
