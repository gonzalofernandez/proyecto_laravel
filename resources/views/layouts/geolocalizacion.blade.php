@extends('app')

@section('content')

<h2 class="titulo-Login">Ubicación</h2>
<div id="coordenadas" data-lat="{{ $lat }}" data-long="{{ $long }}"></div>
<div id="map" class="container-fluid"></div>
<div class="container-fluid text-center">
    <small>lat: <b>{{$lat}}</b>  lng: <b>{{$long}}</b>  región: <b>{{$region}}</b></small>
</div>

@endsection