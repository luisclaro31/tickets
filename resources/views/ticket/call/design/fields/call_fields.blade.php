<div class="form-group">
    {!! Form::label('student_id', '# del Ticket') !!}
    {!! Form::text('student_id', $results_student->id,['class' => 'form-control', 'placeholder' => 'id', 'readonly']) !!}
</div>
<div class="form-group">
    {!! Form::label('user_id', 'Usuario Modificaor o Registrador = '. Auth::user()->full_name ) !!}
    {!! Form::text('user_id',Auth::user()->id,[ 'class' => 'form-control', 'placeholder' => 'User_id', 'readonly']) !!}
</div>