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
                    'lastName' => 'required|string',
                    'phoneNumber' => 'required|string',
                    'email' => 'required|string|email|max:255|unique:users',
                    'card_number' => 'required|string',
                    'holder_card' => 'required|string',
                    'expDate_card' => 'required|string',
                    'password' => 'required|string|min:6|confirmed',
        ]);
    }

    protected function create(array $data) {
        return User::create([
                    'name' => $data['name'],
                    'lastName' => $data['lastName'],
                    'phoneNumber' => $data['phoneNumber'],
                    'email' => $data['email'],
                    'card_number' => $data['card_number'],
                    'holder_card' => $data['holder_card'],
                    'expDate_card' => $data['expDate_card'],
                    'password' => Hash::make($data['password']),
        ]);
    }

}
