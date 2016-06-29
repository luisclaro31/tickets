<div class="form-group">
    {!! Form::label('full_name', 'Nombre y Apellidos') !!}
    {!! Form::text('full_name', null,['class' => 'form-control', 'placeholder' => 'Primer Nombre', 'autofocus']) !!}
</div>
<div class="form-group">
    <!-- {!! Form::label('identification', 'Identificacion') !!} -->
    {!! Form::text('identification',null,['class' => 'form-control', 'placeholder' => 'Identificacion', 'style' => 'display:none']) !!}
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', ['' => 'Seleccionar Tipo', 'Tipo de Servicio' => $category], null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    <!-- {!! Form::label('user_id', 'Usuario Modificaor o Registrador = '. Auth::user()->full_name ) !!} -->
    {!! Form::text('user_id',Auth::user()->id,[ 'class' => 'form-control', 'placeholder' => 'User_id', 'readonly', 'style' => 'display:none']) !!}
</div>