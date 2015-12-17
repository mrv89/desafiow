@extends('app-public')

@section('content')

<div class="large-12 columns">
	<div style="width:400px;margin:150px auto;background:#fff;border:1px solid #ccc;">
	<h1 style="background:#ccc;"><img src="{{ asset('/img/logo.png') }}" alt="DesafioW"></h1>
	<h3 style="padding:10px;margin:0;font-family:'Open Sans';border-bottom:1px solid #efefef;">Login</h3>				

	<form style="padding:10px;" class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div class="form-group">
			<label class="col-md-4 control-label">E-Mail</label>
			<div class="col-md-6">
				<input type="email" class="form-control" name="email" value="{{ old('email') }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-md-4 control-label">Contraseña</label>
			<div class="col-md-6">
				<input type="password" class="form-control" name="password">
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Recordarme
					</label>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				<button type="submit" class="button small">Ingresar</button>

				<a class="button alert small" href="{{ url('/password/email') }}">Recuperar Contraseña</a>
			</div>
		</div>
	</form>

	</div>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	
</div><!-- /large-12 -->

@endsection