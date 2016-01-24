<div class="form-group">
    {!! Form::label('full_name', 'Nombre y Apellidos') !!}
    {!! Form::text('full_name', null,['class' => 'form-control', 'placeholder' => 'Primer Nombre']) !!}
</div>
<div class="form-group">
    {!! Form::label('identification', 'Identificacion') !!}
    {!! Form::text('identification',null,['class' => 'form-control', 'placeholder' => 'Identificacion']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', config('info.select.category_id') ,null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Usuario Modificaor o Registrador = '. Auth::user()->full_name ) !!}
    {!! Form::text('user_id',Auth::user()->id,[ 'class' => 'form-control', 'placeholder' => 'User_id', 'readonly']) !!}
</div>