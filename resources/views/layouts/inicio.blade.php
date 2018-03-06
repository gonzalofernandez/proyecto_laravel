@extends('app')

@section('content')

<figure>
    <img class="img-rounded" src="{{ asset('img/inicio/promosocios.png') }}" alt="Imagen inicial">
</figure>
<div id="myCarousel" class="carousel slide margen-inferior container contenido" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img class="img-carr img-rounded" src="{{ asset('img/inicio/carrusel/foto1.png') }}" alt="Foto de snowboard">
        </div>

        <div class="item">
            <img class="img-carr img-rounded" src="{{ asset('img/inicio/carrusel/foto2.png') }}" alt="Foto de snowboard">
        </div>

        <div class="item">
            <img class="img-carr img-rounded" src="{{ asset('img/inicio/carrusel/foto3.png') }}" alt="Foto de snowboard">
        </div>
    </div>
</div>
<div class="row container">
    @foreach ($productos as $producto)
        <div class="col-lg-4 contenido">
        @foreach ($categorias as $categoria)
        @if ($producto->categoria_id === $categoria->id)
        <a class="" href="categorias/{{ $categoria->slug }}/productos/{{ $producto->slug }}">
            <img class="img-rounded" src="{{ $producto->imagen }}" alt="foto de tabla">
        </a>
        <p>{{ $producto->nombre }}</p>
        <p class="precio">{{ $producto->precio }} €</p>
        @endif
        @endforeach
    </div>
    @endforeach
</div>

@endsection
