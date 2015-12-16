@extends('app')

@section('content')

<div class="large-12 columns">

	@include('partials.title', array('type' => 'edit', 'textTitle' => 'Actividad'))

</div><!-- /large-12 -->

<div class="large-8 columns">	
	
	<div class="row">

	{!! Form::model($actividad,['method' => 'PATCH', 'action' => ['ActividadesController@update', $actividad->id]]) !!}

	@include('actividades.form', ['buttonText' => 'Actualizar Actividad'])

	{!! Form::close() !!}

	</div><!-- /row -->

	@if($errors->any())
		<ul class="alert">
			@foreach($errors->all() as $error)
			<li>{{$error}}
			@endforeach
		</ul>
	@endif

</div><!-- /large-8 -->

<div class="large-4 columns">
	sidebar
</div><!-- /large-4 -->

@stop