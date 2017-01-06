<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ticket @yield('tittle')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    @include('theme.head.style')
</head>
<!-- ADD THE CLASS fixed TO GET A FIXED HEADER AND SIDEBAR LAYOUT -->
<body class="skin-blue">
<!-- Site wrapper -->
<div class="wrapper">
    <header class="main-header">
        @include('theme.header.menu_principal')
    </header>
    <!-- =============================================== -->
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        @include('theme.body.menu_left')
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <table>
            <thead>
            <tr>
                <th>Turno #</th>
                <th>Nombre de la Persona</th>
                <th>Identificacion</th>
                <th>Tramite</th>
                <th>#</th>
                <th>#</th>
            </tr>
            </thead>
            <tbody>
            @foreach($results as $result)
                <tr data-id="{{ $result->id }}" data-url="{{ route('ticket.student.edit', $result)  }}">
                    <td>{{ $result->category->acronym.''.$result->id }}</td>
                    <td>{{ $result->full_name }}</td>
                    <td>{{ $result->identification }}</td>
                    <td>{{ $result->category->description }}</td>
                    <td>{{ $result->id }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-lg btn-edit" data-toggle="modal" data-target="#edit">
                            Editar
                        </button>
                        <a href="#!" class="btn-edit">Editar</a>
                        <a href="#!" class="btn-delete">Eliminar</a>
                        <a href="" class="btn-call">Llamar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Turno #</th>
                <th>Nombre de la Persona</th>
                <th>Identificacion</th>
                <th>Tramite</th>
                <th>#</th>
            </tr>
            </tfoot>
        </table>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                        <button type="button" class="btn btn-primary btn-update" >Save changes</button>
                    </div>
                </div>
            </div>
        </div>


    </div><!-- /.content-wrapper -->
</div><!-- ./wrapper -->
{!! Form::open(['route' => ['ticket.student.update', ':USER_ID'], 'method' => 'PUT', 'id' => 'form-update' ]) !!}
{!! Form::close() !!}
{!! Form::open(['route' => ['ticket.register.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete' ]) !!}
{!! Form::close() !!}
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

@include('theme.footer.script')
<script>
    $('.btn-edit').click(function(){
        var row = $(this).parents('tr');
        var url = row.data('url');


        $.get(url, function (results){
            $('#id').val(results.id);
            $('#ids').val(results.id);
            $('#full_name').val(results.full_name);
            $('#identification').val(results.identification);
        });
        $('.btn-update').click(function(){
            var id = row.data('id');
            var form = $('#form-update');
            var url2 = form.attr('action').replace(':USER_ID', id);
            var token2 = form.serialize('token');
            var full_name = $('#full_name').val();
            var token = $("#token").val();


            $.ajax({
                url: url2,
                headers: {'X-CSRF-TOKEN': token},
                type: 'PUT',
                dataType: 'json',
                data: {full_name: full_name},
            }).fail(function() {
                alert('El Usuario no Fue Eliminado');
                row.show();
            });

        });
    });



    $('.btn-delete').click(function(){

        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID', id);
        var data = form.serialize();

        alert(id);

        row.fadeOut();

        $.post(url, data, function (result) {
            alert(result.message);
        }).fail(function() {
            alert('El Usuario no Fue Eliminado');
            row.show();
        });
        //alert(url);
        //alert(data);
        //alert(form.attr('action'));
        //alert(id);
    });
</script>

</body>
</html>