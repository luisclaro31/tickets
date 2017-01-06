@extends('theme.layout')

@section('content')
    <section id="#home" class="content-header">
        <h1>
            Editar Tickets
            <small>Formulario de Edicion de Registro (Ticket)</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-user-plus"></i> Registrador</a></li>
            <li class="active">Editar Tickets</li>
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
                @include('ticket.call.design.partials.messages')

                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif

                {!! Form::model($results_student, ['route' => 'ticket.call.store', 'method' => 'POST' ]) !!}
                    @include('ticket.call.design.fields.call_fields')
                        <button type="submit" class="btn btn-success">Llamar Estudiante</button>
                {!! Form::close() !!}
                <p>
                {!! Form::model($results_student, ['route' => ['ticket.call.update', $results_student], 'method' => 'PUT' ]) !!}
                    @include('ticket.call.design.fields.student_fields')
                        <button type="submit" class="btn btn-danger">Confirmar Atencion</button>
                {!! Form::close() !!}
                </p>
            </div>
            <div class="box-footer">

            </div>
        </div>
    </section>
@endsection