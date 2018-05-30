<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {

    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct() {
        $this->middleware('guest');
    }

    protected function validator(array $data) {
        return Validator::make($data, [
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'card_number' => 'required|string|min:16|max:16',
                    'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'card_number' => $data['card_number'],
                    'password' => Hash::make($data['password']),
        ]);
    }

}
