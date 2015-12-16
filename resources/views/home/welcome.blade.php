@extends('home.layout')
@section('content')

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
							<img src="{{asset('img/1.png')}}" alt="First slide">
						</div>
						<div class="item">
							<img src="{{asset('img/2.png')}}" alt="Second slide">
						</div>
						<div class="item">
							<img src="{{asset('img/3.png')}}" alt="Third slide">
						</div>
						<div class="item">
							<img src="{{asset('img/4.png')}}" alt="Third slide">
						</div>
						<div class="item">
							<img src="{{asset('img/5.png')}}" alt="Third slide">
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

