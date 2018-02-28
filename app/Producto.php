<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model {

    protected $guarded = [];

    public function categoria() {
        return $this->belongsTo('App\Categoria');
    }

    public function scopeName($query, $busqueda, $filtro) {
        if ($filtro) {
            $query->where('nombre', "LIKE", "%$busqueda%")
                    ->where('categoria_id', $filtro)->get();
        } else {
            $query->where('nombre', "LIKE", "%$busqueda%")->get();
        }
    }

    public function scopeProductos($query, $categoriaId, $criterio, $orden) {
        $query->where('categoria_id', $categoriaId)->orderBy($criterio, $orden)->get();
    }

}
