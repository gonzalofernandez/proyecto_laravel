@extends('app')

@section('content')

<section>
    <h2 class="azul">Resultados de la búsqueda</h2>
    @if (count($productos) > 0)
    <ul>
        @foreach( $productos as $producto )
        @foreach( $categorias as $categoria )
        @if ($producto->categoria_id === $categoria->id)
        <li class="col-lg-4 contenido">
            <p><strong>{{ $producto->nombre }}</strong></p>
            <a href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}">
                <img class="img-rounded reducida" src="{{ asset($producto->imagen) }}" alt="foto de producto">
            </a>
            <p class="mayuscula precio"><strong class="azul">precio: </strong>{{ $producto->precio }} €</p>
        </li>
        @endif
        @endforeach
        @endforeach
    </ul>
    @else
    <h2 class="text-danger">No se encontraron resultados, intentelo de nuevo</h2>
    <div class="text-justify" id="box-search">
        <figure>
            <img src="{{asset('img/imagenes/minionsOk.png')}}" alt="imagen de error">
        </figure>
    </div>
    @endif
    <div class="aclarado">
        <nav aria-label="Elemento de navegacion">
            {{ $productos->appends(['busqueda' => $busqueda])->links() }}
        </nav>
        @if (Auth::check())
        <a href="/home">Volver</a>
        @else
        <a href="/">Volver</a>
        @endif
    </div>
</section>
@endsection
