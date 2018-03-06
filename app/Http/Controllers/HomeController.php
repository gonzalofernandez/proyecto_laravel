<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
        $this->middleware('auth', ['only' => ['ofertas']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        //
        if ($request->session()->has('productos')) {
            $productos = session('productos');
        } else {
            $productos = session(['productos' => [
                    \App\Producto::where('categoria_id', 1)->get()->random(),
                    \App\Producto::where('categoria_id', 2)->get()->random(),
                    \App\Producto::where('categoria_id', 3)->get()->random(),
            ]]);
        }
        if ($request->session()->has('categorias')) {
            $categorias = session('categorias');
        } else {
            $categorias = session(['categorias' => \App\Categoria::all()]);
        }
        return view('layouts.inicio', compact('categorias', 'productos'));
    }

    public function legal() {
        //
        $categorias = session('categorias');
        return view('layouts.privacidad', compact('categorias'));
    }

    public function buscar(Request $request) {
        //
        $busqueda = $request->get('busqueda');
        $filtro = $request->get('filtro-busqueda');
        $productos = \App\Producto::name($busqueda, $filtro)->paginate(3);
        $categorias = session('categorias');
        return view('layouts.buscar', compact('categorias', 'productos', 'busqueda'));
    }

    public function ofertas() {
        //
        $categorias = session('categorias');
        $ofertas = session('productos');
        session(['descuentoOferta' => floatval(0.85)]);
        $descuentoOferta = session('descuentoOferta');
        return view('layouts.usuario.ofertas', compact('categorias', 'ofertas', 'descuentoOferta'));
    }

}
