<div class="col-md-4 form-group-lg">
    {!!Form::label('Nombre:')!!}
    {!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'Nombre'])!!}
</div>
<div class="col-md-8 form-group-lg">
    {!!Form::label('Apellidos:')!!}
    {!!Form::text('apellidos',null,['class'=>'form-control', 'placeholder'=>'Apellidos'])!!}
</div>
<div class="col-md-7 form-group-lg">
    {!!Form::label('Direccion:')!!}
    {!!Form::text('direccion',null,['class'=>'form-control', 'placeholder'=>'Dirección completa'])!!}  
</div>
<div class="col-md-3 form-group-lg">
    {!!Form::label('Localidad:')!!}
    {!!Form::text('localidad',null,['class'=>'form-control', 'placeholder'=>'Localidad'])!!}  
</div>
<div class="col-md-2 form-group-lg">
    {!!Form::label('C.P:')!!}
    {!!Form::text('cp',null,['class'=>'form-control', 'placeholder'=>'5 números'])!!}  
</div>
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
