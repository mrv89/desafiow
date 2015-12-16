@extends('app')

@section('content')

	<div class="large-12 columns">
		@include('partials.title', array('type' => '', 'textTitle' =>  $imaginar->nombre ))
		<div class="content">
			{{ $imaginar->contenido }}
		</div>
		<h3>{{ $imaginar->actividad_id }}</h3>
		
	</div>

@stop