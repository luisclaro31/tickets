@extends('home.layout')
@section('content')
<!-- <meta http-equiv="refresh" content="70"> -->

<section class="content-header">
	<!--<h1>
		Top Navigation
		<small>Example 2.0</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
		<li class="active">Dashboard</li>
	</ol>-->
</section>

<section class="content">
	<div id="contenido" class="col-lg-6" align="center">

	</div>
	<div class="col-lg-6" align="center">
		<div class="box box-primary">
			<div class="box-body">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="{{asset('img/0.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/11.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/1.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/2.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/3.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/4.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/5.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/6.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/7.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/8.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/9.jpeg')}}" alt="Imagen">
						</div>
						<div class="item">
							<img src="{{asset('img/10.jpeg')}}" alt="Imagen">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->

	</div>
</section><!-- /.content -->
@endsection

