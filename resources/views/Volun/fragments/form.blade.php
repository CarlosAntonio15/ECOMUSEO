<div class="form-group">
 {!! Form::label('id', 'ID')!!}
 {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('nombre', 'Nombre')!!}
 {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('apellido1', 'apellido1')!!}
 {!! Form::text('apellido1', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('apellido2', 'apellido2')!!}
 {!! Form::text('apellido2', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('telefono', 'telefono')!!}
 {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('direccion', 'direccion')!!}
 {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('email', 'email')!!}
 {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('descripcion', 'descripcion')!!}
 {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}
</div>