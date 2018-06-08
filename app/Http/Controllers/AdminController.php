<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;
use App\User;
use App\Empleado;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index() {
        $admin = Admin::where('email', Auth::user()->email)->first();

        $users = User::all();
        $empleados = Empleado::all();

        $type1 = DB::select(DB::raw("SHOW COLUMNS FROM empleados WHERE Field = 'estado'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type1, $matches1);
        $enum1 = array();
        foreach (explode(',', $matches1[1]) as $value1) {
            $v1 = trim($value1, "'");
            $enum1 = array_add($enum1, $v1, $v1);
        }

        $type2 = DB::select(DB::raw("SHOW COLUMNS FROM empleados WHERE Field = 'cargo'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type2, $matches2);
        $enum2 = array();
        foreach (explode(',', $matches2[1]) as $value2) {
            $v2 = trim($value2, "'");
            $enum2 = array_add($enum2, $v2, $v2);
        }

        $type3 = DB::select(DB::raw("SHOW COLUMNS FROM empleados WHERE Field = 'puesto'"))[0]->Type;
        preg_match('/^enum\((.*)\)$/', $type3, $matches3);
        $enum3 = array();
        foreach (explode(',', $matches3[1]) as $value3) {
            $v3 = trim($value3, "'");
            $enum3 = array_add($enum3, $v3, $v3);
        }

        return view('admin', compact('admin', 'users', 'empleados', 'enum1', 'enum2', 'enum3'));
    }

}
