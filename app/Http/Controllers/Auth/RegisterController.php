<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {
        return Validator::make($data, [
                    'nombre' => 'required|string|max:191',
                    'apellidos' => 'required|string|max:191',
                    'password' => 'required|digits:4',
                    'email' => 'required|email',
                    'direccion' => 'required',
                    'localidad' => 'required',
                    'cp' => 'required|digits:5',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {
        Session::flash('message', 'Se ha registrado en la aplicación');
        return User::create([
                    'nombre' => $data['nombre'],
                    'apellidos' => $data['apellidos'],
                    'password' => 'password'/*bcrypt($data['password'])*/,
                    'email' => $data['email'],
                    'direccion' => $data['direccion'],
                    'localidad' => $data['localidad'],
                    'cp' => $data['cp'],
                    'type' => 'user',
                    'confirm_token' => str_random(100),
                    'remember_token' => str_random(100),
        ]);
    }

}
