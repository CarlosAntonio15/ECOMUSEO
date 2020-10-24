<div class="form-group">
    {!! Form::label('id', 'ID')!!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
   </div>


   <div class="form-group">
    {!! Form::label('name', 'name')!!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('lastName', 'lastName')!!}
    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('donationType', 'donationType')!!}
    {!! Form::text('donationType', null, ['class' => 'form-control']) !!}
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
    {!! Form::label('currentDate', 'currentDate')!!}
    {!! Form::text('currentDate', null, ['class' => 'form-control']) !!}
   </div>


   <div class="form-group">
    {!! Form::label('phone', 'phone')!!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
   </div>



   <div class="form-group">
    {!! Form::label('mail', 'mail')!!}
    {!! Form::text('mail', null, ['class' => 'form-control']) !!}
   </div>
   

   <div class="form-group">
    {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}
   </div>