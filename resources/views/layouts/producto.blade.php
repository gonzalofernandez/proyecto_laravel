@extends('app')

@section('content')

<h1 id="producto" class="rojo">{{ $producto->nombre }}</h1>
<figure>
    <img class="img-rounded imagen-grande" src="{{ asset($producto->imagen) }}" alt="imagen de producto">
</figure>
<section>
    <p class="mayuscula"><strong class="azul">descripcion: </strong>
        {{ $producto->descripcion }}
    </p>
    @if (Auth::check())
    <p class="mayuscula precio">
        <strong class="azul">precio: </strong>
        <del>{{ $producto->precio }} €</del>
    </p>
        @if (isset($descuentoOferta))
    <p class="mayuscula precio"><strong class="rojo">oferta especial: </strong>
        {{ (round($producto->precio * $descuentoOferta, 2)) }} €
    </p>
        @else
    <p class="mayuscula precio">
        <strong class="rojo">oferta socio: </strong>
        {{ (round(($producto->precio * 0.9), 2)) }} €
    </p>
        @endif
    @else
    <p class="mayuscula precio"><strong class="azul">precio: </strong>
        {{ $producto->precio }} €
    </p>
    @endif
</section>
<section>
    <p>{!! link_to_route('categorias.show', 'Volver', [$categoria->slug]) !!}</p>
</section>

@endsection
