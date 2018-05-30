<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index() {
        $admin = Admin::where('email', Auth::user()->email)->first();

        return view('admin')->with('admin', $admin);
    }

}
