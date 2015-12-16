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
    {!! Form::select('category_id',['' => 'Seleccione Tipo',  '1'   => 'Credito', '2'   => 'Icetex',  '3'   => 'Volante De Matricula ', '4'   => 'Recbo De Cuato', '5'   => 'Otro Volante', '6'   => 'Inscripcion, Reintegro O Tranferencia', '7'   => 'Entrega De Documentos', '8'   => 'Dir Admisiones'],null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Usuario Modificaor o Registrador = '. Auth::user()->full_name ) !!}
    {!! Form::text('user_id',Auth::user()->id,[ 'class' => 'form-control', 'placeholder' => 'User_id', 'readonly']) !!}
</div>