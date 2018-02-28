@extends('app')

@section('content')

<main class="modulo">
    <figure id="fotominions">
        <img src="img/imagenes/minionsOk.png" alt="Foto de los Minions">
    </figure>
    <div id="mensaje">
        <p class="mayuscula">lo sentimos, la página solicitada no ha sido encontrada.</p>
        <p class="mayuscula">para continuar recargue la página o pulse en el siguiente enlace.</p>
        <p class="mayuscula"><a id="inicio" href="index.html">volver a inicio</a></p>
    </div>
</main>

@endsection