<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\User;
use Auth;

class EditaAdminController extends Controller {

    public function editaAdmin(Request $request) {

        $admin = Admin::where('name', Auth::guard('admin')->name)->first();

        $admin->name = $request->admin_nombre;
        $admin->email = $request->admin_email;
        $admin->job_title = $request->admin_job;
        
        $admin->save();
    
        $users = User::all();

        return view('admin', compact('admin','users'));
    }

}
