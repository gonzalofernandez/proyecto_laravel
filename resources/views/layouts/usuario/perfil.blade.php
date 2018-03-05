@extends('app')

@section('content')

{!! Form::model($usuario, ['method' => 'PATCH', 'route' => ['users.update', $usuario->id]]) !!}

@include('layouts/partials/_form')

{!! Form::close() !!}

{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $usuario->id]]) !!}
{!! Form::submit('Darse de baja', ['class'=>'btn']) !!}
{!! Form::close() !!}
{!! link_to_route('users.show', 'Volver', [$usuario->id]) !!}

@endsection
