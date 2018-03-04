@extends('app')

@section('content')

<section>
    <h1  id="titulo-categoria" class="rojo">Productos en oferta para usted</h1>
    <ul>
        @foreach( $ofertas as $producto )
        @foreach( $categorias as $categoria )
        @if ( $producto->categoria_id === $categoria->id )
        <li class="col-lg-4 contenido">
            <p><strong>{{ $producto->nombre }}</strong></p>
            <a href="/categorias/{{$categoria->slug}}/productos/{{$producto->slug}}/oferta/#nombreProducto">
                <img class="img-rounded reducida" src="{{ asset($producto->imagen) }}" alt="foto de producto">
            </a>
            <p class="mayuscula precio">
                <strong class="azul">precio: </strong>
                <del>{{ $producto->precio }} €</del>
            </p>
            <p class="mayuscula precio">
                <strong class="rojo">oferta especial: </strong>
                {{ (round($producto->precio * $descuentoOferta, 2)) }} €
            </p>
        </li>
        @endif
        @endforeach
        @endforeach
    </ul>
    <div class="aclarado">
        <a href="/">Volver</a>
    </div>
</section>

@endsection
