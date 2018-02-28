@extends('app')

@section('content')

<figure>
    <img class="img-rounded" src="{{ asset('img/inicio/promosocios.png') }}" alt="imagen inicial">
</figure>
<!--id="imagen"class="redondeando"<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('img/inicio/socios.png') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/inicio/socios.png') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/inicio/socios.png') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->
<div class="container-fluid">
    <div class="row">
        @foreach ($productos as $producto)
        @foreach ($categorias as $categoria)
        @if ($producto->categoria_id === $categoria->id) 
        <div class="col-lg-4 contenido">
            <a href="categorias/{{ $categoria->slug }}/productos/{{ $producto->slug }}">
                <img class="img-rounded reducida" src="{{ $producto->imagen }}" alt="foto de tabla">
            </a>
            <p>{{ $producto->nombre }}</p>
            <p class="precio">{{ $producto->precio }} €</p>
        </div>
        @endif
        @endforeach
        @endforeach
    </div>
</div>

@endsection