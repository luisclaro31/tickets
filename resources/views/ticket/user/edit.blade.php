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
                @include('ticket.user.design.partials.messages')

                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif

                {!! Form::model($result, ['route' => ['users.my_profile.update', $result], 'method' => 'PUT' ]) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'Nombres') !!}
                    {!! Form::text('full_name', null,['class' => 'form-control', 'placeholder' => 'Nombres', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('module', '# Modulo') !!}
                    {!! Form::selectRange('module',1, 10, null, ['class' => 'form-control', 'placeholder' => '# Modulo']) !!}
                </div>
                <button type="submit" class="btn btn-default">Actualizar</button>
                {!! Form::close() !!}
            </div>
            <div class="box-footer">

            </div>
        </div>
    </section>
@endsection