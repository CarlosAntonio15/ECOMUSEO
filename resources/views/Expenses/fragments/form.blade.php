<div class="form-group">
 {!! Form::label('id', 'ID')!!}
 {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::date('date', 'date')!!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('voucher', 'voucher')!!}
    {!! Form::text('voucher', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::label('description', 'description')!!}
 {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('responsable', 'responsable')!!}
    {!! Form::text('responsable', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('amount', 'amount')!!}
    {!! Form::text('amount', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
 {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}
</div>