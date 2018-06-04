<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class EditaAdminController extends Controller {

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function editaAdmin(Request $request) {

        $admin = Admin::where('name', $request->nom_admin)->first();

        $admin->name = $request->admin_nombre;
        $admin->email = $request->admin_email;
        $admin->job_title = $request->admin_job;

        $admin->save();

        return redirect('/admin');
    }

}
