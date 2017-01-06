@extends('theme.layout')

@section('content')
<meta http-equiv="refresh" content="10">
<section class="content-header">
	<h1>
		Inicio
		<small>Table de Todos los Turnos Sin Atender</small>
	</h1>
	<ol class="breadcrumb">
		<li><a class="active"><i class="fa fa-home"></i> Inicio</a></li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="box-header with-border">
			<h3 class="box-title">Title</h3>
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
				<button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
			</div>
		</div>
		<div class="box-body">
			<table id="table" class="table table-bordered table-striped">
				@include('ticket.call.design.partials.table')
			</table>
		</div><!-- /.box-body -->
		<div class="box-footer">
			Footer
		</div><!-- /.box-footer-->
	</div><!-- /.box -->

</section><!-- /.content -->
@endsection
