<div class="form-group">
    {!! Form::label('full_name', 'Nombre y Apellidos') !!}
    {!! Form::text('full_name', null,['class' => 'form-control', 'placeholder' => 'Primer Nombre','readonly']) !!}
</div>
<div class="form-group">
    {!! Form::label('identification', 'Identificacion') !!}
    {!! Form::text('identification',null,['class' => 'form-control', 'placeholder' => 'Identificacion','readonly']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id',['' => 'Seleccione Tipo', '1'   => 'Recibo De Credito', '2'   => 'Credito Directo', '3'   => 'Inscripcion', '4' => 'Consulta Dir Admisiones'],null, ['class' => 'form-control','readonly']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Usuario Modificaor o Registrador = '. Auth::user()->full_name ) !!}
    {!! Form::text('user_id',null,[ 'class' => 'form-control', 'placeholder' => 'User_id', 'readonly']) !!}
</div>
<div class="form-group">
    {!! Form::label('state', 'Estado') !!}
    {!! Form::select('state',['0'   => 'Por Atender', '1'   => 'Atendido', '2'   => 'No Atendido'],null, ['class' => 'form-control']) !!}
</div>
