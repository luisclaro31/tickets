<div class="modal fade" id="modal_update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    {!! Form::label('full_name', 'Nombre y Apellidos') !!}
                    {!! Form::text('full_name', null,['id'=>'full_name','class' => 'form-control', 'placeholder' => 'Primer Nombre']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('identification', 'Identificacion') !!}
                    {!! Form::text('identification',null,['id'=>'identification','class' => 'form-control', 'placeholder' => 'Identificacion']) !!}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-update" >Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>