@extends('app')

@section('content')

<div class="large-12 columns">
	@include('partials.title', array('type' => '', 'textTitle' => $actividad->nombre))
	<h3>{{ $actividad->desafio_id }}</h3>	
</div>

@stop