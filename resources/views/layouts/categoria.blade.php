@extends('app')

@section('content')

<section>
    <h1  id="titulo-categoria" class="azul">{{ $categoria->nombre }}</h1>
    @if ( !$categoria->productos->count() )
    No hay productos.
    @else
    {!! Form::open(['url' => 'categorias/'.$categoria->slug.'/filtrar#titulo-categoria', 'method' => 'GET', 'class' => 'form bg-light buscador', 'role' => 'search']) !!}
    {!! Form::select('criterio', config('opciones.criterios'), null, ['class' => '']) !!}
    {!! Form::select('orden', config('opciones.orden'), null, ['class' => '']) !!}
    {!! Form::submit('Ordenar', ['class' => 'submit_btn']) !!}
    {!! Form::close() !!}
    <ul>
        @foreach( $productos as $producto )
        <li class="col-lg-4 contenido">
            <p><strong>{{ $producto->nombre }}</strong></p>
            <a href="{{ route('categorias.productos.show', [$categoria->slug, $producto->slug]) }}">
                <img class="img-rounded reducida" src="{{ asset($producto->imagen) }}" alt="foto de producto">
            </a>
            <p class="mayuscula precio"><strong class="azul">precio: </strong>{{ $producto->precio }} €</p>
        </li>
        @endforeach
    </ul>
    @endif
    <div class="aclarado">
        <nav aria-label="Elemento de navegacion">
            @if (isset($criterio))
            {{ $productos->appends(['criterio' => $criterio, 'orden' => $orden])->links() }}
            @else
            {{ $productos->links() }}
            @endif
        </nav>
        <a href="/">Volver</a>
    </div>
</section>

@endsection
