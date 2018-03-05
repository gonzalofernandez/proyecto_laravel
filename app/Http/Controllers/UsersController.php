<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\User;
use App\Http\Controllers\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Auth;

class UsersController extends Controller {

    protected $rules = [
        'nombre' => ['required'],
        'apellidos' => ['required'],
        'password' => ['required', 'digits:4'],
        'email' => ['required', 'email'],
        'direccion' => ['required'],
        'localidad' => ['required'],
        'cp' => ['required', 'digits:5'],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
        $categorias = Categoria::all();
        return view('layouts.usuario.registro', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        //
        /* $categorias = Categoria::all();
          $this->validate($request, $this->rules);
          $user = new User($request->all());
          $user->type = 'user';
          $user->confirm_token = str_random(100);
          $user->remember_token = str_random(100);
          $datos['nombre'] = $user->name;
          $datos['email'] = $user->email;
          $datos['confirm_token'] = $user->confirm_token;
          Mail::send('layouts.mails.registro', ['datos' => $datos], function($msj) use($datos) {
          $msj->subject('Confirmación de registro');
          $msj->to($datos['email'], $datos['nombre']);
          });
          Session::flash('info', 'Revisa tu correo');
          return redirect()->action('HomeController@index', compact('categorias')); */
    }

    public function confirmRegister($confirm_token) {
        //
        /* $user = \App\User::where('confirm_token', '=', $confirm_token)->first();
          // si hay usuario activamos la cuenta
          if ($user) {
          if ($user->active == 0) {
          $user->type = 'user';
          $active = 1;
          $user->fill(['active' => $active]);
          $user->save();
          Session::flash('success', 'Bienvenido ' . $user->name . ' tu cuenta esta activada, ya puedes iniciar sesion');
          return \Redirect::route('usuario.index');
          } else {
          return \Redirect::route('usuario.index');
          }
          }
          Session::flash('danger', 'Error de activación, token no encontrado');
          return \Redirect::route('usuario.index'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria $categoria
     * @return Response
     * 
     */
    public function show($id) {
        //
        $usuario = User::find($id);
        $categorias = Categoria::all();
        $ofertas = [
            \App\Producto::where('categoria_id', 1)->get()->random(),
            \App\Producto::where('categoria_id', 2)->get()->random(),
            \App\Producto::where('categoria_id', 3)->get()->random(),
        ];
        $descuentoOferta = floatval(0.85);
        return view('layouts.usuario.ofertas', compact('categorias', 'usuario', 'ofertas', 'descuentoOferta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit($id) {
        //
        $usuario = User::find($id);
        $categorias = Categoria::all();
        return view('layouts.usuario.perfil', compact('categorias', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function update($id, Request $request) {
        //
        $usuario = User::find($id);
        $input = array_except(Input::all(), '_method');
        $this->validate($request, $this->rules);
        $usuario->update($input);
        $usuario->save();
        $categorias = Categoria::all();
        $descuentoOferta = floatval(0.85);
        $ofertas = [
            \App\Producto::where('categoria_id', 1)->get()->random(),
            \App\Producto::where('categoria_id', 2)->get()->random(),
            \App\Producto::where('categoria_id', 3)->get()->random(),
        ];
        Session::flash('message', 'Sus datos han sido actualizados');
        return view('layouts.usuario.ofertas', compact('categorias', 'usuario', 'ofertas', 'descuentoOferta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return Response
     */
    public function destroy($id) {
        //
        User::destroy($id);
        \Auth::logout();
        \Session::flush();
        \Session::flash('message', 'Su perfil ha sido eliminado');
        return redirect()->action('HomeController@index');
    }

}
