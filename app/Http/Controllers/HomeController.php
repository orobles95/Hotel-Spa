<?php

namespace App\Http\Controllers;

use Auth;
use App\User;

class HomeController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = User::where('name', Auth::user()->name)->first();

        return view('home')->with('user', $user);
    }

}
