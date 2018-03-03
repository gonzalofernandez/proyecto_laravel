@extends('app')

@section('content')

{!! Form::open(['route' => 'users.store', 'method' => 'post']) !!}
<div class="col-md-4 form-group-lg">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre...'])!!}
</div>
<div class="col-md-8 form-group-lg">
    {!!Form::label('Apellidos:')!!}
    {!!Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Sanchez...'])!!}
</div>
<div class="col-md-7 form-group-lg">
    {!!Form::label('Direccion:')!!}
    {!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Calle...'])!!}  
</div>
<div class="col-md-3 form-group-lg">
    {!!Form::label('Localidad:')!!}
    {!!Form::text('localidad',null,['class'=>'form-control', 'placeholder'=>'Madrid...'])!!}  
</div>
<div class="col-md-2 form-group-lg">
    {!!Form::label('C.P:')!!}
    {!!Form::text('cp',null,['class'=>'form-control', 'placeholder'=>'28021...'])!!}  
</div>
<div class="col-lg-6 form-group-lg">
    {!!Form::label('Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Correo Electronico...'])!!}  
</div>
<div class="col-md-6 form-group-lg">
    {!!Form::label('Password:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Contraseña...'])!!}
</div>
<div>
    {!! Form::submit('Confirmar', ['class'=>'btn']) !!}
</div>
{!! Form::close() !!}

@endsection
