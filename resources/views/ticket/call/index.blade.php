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
                    @include('ticket.call.design.partials.table')
                </table>
            </div>
            <div class="box-footer">
                <div align="right">{!! $results->render() !!}</div>
            </div>
        </div>
    </section>
@endsection