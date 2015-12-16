@extends('app')

@section('content')

	<div class="large-12 columns">
		@include('partials.title', array('type' => '', 'textTitle' =>  $aprender->nombre ))
		<div class="content">
			{{ $aprender->contenido }}
		</div>
		<h3>{{ $aprender->actividad_id }}</h3>
		
	</div>

@stop