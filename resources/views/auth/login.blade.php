@extends('auth.design.layout')
@section('contents')
	<form class="navbar-form navbar-right" id="loginform" role="form" method="POST" action="{{ url('/auth/login') }}">
		@if ( count($errors) > 0)
			<p><h4><span class="label label-danger">El Correo o la Contraseña Son Incorrectos</span></h4></p>
		@else
			<p>Introduzca username y contraseña para continuar.</p>
		@endif
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="input-group input-sm">
			<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
			{!! Form::email('email',null, ['id'=>'username','class' =>'form-control','placeholder' => 'Correo Electronico'])  !!}
		</div>
		<div class="input-group input-sm">
			<span class="input-group-addon"><i class="fa fa-key"></i></span>
			{!!  Form::password('password',['id'=>'password','class' => 'form-control', 'placeholder' => 'Contraseña'])  !!}
		</div>
		<div class="checkbox">
			<label class="remember-me">
				{!! Form::checkbox('remember') !!}
				Remember Me
			</label>
		</div>
		<div class="footer-login" >
			<div class="pull-center text" ><input  class="btn btn-block btn-primary btn-default" value="Acceder" type="submit">
				<div id="loading" ><img src="{{ asset('theme_login/img/loading-icons/loading5.gif')}}"></div>
			</div>
		</div>
	</form>
@endsection