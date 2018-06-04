<?php

namespace App\Http\Controllers;

use Auth;
use App\Admin;
use App\User;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('auth:admin');
    }

    public function index() {
        $admin = Admin::where('email', Auth::user()->email)->first();

        $users = User::all();

        return view('admin', compact('admin', 'users'));
    }

}
