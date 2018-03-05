@extends('app')

@section('content')

{!! Form::open(['route' => 'register', 'method' => 'post']) !!}

@include('layouts/partials/_form')

{!! Form::close() !!}
<a href="/">Volver</a>

@endsection
