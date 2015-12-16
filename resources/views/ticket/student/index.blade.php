@extends('theme.layout')

    @section('content')
        <section id="#home" class="content-header">
            <h1>
                Inicio
                <small>Listado de Estudiantes Registrados Sin atender</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Registrador</a></li>
                <li class="active">Inicio</li>
            </ol>
        </section>
        <section class="content">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div><p>Total Estudiantes Con Turnos # {{ $results->total() }} </p></div>
                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif
                    <table class="table table-striped">
                        @include('ticket.student.design.partials.table')
                    </table>
                </div>
                <div class="box-footer">
                    <div align="right">{!! $results->render() !!}</div>
                    @include('ticket.student.design.partials.modal_update')
                    {!! Form::open(['route' => ['ticket.student.destroy', ':USER_ID'], 'method' => 'DELETE', 'id' => 'form-delete' ]) !!}
                    {!! Form::close() !!}
                    {!! Form::open(['route' => ['ticket.student.update', ':USER_ID'], 'method' => 'PUT', 'id' => 'form-update' ]) !!}
                    {!! Form::close() !!}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                </div>
            </div>
        </section>
    @endsection

    @section('script')
        <script>
            $(document).ready(function () {

                $('.btn-delete').click(function (e) {
                    e.preventDefault();

                    var row = $(this).parents('tr');
                    var id = row.data('id');
                    var form = $('#form-delete');
                    var url = form.attr('action').replace(':USER_ID', id);
                    var data = form.serialize();

                    row.fadeOut();
                    $.post(url, data, function (result) {
                        alert(result.message);
                    }).fail(function () {
                        alert('Error al Eliminar el Registro');
                        row.show();
                    });
                });

                $('.btn-edit').click(function (e) {
                    e.preventDefault();
                    var row = $(this).parents('tr');
                    var url = row.data('url');

                    $.get(url, function (results){
                        $('#id').val(results.id);
                        $('#full_name').val(results.full_name);
                        $('#identification').val(results.identification);
                    });
                    $('.btn-update').click(function(){
                        var id = row.data('id');
                        var form = $('#form-update');
                        var url2 = form.attr('action').replace(':USER_ID', id);
                        var full_name = $('#full_name').val();
                        var identification = $('#identification').val();
                        var token = $("#token").val();

                        $.ajax({
                            url: url2,
                            headers: {'X-CSRF-TOKEN': token},
                            type: 'PUT',
                            dataType: 'json',
                            data: {full_name: full_name},
                        });
                    });
                });
            });
        </script>
    @endsection