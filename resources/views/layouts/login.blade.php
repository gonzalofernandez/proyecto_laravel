@extends('app')

@section('content')

{!! Form::open(['route' => 'login', 'method' => 'post']) !!}

<div class="col-lg-6 form-group-lg">
    {!!Form::label('Correo:')!!}
    {!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'xx@xx.xx'])!!}  
</div>
<div class="col-md-6 form-group-lg">
    {!!Form::label('Password:')!!}
    {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'4 números'])!!}
</div>
<div>
    {!! Form::submit('Confirmar', ['class'=>'btn']) !!}
</div>

{!! Form::close() !!}
<a href="/">Volver</a>

@endsection
