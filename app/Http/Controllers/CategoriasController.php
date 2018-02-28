<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Producto;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Redirect;
use Illuminate\Database\Eloquent\Model;

class CategoriasController extends Controller {

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
        //return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria $categoria
     * @return Response
     * 
     */
    public function show(Categoria $categoria) {
        $categorias = Categoria::all();
        $productos = $categoria->productos()->paginate(3);
        return view('layouts.categoria', compact('categorias', 'categoria', 'productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function edit(Project $project) {
        //return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function update(Project $project) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project $project
     * @return Response
     */
    public function destroy(Project $project) {
        //
    }

    public function filtrar(Categoria $categoria, Request $request) {
        $categorias = Categoria::all();
        $criterio = $request->get('criterio');
        $orden = $request->get('orden');
        $productos = \App\Producto::productos($categoria->getAttribute('id'), $criterio, $orden)->paginate(3);
        return view('layouts.categoria', compact('categorias', 'categoria', 'productos', 'criterio', 'orden'));
    }

}
