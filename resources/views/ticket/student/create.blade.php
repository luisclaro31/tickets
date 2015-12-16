@extends('theme.layout')

    @section('content')
        <section id="#home" class="content-header">
            <h1>
                Crear Tickets
                <small>Formulario de Creacion de Registro (Ticket)</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-user-plus"></i> Registrador</a></li>
                <li class="active">Crear Tickets</li>
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
                    @include('ticket.student.design.partials.messages')

                    @if (Session::has('message'))
                        <p class="alert alert-success">{{ Session::get('message') }}</p>
                    @endif

                    {!! Form::open(['route' => 'ticket.student.store', 'method' => 'POST' ]) !!}
                        @include('ticket.student.design.fields.student_fields')
                            <button type="submit" class="btn btn-default">Crear Ticket</button>
                    {!! Form::close() !!}
                </div>
                <div class="box-footer">
                    <table class="table table-striped">
                        @include('ticket.student.design.partials.table')
                    </table>
                </div>
            </div>
        </section>
    @endsection