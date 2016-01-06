@extends('theme.layout')
    @section('content')
    <section id="#home" class="content-header">
        <h1>
            Reportes
            <small>Listado de atenccion</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">Reportes</li>
        </ol>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Reporte Total</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div><p>Total Trabajadores # {{ $results->total() }} </p></div>
                @if (Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                <table class="table table-striped">
                    @include('ticket.report.design.partials.table')
                </table>
            </div>
            <div class="box-footer">
                <div align="right">{!! $results->render() !!}</div>
            </div>
        </div>
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Reportes Por Categorias</h3>
                <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <table id="table" class="table table-bordered table-striped">
                    @include('ticket.report.design.partials.table2')
                </table>
            </div>
        </div>
    </section>
    @endsection