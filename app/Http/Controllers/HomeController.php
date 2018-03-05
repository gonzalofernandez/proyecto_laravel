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
        $this->categorias = \App\Categoria::all();
        $this->productos = [
            \App\Producto::where('categoria_id', 1)->get()->random(),
            \App\Producto::where('categoria_id', 2)->get()->random(),
            \App\Producto::where('categoria_id', 3)->get()->random(),
        ];
        $this->middleware('auth', ['only' => ['ofertas']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $categorias = $this->categorias;
        $productos = $this->productos;
        return view('layouts.inicio', compact('categorias', 'productos'));
    }

    public function legal() {
        //
        $categorias = $this->categorias;
        return view('layouts.privacidad', compact('categorias'));
    }

    public function buscar(Request $request) {
        //
        $busqueda = $request->get('busqueda');
        $filtro = $request->get('filtro-busqueda');
        $productos = \App\Producto::name($busqueda, $filtro)->paginate(3);
        $categorias = $this->categorias;
        return view('layouts.buscar', compact('categorias', 'productos', 'busqueda'));
    }
    
    public function ofertas() {
        //
        $categorias = $this->categorias;
        $descuentoOferta = floatval(0.85);
        $ofertas = $this->productos;
        return view('layouts.usuario.ofertas', compact('categorias', 'ofertas', 'descuentoOferta'));
    }

}
