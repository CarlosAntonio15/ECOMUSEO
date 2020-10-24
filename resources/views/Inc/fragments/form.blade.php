<div class="form-group">
 {!! Form::label('id', 'ID')!!}
 {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('quantity', 'quantity')!!}
 {!! Form::text('quantity', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::label('description', 'description')!!}
 {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
 {!! Form::date('incomeDate', 'incomeDate')!!}
 {!! Form::date('incomeDate', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}
</div>