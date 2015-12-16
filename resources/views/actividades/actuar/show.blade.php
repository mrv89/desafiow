@extends('app')

@section('content')

	<div class="large-12 columns">
		@include('partials.title', array('type' => '', 'textTitle' =>  $actuar->nombre ))
		<div class="content">
			{{ $actuar->contenido }}
		</div>
		<h3>{{ $actuar->actividad_id }}</h3>
		
	</div>

@stop